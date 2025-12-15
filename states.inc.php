<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * RollForTheGalaxy implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 * 
 * states.inc.php
 *
 * RollForTheGalaxy game states description
 *
 */

/*
   Game state machine is a tool used to facilitate game developpement by doing common stuff that can be set up
   in a very easy way from this configuration file.

   Please check the BGA Studio presentation about game state to understand this, and associated documentation.

   Summary:

   States types:
   _ activeplayer: in this type of state, we expect some action from the active player.
   _ multipleactiveplayer: in this type of state, we expect some action from multiple players (the active players)
   _ game: this is an intermediary state where we don't expect any actions from players. Your game logic must decide what is the next game state.
   _ manager: special type for initial and final state

   Arguments of game states:
   _ name: the name of the GameState, in order you can recognize it on your own code.
   _ description: the description of the current game state is always displayed in the action status bar on
                  the top of the game. Most of the time this is useless for game state with "game" type.
   _ descriptionmyturn: the description of the current game state when it's your turn.
   _ type: defines the type of game states (activeplayer / multipleactiveplayer / game / manager)
   _ action: name of the method to call when this game state become the current game state. Usually, the
             action method is prefixed by "st" (ex: "stMyGameStateName").
   _ possibleactions: array that specify possible player actions on this step. It allows you to use "checkAction"
                      method on both client side (Javacript: this.checkAction) and server side (PHP: self::checkAction).
   _ transitions: the transitions are the possible paths to go from a game state to another. You must name
                  transitions in order to use transition names in "nextState" PHP method, and use IDs to
                  specify the next game state for each transition.
   _ args: name of the method to call to retrieve arguments for this gamestate. Arguments are sent to the
           client side to be used on "onEnteringState" or to set arguments in the gamestate description.
   _ updateGameProgression: when specified, the game progression is updated (=> call to your getGameProgression
                            method).
*/

//    !! It is not a good idea to modify this file when a game is running !!

 
$machinestates = array(

    // The initial state. Please do not modify.
    1 => array(
        "name" => "gameSetup",
        "description" => "",
        "type" => "manager",
        "action" => "stGameSetup",
        "transitions" => array( "" => 2 )
    ),
    
    // Game initialization 

    2 => array(
    		"name" => "startingWorldCombination",
    		"description" => clienttranslate('Everyone must choose which tiles to place in their Construction zone'),
    		"descriptionmyturn" => clienttranslate('${you} must choose which tiles to place in your Construction zone'),
    		"type" => "multipleactiveplayer",
    		"action" => "stStartingWorldCombination",
    		"possibleactions" => array( "startingWorldCombination" ),
    		"transitions" => array( "startingWorldCombination" => 10, "zombiePass" => 10 )
    ),
    

    // Turn start

    10 => array(
    		"name" => "roll",
    		"description" => clienttranslate('Dice are rolled...'),
    		"descriptionmyturn" => clienttranslate('Dice are rolled...'),
    		"type" => "game",
    		"action" => "stRoll",
            "updateGameProgression" => true,   
    		"transitions" => array( "newTurn" => 11 )
    ),
    11 => array(
    		"name" => "assign",
    		"description" => clienttranslate('Everyone must assign workers (dice) to phases'),
    		"descriptionmyturn" => clienttranslate('${you} must assign workers (dice) to phases'),
    		"type" => "multipleactiveplayer",
    		"args" => "argAssign",
    		"possibleactions" => array( "assign" ),
    		"transitions" => array( "assign" => 19, "zombiePass" => 19 )
    ),
    19 => array(
    		"name" => "reveal",
    		"description" => clienttranslate('Dice are revealed...'),
    		"descriptionmyturn" => clienttranslate('Dice are revealed...'),
    		"type" => "game",
    		"action" => "stReveal",
    		"transitions" => array( "reveal" => 20 )
    ),


    // Explore

    20 => array(
    		"name" => "startExplore",
    		"description" => '',
    		"type" => "game",
    		"action" => "stStartExplore",
    		"transitions" => array( "startPhase" => 21, "skipPhase" => 30 )
    ),
    
    21 => array(
    		"name" => "explore",
    		"description" => clienttranslate('Explore: Everyone must scout or stock'),
    		"descriptionmyturn" => clienttranslate('Explore: ${you} must scout or stock'),
    		"type" => "multipleactiveplayer",
    		"possibleactions" => array( "scout", "stock" ),
    		"transitions" => array( "no_more_actions" => 29, "zombiePass" => 29 )
    ),

    25 => array(
    		"name" => "alien_research",
    		"description" => clienttranslate('Alien Research Team: ${actplayer} must choose a card to keep.'),
    		"descriptionmyturn" => clienttranslate('Alien Research Team: ${you} must choose a card to keep.'),
    		"type" => "activeplayer",
    		"possibleactions" => array( "scout", "alien_research" ),
    		"transitions" => array( "no_more_actions" => 26, "zombiePass" => 26 )
    ),
    26 => array(
    		"name" => "endAlienResearch",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndExploreAlien",
    		"transitions" => array( "endPhase" => 30 )
    ),


    29 => array(
    		"name" => "endExplore",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndExplore",
    		"transitions" => array( "endPhase" => 30, "alien_research" => 25 )
    ),
    

    // Develop

    30 => array(
    		"name" => "startDevelop",
    		"description" => clienttranslate('Develop: Everyone must send workers (dice) to their development in construction'),
    		"descriptionmyturn" => clienttranslate('Develop: ${you} must send workers (dice) to your development in construction'),
    		"type" => "multipleactiveplayer",
    		"action" => "stStartDevelop",
    		"possibleactions" => array( "chooseDiceForConstr" ),
    		"transitions" => array( "skipPhase" => 40, 'endPhase' => 39, "zombiePass" => 39,
    		
    		    "removedie" => 1001,
    		    'back_dice_on_dev' => 1002
    		 )
    ),
        
    39 => array(
    		"name" => "endDevelop",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndDevelop",
    		"transitions" => array( "endPhase" => 40 )
    ),


    // Settle

    40 => array(
    		"name" => "startSettle",
    		"description" => clienttranslate('Settle: Everyone must send workers (dice) to their world in construction'),
    		"descriptionmyturn" => clienttranslate('Settle: ${you} must send workers (dice) to your world in construction'),
    		"type" => "multipleactiveplayer",
    		"action" => "stStartSettle",
    		"possibleactions" => array( "chooseDiceForConstr" ),
    		"transitions" => array( "skipPhase" => 50, 'endPhase' => 49, "zombiePass" => 49,

    		    "removedie" => 1001,
    		    'back_dice_on_settle' => 1004
    		
    		)
    ),

    49 => array(
    		"name" => "endSettle",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndSettle",
    		"transitions" => array( "endPhase" => 50 )
    ),


    // Produce

    50 => array(
    		"name" => "startProduce",
    		"description" => '',
    		"type" => "game",
    		"action" => "stStartProduce",
    		"transitions" => array( "startPhase" => 51, "skipPhase" => 60 )
    ),
    
    51 => array(
    		"name" => "produce",
    		"description" => clienttranslate('Produce: Everyone must choose which worlds produce resources'),
    		"descriptionmyturn" => clienttranslate('Produce: ${you} must choose which worlds produce resources'),
    		"type" => "multipleactiveplayer",
    		"possibleactions" => array( "produce" ),
    		"transitions" => array( "no_more_actions" => 59, "zombiePass" => 59 )
    ),

    59 => array(
    		"name" => "endProduce",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndProduce",
    		"transitions" => array( "endPhase" => 60 )
    ),
    
    // Ship

    60 => array(
    		"name" => "startShip",
    		"description" => '',
    		"type" => "game",
    		"action" => "stStartShip",
    		"transitions" => array( "startPhase" => 61, "skipPhase" => 100, "no_action_on_phase" => 69, "zombiePass" => 69 )
    ),
    
    61 => array(
    		"name" => "ship",
    		"description" => clienttranslate('Ship: Everyone must trade or consume resources'),
    		"descriptionmyturn" => clienttranslate('Ship: ${you} must trade or consume resources'),
    		"type" => "multipleactiveplayer",
    		"possibleactions" => array( "ship" ),
    		"transitions" => array( "no_more_actions" => 69, "zombiePass" => 69 )
    ),

    69 => array(
    		"name" => "endShip",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndShip",
    		"transitions" => array( "endPhase" => 100 )
    ),
    

    
    // Manage empire (end of turn)

    100 => array(
    		"name" => "startManage",
    		"description" => '',
    		"type" => "game",
    		"action" => "stStartManage",
    		"transitions" => array( "startPhase" => 101, "skipPhase" => 110 )
    ),
    
    101 => array(
    		"name" => "manage",
    		"description" => clienttranslate('Manage Empire: Everyone must recruit or recall workers'),
    		"descriptionmyturn" => clienttranslate('Manage Empire: ${you} must recruit or recall workers'),
    		"type" => "multipleactiveplayer",
    		"possibleactions" => array( "recruit", "recall" ),
    		"transitions" => array( "no_more_actions" => 110,  "zombiePass" => 110 )
    ),
    


    110 => array(
    		"name" => "endTurn",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndTurn",
    		"transitions" => array( "nextTurn" => 10, "endGame" => 99 )
    ),

        
    
    // Main phase
    
/*
        TILES EFFECTS
*/   

    1000 => array(
    		"name" => "endEffect",
    		"description" => '',
    		"type" => "game",
    		"action" => "stEndEffect",
    		"transitions" => array( "develop" => 30, "settle" => 40 )
    ),


    1001 => array(
    		"name" => "removedie",
    		"description" => clienttranslate('${card_name}: ${actplayer} must choose a die to remove'),
    		"descriptionmyturn" => clienttranslate('${card_name}: ${you} must choose a die to remove'),
    		"type" => "activeplayer",
    		"args" => "argCurrentEffect",
    		"possibleactions" => array( "removedie" ),
    		"transitions" => array( "endEffect" => 1000,  "zombiePass" => 1000 )
    ),

    1002 => array(
    		"name" => "savedie",
    		"description" => clienttranslate('Galactic Federation: ${actplayer} must choose a die from development in construction and place it back to cup'),
    		"descriptionmyturn" => clienttranslate('Galactic Federation: ${you} must choose a die from development in construction and place it back to cup'),
    		"type" => "activeplayer",
    		"args" => "argCurrentEffect",
    		"possibleactions" => array( "savedie", "donotuse" ),
    		"transitions" => array( "donotuse" => 1000, "continue" => 1003,  "zombiePass" => 1000 )
    ),
    1003 => array(
    		"name" => "savedie",
    		"description" => clienttranslate('Galactic Federation: ${actplayer} must choose a die from development in construction and place it back to cup'),
    		"descriptionmyturn" => clienttranslate('Galactic Federation: ${you} must choose a die from your development in construction and place it back to cup'),
    		"type" => "activeplayer",
    		"args" => "argCurrentEffect",
    		"possibleactions" => array( "savedie", "donotuse" ),
    		"transitions" => array( "donotuse" => 1000, "continue" => 1000,  "zombiePass" => 1000 )
    ),
    1004 => array(
    		"name" => "savedie",
    		"description" => clienttranslate('Galactic Exchange: ${actplayer} must choose a die from world in construction and place it back to cup'),
    		"descriptionmyturn" => clienttranslate('Galactic Exchange: ${you} must choose a die from your world in construction and place it back to cup'),
    		"type" => "activeplayer",
    		"args" => "argCurrentEffect",
    		"possibleactions" => array( "savedie", "donotuse" ),
    		"transitions" => array( "donotuse" => 1000, "continue" => 1005,  "zombiePass" => 1000 )
    ),
    1005 => array(
    		"name" => "savedie",
    		"description" => clienttranslate('Galactic Exchange: ${actplayer} must choose a die from world in construction and place it back to cup'),
    		"descriptionmyturn" => clienttranslate('Galactic Exchange: ${you} must choose a die from your world in construction and place it back to cup'),
    		"type" => "activeplayer",
    		"args" => "argCurrentEffect",
    		"possibleactions" => array( "savedie", "donotuse" ),
    		"transitions" => array( "donotuse" => 1000, "continue" => 1000,  "zombiePass" => 1000 )
    ),



 
   
    // Final state.
    // Please do not modify.
    99 => array(
        "name" => "gameEnd",
        "description" => clienttranslate("End of game"),
        "type" => "manager",
        "action" => "stGameEnd",
        "args" => "argGameEnd"
    )

);




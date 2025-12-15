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
 * rollforthegalaxy.view.php
 *
 * This is your "view" file.
 *
 * The method "build_page" below is called each time the game interface is displayed to a player, ie:
 * _ when the game starts
 * _ when a player refreshes the game page (F5)
 *
 * "build_page" method allows you to dynamically modify the HTML generated for the game interface. In
 * particular, you can set here the values of variables elements defined in rollforthegalaxy_rollforthegalaxy.tpl (elements
 * like {MY_VARIABLE_ELEMENT}), and insert HTML block elements (also defined in your HTML template file)
 *
 * Note: if the HTML of your game interface is always the same, you don't have to place anything here.
 *
 */

  require_once( APP_BASE_PATH."view/common/game.view.php" );

  class view_rollforthegalaxy_rollforthegalaxy extends game_view
  {
    function getGameName() {
        return "rollforthegalaxy";
    }
  	function build_page( $viewArgs )
  	{
  	    // Get players & players number
        $players = $this->game->loadPlayersBasicInfos();
        $players_nbr = count( $players );


        $player_nbr = count( $players );    // Note: number of players = number of rows

        global $g_user;
        $this->page->begin_block( "rollforthegalaxy_rollforthegalaxy", "player" );
        foreach( $players as $player_id => $player )
        {
            if( $player_id == $g_user->get_id() )
            {
                $this->page->insert_block( "player", array( "PLAYER_ID" => $player['player_id'],
                                                            "PLAYER_NAME" => $player['player_name'],
                                                            "PLAYER_COLOR" => $player['player_color'],
                                                            "TABLEAU_NAME" => $player['player_name'] ) );

            }
        }
        foreach( $players as $player_id => $player )
        {
            if( $player_id != $g_user->get_id() )
            {
                $this->page->insert_block( "player", array( "PLAYER_ID" => $player['player_id'],
                                                            "PLAYER_NAME" => $player['player_name'],
                                                            "PLAYER_COLOR" => $player['player_color'],
                                                            "TABLEAU_NAME" =>  $player['player_name'] ) );

            }
        }


        $this->tpl['SCOUT_TITLE'] = self::_("You must choose on which sides (and which order) these tiles will be placed  under your construction areas");

        $this->tpl['SCOUTED_DEV'] = '('.self::_("development side").')';
        $this->tpl['SCOUTED_WORLD'] = '('.self::_("world side").')';

        $this->tpl['REMAINING_VP_CHIPS'] = self::_('Remaining VP chips');


        $this->tpl['TRADING_PRICES'] = self::_("Resources default trading prices");

        /*********** Place your code below:  ************/


        /*

        // Examples: set the value of some element defined in your tpl file like this: {MY_VARIABLE_ELEMENT}

        // Display a specific number / string
        $this->tpl['MY_VARIABLE_ELEMENT'] = $number_to_display;

        // Display a string to be translated in all languages:
        $this->tpl['MY_VARIABLE_ELEMENT'] = self::_("A string to be translated");

        // Display some HTML content of your own:
        $this->tpl['MY_VARIABLE_ELEMENT'] = self::raw( $some_html_code );

        */

        /*

        // Example: display a specific HTML block for each player in this game.
        // (note: the block is defined in your .tpl file like this:
        //      <!-- BEGIN myblock -->
        //          ... my HTML code ...
        //      <!-- END myblock -->


        $this->page->begin_block( "rollforthegalaxy_rollforthegalaxy", "myblock" );
        foreach( $players as $player )
        {
            $this->page->insert_block( "myblock", array(
                                                    "PLAYER_NAME" => $player['player_name'],
                                                    "SOME_VARIABLE" => $some_value
                                                    ...
                                                     ) );
        }

        */



        /*********** Do not change anything below this line  ************/
  	}
  }

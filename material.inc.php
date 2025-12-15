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
 * material.inc.php
 *
 * RollForTheGalaxy game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

$this->dice_faces = array(

    1 => clienttranslate( 'Explore' ),
    2 => clienttranslate( 'Develop' ),
    3 => clienttranslate( 'Settle' ),
    4 => clienttranslate( 'Produce' ),
    5 => clienttranslate( 'Ship' ),
    6 => clienttranslate( 'Joker' ),

);


$this->dice_types = array(

    1 => array(
        'name' => clienttranslate( 'Starting' ),
        'number' => 25,
        'faces' => array(
            1, 1, 2, 3, 4, 5, 7
        ),
        'color' => 0
    ),
    2 => array(
        'name' => clienttranslate( 'Military' ),
        'number' => 22,
        'faces' => array(
            1, 2, 3, 2, 3, 6, 7
        ),
        'color' => 0
    ),
    3 => array(
        'name' => clienttranslate( 'Consumption' ),
        'number' => 9,
        'faces' => array(
            1, 2, 5, 5, 5, 6, 7
        ),
        'color' => 0
    ),
    4 => array(
        'name' => clienttranslate( 'Novelty' ),
        'number' => 20,
        'faces' => array(
            1, 4, 4, 5, 5, 6, 7
        ),
        'color' => 1
    ),
    5 => array(
        'name' => clienttranslate( 'Rare Elements' ),
        'number' => 14,
        'faces' => array(
            1, 2, 2, 4, 5, 6, 7
        ),
        'color' => 2
    ),
    6 => array(
        'name' => clienttranslate( 'Genes' ),
        'number' => 12,
        'faces' => array(
            1, 3, 3, 4, 6, 6, 7
        ),
        'color' => 3
    ),
    7 => array(
        'name' => clienttranslate( 'Alien' ),
        'number' => 9,
        'faces' => array(
            2, 3, 4, 6, 6, 6, 7
        ),
        'color' => 4
    ),
);

$this->colors = array(
    1 => clienttranslate('Novelty goods'),
    2 => clienttranslate('Rare elements'),
    3 => clienttranslate('Genes'),
    4 => clienttranslate('Alien technology')
);

$this->tiles_types = array(

    1 => array(
        'name' => clienttranslate( "Secluded World" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4
            )
        )
    ),
    2 => array(
        'name' => clienttranslate( "Star Nomad Lair" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4
            )
        )
    ),
    3 => array(
        'name' => clienttranslate( "Artist Colony" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4
            )
        )
    ),
    4 => array(
        'name' => clienttranslate( "Galactic Bankers" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'trade_may_spend_for_vp'
            )
        )
    ),
    5 => array(
        'name' => clienttranslate( "Sentient Robots" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'target' => 'cup'
            )
        )
    ),

    6 => array(
        'name' => clienttranslate( "New Survivalists" ),
        'category' => 'world',
        'cost' => 1,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4
            )
        )
    ),

    7 => array(
        'name' => clienttranslate( "Spice world" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'target' => 'cup'
            )
        )
    ),

    8 => array(
        'name' => clienttranslate( "Fifth Column" ),
        'category' => 'world',
        'cost' => 1,
        'type' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'target' => 'cup'
            )
        )
    ),

    9 => array(
        'name' => clienttranslate( "Hight-Gravity World" ),
        'category' => 'world',
        'cost' => 1,
        'type' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'target' => 'cup'
            )
        )
    ),

    10 => array(
        'name' => clienttranslate( "New Vinland" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'target' => 'cup'
            )
        )
    ),

//
    11 => array(
        'name' => clienttranslate( "Outlaw World" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'target' => 'cup'
            )
        )
    ),
    12 => array(
        'name' => clienttranslate( "Radioactive World" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 5,
                'target' => 'cup'
            )
        )
    ),
    13 => array(
        'name' => clienttranslate( "Asteroid Belt" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 5,
                'target' => 'cup'
            )
        )
    ),
    14 => array(
        'name' => clienttranslate( "Galactic Survey Headquarters" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'target' => 'cup'
            )
        )
    ),

    15 => array(
        'name' => clienttranslate( "Pirate World" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
            )
        )
    ),

    16 => array(
        'name' => clienttranslate( "Rebel Hideout" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'nbr' => 2,
                'type' => 2,
            )
        )
    ),

    17 => array(
        'name' => clienttranslate( "Silicon World" ),
        'category' => 'world',
        'cost' => 4,
        'type' => 2,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaingood',
            )
        )
    ),

    18 => array(
        'name' => clienttranslate( "Gem World" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'target' => 'cup'
            )
        )
    ),

    19 => array(
        'name' => clienttranslate( "Space Port" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'target' => 'cup'
            )
        )
    ),

    20 => array(
        'name' => clienttranslate( "Galactic Recycling" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'credit_when_build'
            )
        )
    ),
//

    21 => array(
        'name' => clienttranslate( "Planetary Nebula" ),
        'category' => 'world',
        'cost' => 3,
        'type' => 2,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),

    22 => array(
        'name' => clienttranslate( "Space Tourism" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1,
                'phase' => 5,
            ),
            array(
                'power' => 'credit_if_high_cost',
                'phase' => 5,
            )
        )
    ),

    23 => array(
        'name' => clienttranslate( "Jumpdrive Research" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'trade_bonus',
                'good' => 2,
                'bonus' => 1
            )
        )
    ),


    24 => array(
        'name' => clienttranslate( "Mad Scientists" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2,
                'if_most' => true
            )
        )
    ),

    25 => array(
        'name' => clienttranslate( "Lost Alien Battle Fleet" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 3
            ),
            array(
                'power' => 'gaindie',
                'type' => 7,
                'target' => 'cup'
            )
        )
    ),

    26 => array(
        'name' => clienttranslate( "Operations Affinity" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'reassign',
                'to' => array( 1, 4 )
            )
        )
    ),

    27 => array(
        'name' => clienttranslate( "Uplift Overseers" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 6,
                'target' => 'cup'
            )
        )
    ),

    28 => array(
        'name' => clienttranslate( "Distant World" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 6,
                'target' => 'cup'
            )
        )
    ),

    29 => array(
        'name' => clienttranslate( "Prosperous World" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),

    30 => array(
        'name' => clienttranslate( "System Diversification" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2,
                'color' => 'nonwhite'
            )
        )
    ),
//

    31 => array(
        'name' => clienttranslate( "Homeworld Patriotism" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2,
                'color' => array( 1 ),
                'to' => 'current'
            )
        )
    ),

    32 => array(
        'name' => clienttranslate( "Avanced Logistics" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'explore_reassign'
            )
        )
    ),
    33 => array(
        'name' => clienttranslate( "Trading World" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 3,
            )
        )
    ),
    34 => array(
        'name' => clienttranslate( "Lost Species Ark World" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaingood',
            )
        )
    ),
    35 => array(
        'name' => clienttranslate( "Galactic Salon" ),
        'category' => 'dev',
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'vp_on_phase',
                'phase' => 5
            )
        )
    ),
    36 => array(
        'name' => clienttranslate( "Galactic Demand" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'trade_bonus',
                'good' => 1,
                'bonus' => 2
            )
        )
    ),

    37 => array(
        'name' => clienttranslate( "Merchant Guild" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2,
                'phase' => 4
            )
        )
    ),

    38 => array(
        'name' => clienttranslate( "Terraformed World" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2
            ),
            array(
                'power' => 'gaindie',
                'type' => 3,
            )
        )
    ),

    39 => array(
        'name' => clienttranslate( "Rebel Warrior Race" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'removedie'
            ),
            array(
                'power' => 'gaindie',
                'type' => 2,
            ),
            array(
                'power' => 'gaindie',
                'type' => 6,
            )
        )
    ),

    40 => array(
        'name' => clienttranslate( "Lost Alien Warship" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2
            ),
            array(
                'power' => 'gaindie',
                'type' => 7,
                'target' => 'cup'
            )
        )
    ),

//

    41 => array(
        'name' => clienttranslate( "Galactic Resort" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    42 => array(
        'name' => clienttranslate( "Galactic Trendsetters" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2
            ),
            array(
                'power' => 'gaindie',
                'type' => 3,
                'nbr' => 2
            )
        )
    ),
    43 => array(
        'name' => clienttranslate( "Propaganda Campaign" ),
        'category' => 'dev',
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2,
                'to' => 'current'
            )
        )
    ),

    44 => array(
        'name' => clienttranslate( "Comet Zone" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    
    45 => array(
        'name' => clienttranslate( "Minor Research Lab" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'consume_bonus_vp',
                'from' => array( 3, 4 ),
                'nbr' => 1
            )
        )
    ),

    46 => array(
        'name' => clienttranslate( "Hydroponics Guild" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'reassign',
                'color' => array(4,6),
                'nbr' => 1
            )
        )
    ),


    47 => array(
        'name' => clienttranslate( "Malevolent Lifeforms" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),

    48 => array(
        'name' => clienttranslate( "Galactic Fuel Depot" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),

    49 => array(
        'name' => clienttranslate( "Mining World" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),

    50 => array(
        'name' => clienttranslate( "Information Hub" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
//

    51 => array(
        'name' => clienttranslate( "Deep Space Symbiounts, LTD." ),
        'category' => 'world',
        'type' => 3,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 6,
                'target' => 'cup'
            )
        )
    ),

    52 => array(
        'name' => clienttranslate( "Galactic Influence" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'reassign'
            )
        )
    ),

    53 => array( // => 152
        'name' => clienttranslate( "Space Docks" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'tmp_die',
                'phase' => 5,
                'type' => array( 1 )

            )
        )
    ),

    55 => array( // => 154
        'name' => clienttranslate( "Technology Affinity" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'reassign',
                'to' => array( 2 )
            )
        )
    ),

    56 => array( // => 155
        'name' => clienttranslate( "Technology Unions" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'credit_if_most',
                'phases' => array( 1,4 )
            )
        )
    ),

////////////////////////////// Face B ///////////////////////////////

    100 => array(
        'name' => clienttranslate( "New Galactic Order" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'back_dice_on_settle',
                'nbr' => 'all',
                'type' => 2
            )
        )
    ),
    101 => array(
        'name' => clienttranslate( "Galactic Exchange" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'back_dice_on_settle',
                'nbr' => 2
            )
        )
    ),
    102 => array(
        'name' => clienttranslate( "Galactic Federation" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'back_dice_on_dev',
                'nbr' => 2
            )
        )
    ),
    103 => array(
        'name' => clienttranslate( "Former Penal Colony" ),
        'category' => 'world',
        'cost' => 1,
        'type' => 1,
        'powers' => array(
            array(
                'power' => 'removedie'
            ),
            array(
                'power' => 'gaindie',
                'target' => 'cup',
                'type' => 2
            ),
        )
    ),
    104 => array(
        'name' => clienttranslate( "Free Trade Association" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2,
                'phase' => 5
            )
        )
    ),
    105 => array(
        'name' => clienttranslate( "Mining League" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'credit_for_good',
                'good' => 2,
                'phase' => 4
            )
        )
    ),
    106 => array(
        'name' => clienttranslate( "Alien Research Ship" ),
        'category' => 'dev',
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'tmp_die',
                'phase' => 1,
                'type' => array( 1, 7 )
            )
        )
    ),
    107 => array(
        'name' => clienttranslate( "Galactic Renaissance" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'consume_bonus_vp',
                'nbr' => 1
            )
        )
    ),
    108 => array(
        'name' => clienttranslate( "New Economy" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'consume_bonus',
                'nbr' => 2
            )
        )
    ),
    109 => array(
        'name' => clienttranslate( "Galactic Investors" ),
        'category' => 'dev',
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2,
                'phase' => 2
            )
        )
    ),
//
    110 => array(
        'name' => clienttranslate( "Organic Shipyards" ),
        'category' => 'dev',
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'tmp_die',
                'phase' => 5,
                'type' => array( 1, 6 )
            )
        )
    ),
    111 => array(
        'name' => clienttranslate( "Nanotechnology" ),
        'category' => 'dev',
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2
            )
        )
    ),
    112 => array(
        'name' => clienttranslate( "Robot Surveyors" ),
        'category' => 'dev',
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2,
                'phase' => 3
            )
        )
    ),
    113 => array(
        'name' => clienttranslate( "Investment Credits" ),
        'category' => 'dev',
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'dev_discount'
            )
        )
    ),
    114 => array(
        'name' => clienttranslate( "Information Tech" ),
        'category' => 'dev',
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'removedie'
            ),
            array(
                'power' => 'gaindie',
                'type' => 4,
                'nbr' => 2,
                'target' => 'cup'
            ),

        )
    ),
    115 => array(
        'name' => clienttranslate( "Galactic Reserves" ),
        'category' => 'dev',
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'extragood'
            )
        )
    ),
    116 => array(
        'name' => clienttranslate( "Export Duties" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'trade_bonus',
                'bonus' => 1
            )
        )
    ),
    117 => array(
        'name' => clienttranslate( "Conscription" ),
        'category' => 'dev',
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'removedie'
            ),
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 2,
                'target' => 'cup'
            ),
        )
    ),
    118 => array(
        'name' => clienttranslate( "Replicant Robots" ),
        'category' => 'dev',
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'settle_discount'
            )
        )
    ),
    119 => array(
        'name' => clienttranslate( "Alien Robot Scout Ship" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 7,
                'target' => 'cup'
            )
        )
    ),
//
    120 => array(
        'name' => clienttranslate( "Isolation Policy" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2,
                'from' => 1
            )
        )
    ),
    121 => array(
        'name' => clienttranslate( "Universal Exports" ),
        'category' => 'world',
        "type" => 1,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    122 => array(
        'name' => clienttranslate( "Deserted Alien Library" ),
        'category' => 'world',
        "type" => 4,
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 2
            ),
            array(
                'power' => 'gaingood',
            )
        )
    ),
    123 => array(
        'name' => clienttranslate( "Gateway Station" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 3
            )
        )
    ),
    124 => array(
        'name' => clienttranslate( "Space Mercenaries" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 1,
                'color' => array( 2, 5 )
            )
        )
    ),
    125 => array(
        'name' => clienttranslate( "Tourist World" ),
        'category' => 'world',
        'cost' => 4,
        'type' => 0,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 3
            )
        )
    ),
    126 => array(
        'name' => clienttranslate( "Space Refineries" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'consume_bonus_vp',
                'from' => array( 2 ),
                'nbr' => 1
            )
        )
    ),
    127 => array(
        'name' => clienttranslate( "Local Subsidies" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 1,
                'color' => array( 1 )
            )
        )
    ),
    128 => array(
        'name' => clienttranslate( "Space Marines" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'removedie'
            ),
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1,
                'target' => 'cup'
            ),
        )
    ),
    129 => array(
        'name' => clienttranslate( "Rebel Miners" ),
        'category' => 'world',
        'cost' => 2,
        'type' => 2,
        'powers' => array(
            array(
                'power' => 'removedie'
            ),
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 2
            ),
        )
    ),
//
    130 => array(
        'name' => clienttranslate( "Plague World" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 6,
                'nbr' => 1,
                'target' => 'cup'
            ),
        )
    ),
    131 => array(
        'name' => clienttranslate( "Designer Species, ULTD." ),
        'category' => 'world',
        'type' => 3,
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaingood',
            )
        )
    ),
    132 => array(
        'name' => clienttranslate( "Executive Power" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 2,
                'to' => 'current',
                'option' => 'exactly'
            )
        )
    ),
    133 => array(
        'name' => clienttranslate( "Diversification" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 1,
                'color' => array( 1 ),
                'from' => 1
            )
        )
    ),
    134 => array(
        'name' => clienttranslate( "Runaway Robots" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1,
                'target' => 'cup'
            ),

        )
    ),
    135 => array(
        'name' => clienttranslate( "Deserted Alien Outpost" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'gaingood'
            )
        )
    ),
    136 => array(
        'name' => clienttranslate( "Jumpdrive Fuel Refinery" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood'
            )
        )
    ),
    137 => array(
        'name' => clienttranslate( "Terraforming Robots" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'credit_when_build',
                'option' => 'world_only_plus_brown'
            )
        )
    ),
    138 => array(
        'name' => clienttranslate( "Alien Research Team" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'explorekeep' // And +1$ for each alien tech used for scouting
            )
        )
    ),
    139 => array(
        'name' => clienttranslate( "Public Works" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'credit_when_build',
                'option' => 'dev_only'
            )
        )
    ),
    140 => array(
        'name' => clienttranslate( "Free Trade Zone" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'settle_discount',
                'option' => 'only_for_gray_doubled'
            )
        )
    ),
    141 => array(
        'name' => clienttranslate( "Backup Planning" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'dictate'
            )
        )
    ),
    142 => array(
        'name' => clienttranslate( "Ore-Rich world" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 5,
                'nbr' => 1,
                'target' => 'cup'
            ),
        )
    ),
    143 => array(
        'name' => clienttranslate( "Trade Levies" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'consume_bonus',
                'nbr' => 1
            )
        )
    ),
    144 => array(
        'name' => clienttranslate( "Transport Hub" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 3,
                'nbr' => 1
            ),
        )
    ),
    145 => array(
        'name' => clienttranslate( "Alien Sentinels" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 6,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 3
            ),
            array(
                'power' => 'gaindie',
                'type' => 7,
                'nbr' => 1,
                'target' => 'cup'
            ),
        )
    ),
    146 => array(
        'name' => clienttranslate( "Colonial Affinity" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 1,
                'to' => array( 3 )
            )
        )
    ),
    147 => array(
        'name' => clienttranslate( "Major Research Lab" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'tmp_die',
                'phase' => 1,
                'type' => array( 1 )
            )
        )
    ),
    148 => array(
        'name' => clienttranslate( "Galactic Mandate" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'three_on_dictate',
            )
        )
    ),
    149 => array(
        'name' => clienttranslate( "Alien Uplift Blueprints" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'settle_discount',
                'option' => 'only_for_green_yellow'
            )
        )
    ),
//
    150 => array(
        'name' => clienttranslate( "Shipping Affinity" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'reassign',
                'nbr' => 1,
                'to' => array( 5 )
            )
        )
    ),
    151 => array(
        'name' => clienttranslate( "Blaster Gem Mines" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 5,
                'nbr' => 1
            ),
        )
    ),
    152 => array(
        'name' => clienttranslate( "Armament's World" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaingood',
            )
        )
    ),
    154 => array(
        'name' => clienttranslate( "Jungle World" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 4,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    155 => array(
        'name' => clienttranslate( "Deserted Alien Colony" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 5,
        'powers' => array(
            array(
                'power' => 'credit',
                'nbr' => 1
            ),
            array(
                'power' => 'gaingood',
            )
        )
    ),
    
    /////////////////// Initial tiles ////////////////////////
    
    160 => array(
        'name' => clienttranslate( "Earth's Lost Colony" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    161 => array(
        'name' => clienttranslate( "New Sparta" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 2
            ),
        )
    ),
    162 => array(
        'name' => clienttranslate( "Alpha Centauri" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    163 => array(
        'name' => clienttranslate( "Damaged Alien Factory" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 7,
                'nbr' => 1
            ),
        )
    ),
    164 => array(
        'name' => clienttranslate( "Ancient Race" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 0,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),
    165 => array(
        'name' => clienttranslate( "Separatist Colony" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1,
                'target' => 'cup'
            ),
        )
    ),
    166 => array(
        'name' => clienttranslate( "Old Earth" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 3,
                'nbr' => 1
            )
        )
    ),
    167 => array(
        'name' => clienttranslate( "Epsilon Eridani" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'nbr' => 1
            ),
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1
            )
        )
    ),
    168 => array(
        'name' => clienttranslate( "Doomed World" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 0,
        'powers' => array(
            array(
                'power'=> 'credit_on_gamestart'
            )
        )
    ),


    ////// Starting tiles

    1001 => array(
        'name' => clienttranslate( "Space Piracy" ),
        'category' => 'dev',
        'cost' => 0,
        'powers' => array(
            array(
                'power'=> 'ship_bonus_per_twomilitary'
            )
        )
    ),
    1002 => array(
        'name' => clienttranslate( "Hidden Fortress" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1
            )
        )
    ),

    1003 => array(
        'name' => clienttranslate( "Alien Archaeology" ),
        'category' => 'dev',
        'cost' => 1,
        'powers' => array(
            array(
                'power'=> 'explore_bonus_doubled'
            )
        )
    ),
    1004 => array(
        'name' => clienttranslate( "Alien Rosetta Stone World" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 7,
                'nbr' => 1
            )
        )
    ),

    1005 => array(
        'name' => clienttranslate( "Consumer Markets" ),
        'category' => 'dev',
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'credit_for_good',
                'good' => 1,
                'phase' => 4
            )
        )
    ),
    1006 => array(
        'name' => clienttranslate( "Space Mall" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 4,
                'nbr' => 1,
                'target' => 'cup'
            )
        )
    ),


    1007 => array(
        'name' => clienttranslate( "Improved Reconnaissance" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'explore_may_place_on_top'
            )
        )
    ),
    1008 => array(
        'name' => clienttranslate( "Wormhole Station" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 5,
                'nbr' => 1,
                'target' => 'cup'
            )
        )
    ),

    1009 => array(
        'name' => clienttranslate( "Genetic Lab" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'credit_for_good',
                'dice' => 6,
                'phase' => 4
            )
        )
    ),
    1010 => array(
        'name' => clienttranslate( "The Last of the Gnarssh" ),
        'category' => 'world',
        'type' => 3,
        'cost' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 6,
                'nbr' => 1
            )
        )
    ),


    1011 => array(
        'name' => clienttranslate( "Galactic Religion" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'credit_for_die',
                'die' => 4,
                'phase' => 2
            )
        )
    ),
    1012 => array(
        'name' => clienttranslate( "Pilgrimage World" ),
        'category' => 'world',
        'type' => 1,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaingood',
            )
        )
    ),

    1013 => array(
        'name' => clienttranslate( "Biological Adaptation" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'dev_discount',
                'option' => 'only_reassign_powers'
            )
        )
    ),
    1014 => array(
        'name' => clienttranslate( "Aquatic Uplift World" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 6,
                'nbr' => 1,
                'target' => 'cup'
            )
        )
    ),

    1015 => array(
        'name' => clienttranslate( "Mining Industry" ),
        'category' => 'dev',
        'cost' => 2,
        'powers' => array(
            array(
                'power' => 'consume_bonus',
                'nbr' => 1,
                'from' => 2
            )
        )
    ),
    1016 => array(
        'name' => clienttranslate( "Meteorite Planet" ),
        'category' => 'world',
        'type' => 2,
        'cost' => 1,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 5,
                'nbr' => 1
            )
        )
    ),

    1017 => array(
        'name' => clienttranslate( "Destroyed Colony" ),
        'category' => 'world',
        'type' => 0,
        'cost' => 0,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 3,
                'nbr' => 1,
                'target' => 'cup'
            )
        )
    ),
    1018 => array(
        'name' => clienttranslate( "Awakened Alien Outpost" ),
        'category' => 'world',
        'type' => 4,
        'cost' => 3,
        'powers' => array(
            array(
                'power' => 'gaindie',
                'type' => 2,
                'nbr' => 1
            )
        )
    ),


);




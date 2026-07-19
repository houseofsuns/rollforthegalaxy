<?php
 /**
  * DebugTrait.php
  *
  * Debug functionality available via the Studio interface.
  *
  */

trait DebugTrait
{
    // Debug: add this card to player construction zone
    function ac( $card_type_id )
    {
        $player_id = self::getCurrentPlayerId();



        $side = $this->tiles_types[ $card_type_id ]['category'];
        $target_location = ( $side == 'dev' ) ? 'bd'.$player_id :'bw'.$player_id;

        $sql = "SELECT MAX(card_location_arg) FROM tile WHERE card_location='$target_location'";
        $top = self::getUniqueValueFromDB( $sql );
        $above = ( $top == null ) ? 0 : ($top + 2);
        $sql = "INSERT INTO tile (card_type, card_type_arg, card_location, card_location_arg) VALUES
                    ('$card_type_id', '0', '$target_location', '$above')";
        self::DbQuery( $sql );
        $tile_id = self::DbGetLastId();

        self::notifyAllPlayers( 'debug_ac', '', array(
            'tile' => $this->tiles->getCard( $tile_id ),
            'side' => $side,
        ) );
    }

    function debug_ac(int $card_type_id) {
        $this->ac($card_type_id);
    }

    // Debug: add this card to player tableau
    function act( $card_type_id )
    {
        $player_id = self::getCurrentPlayerId();

        $sql = "INSERT INTO tile (card_type, card_type_arg, card_location, card_location_arg) VALUES
                    ('$card_type_id','0','tableau','$player_id')";
        self::DbQuery( $sql );
        $tile_id = self::DbGetLastId();



        self::notifyAllPlayers( 'debug_act', '', array(
            'tile' => $this->tiles->getCard( $tile_id )
        ) );
    }

    function debug_act(int $card_type_id) {
        $this->act($card_type_id);
    }

    function debug_effect(int $card_id )
    {
        $card = $this->tiles->getCard( $card_id );

        self::applyEffect( self::getCurrentPlayerId(), $card['type'], $card_id );
    }

    function debug_gain_dice(int $num)
    {
        $players = self::loadPlayersBasicInfos();
        $player_id = self::getCurrentPlayerId();
        $nbr = $num;
        $die_type = 7; // Alien
        $target = 'cup';
        for( $i=0;$i<$nbr;$i++ )
        {
            // Take the die a place it on target
            $die = $this->dice->pickCardForLocation( 'deck'.$die_type, $target, $player_id );
            self::notifyAllPlayers( "newdie", clienttranslate('Deus ex machina: ${player_name} takes a ${die_name} die.'), array(
                'i18n' => array( 'die_name' ),
                'card_name' => 'none',
                'player_name' => $players[ $player_id ]['player_name'],
                'player_id' => $player_id,
                'die_name' => $this->dice_types[ $die_type ]['name'],
                'die' => $die,
                'target' => $target,
                'tile_id' => null,
            ) );
        }
        self::incStat( $nbr, 'dice_number', $player_id );
    }
}

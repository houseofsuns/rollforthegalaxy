<?php
 /**
  * MigrationTrait.php
  *
  * DB migration functionality. Most of this is only of historic interest.
  *
  */

trait MigrationTrait
{
    /*
        upgradeTableDb:

        You don't have to care about this until your game has been published on BGA.
        Once your game is on BGA, this method is called everytime the system detects a game running with your old
        Database scheme.
        In this case, if you change your Database scheme, you just have to apply the needed changes in order to
        update the game database and allow the game to continue to run with your new version.

    */

    function upgradeTableDb( $from_version )
    {
        if( $from_version <= 2601291200 )
        {
            $sql = "ALTER TABLE DBPREFIX_player ADD `player_manage_initial_credit` MEDIUMINT UNSIGNED NULL DEFAULT NULL";
            self::applyDbUpgradeToAllDB( $sql );

            // Initialize for any game currently in the recruitment phase, so that
            // the Reset button works immediately without waiting for the next phase.
            $sql = "UPDATE DBPREFIX_player SET player_manage_initial_credit = player_credit WHERE player_manage_initial_credit IS NULL";
            self::applyDbUpgradeToAllDB( $sql );
        }

    }
}

<?php

namespace Controllers;

class Fleet
{
    /**
     * Function to get the ships in pairs
     * TODO: find a solution to concatenate 2 strings representing the two types of boats, and multiply this pair by 25, can't multiply pairs of strings now.
     *
     */
    public function ships(){
        $support_craft = 1 . 'support craft ';
        $offensive_craft = 1 . 'offensive craft ';
        $pairedShip = $support_craft + $offensive_craft;
        $fleet = $pairedShip * 25;
        var_dump($fleet);
    }
}
<?php

namespace Controllers;

class Fleet
{
    /**
     * Initating variables to have them in all the class with constructor if needed
     *
     */
    protected $support_craft = (1 .' support craft');
    protected $offensive_craft = (1 .' offensive craft');


    public function __construct( $support_craft, $offensive_craft)
    {
        $this->support_craft = $support_craft;
        $this->$offensive_craft = $offensive_craft;

    }

    /**
     * Function to get the ships in pairs
     *
     */
    public function ships(){
        $pairedShip = $this->support_craft + $this->offensive_craft;
        $fleet = $pairedShip * 25;
        return $fleet;
    }
}
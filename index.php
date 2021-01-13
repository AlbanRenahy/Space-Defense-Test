<?php

use Controllers\Fleet;

require_once('Controllers/Fleet.php');

/**
 * Here, the new instance of the Fleet class gets 1 support craft and 1 offensive craft on params
 */
$fleet = new Fleet();

$fleet->ships();
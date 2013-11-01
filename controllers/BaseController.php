<?php

# base.class.php controller "landing controller"
# Pedro A. Flores Prieto & Samira C. Oliva Madrigal
# CS174_HW3

require_once('./config/config.php');



abstract class baseController {

        abstract function controller($view);
	abstract function drawView($view);
        

}

?>


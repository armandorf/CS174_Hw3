<?php

# base.class.php controller "landing controller"
# Pedro A. Flores Prieto & Samira C. Oliva Madrigal
# CS174_HW3

<<<<<<< HEAD
require_once('./config/config.php');



abstract class baseController {

        abstract function controller($view);
	abstract function drawView($view);
        

}

?>

=======
    abstract class BaseController {
        function load($sessionVar);
        function callModel(); 
        function drawView($view);
    }

?>
>>>>>>> d4f3164b27b84ac3c7f4cd0b465ae9caf420b060

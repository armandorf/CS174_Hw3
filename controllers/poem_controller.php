<?php

# poem controller
# Pedro A. Flores & Samira C. Oliva
#

require_once(BASEURL.'/models/featured.php');

$ptr = new featured; //MODEL featured class ptr

class poem extends BaseController
{

        function controller($sessionVar);
        function drawView($view);

}

function controller($sessionVar)
{
        global $ptr;
        //call model functions
        $
        drawView($sessionVar);
}

function drawView($viewName)
{
     require_once('./views/{$viewName}.php');
     global $ptr;
     $viewPtr = new BaseView;

     $viewPtr->printHeader();
     //use ptr to call MODEL FUNCTIONS
     $viewPtr->printFooter();
}

?>

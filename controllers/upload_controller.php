<?php
# upload.php controller
#
# 

require_once(BASEURL.'/models/featured.php');


class upload extends BaseController
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


$uploadObject = new upload; 
$uploadObject->controller

$timeStamp = time();
$ptr = new featured; //MODEL featured class ptr
$star = 0; //rating is initially zero
$ptr->insertRecord($_POST[author], $_POST[title], $_POST[poem_contents], $timeStamp, $star);




?>    


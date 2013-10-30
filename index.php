<!--/*
# index.php
# CS174_hw3
# Pedro A. Flores Prieto, Samira C. Oliva Madrigal
*/-->

<?php
session_start();
include_once("./config/config.php");
$controllers_available= array('main','upload');

//-------------------------------------------------------------
//Determine the Controller to call to decide what view to draw
if (isset($_GET['c']) && in_array($_GET['c'], $controllers))
{
       $pivot = strtolower($_GET['c']);
       switch(strtolower($pivot)) {
            case "main":
            require_once(BASEURL.'/controllers/main.php');
            mainController();
            draw($_SESSION['view']);
            break;

            case "upload":
            require_once(BASEURL.'/controllers/upload.php');
            uploadController();
            draw($_SESSION['view']);
        }
        
}

////-------------------------------------------------------------
////draw the view
//function draw($view)
//{
//    global $header;
//    global $footer;
//    
//    echo $header;    
//    require_once(BASEURL."/views/{$view}.php"); 
//    echo $footer;
}

?> 

<?php 
    include_once './views/BaseView.php';
    $b = new BaseView;
    
    $b->printHeader();
    echo "something here";
    echo '<br>';
    $b->printFooter();
?>
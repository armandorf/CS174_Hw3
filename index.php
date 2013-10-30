<!--/*
# index.php
# CS174_hw3
# Pedro A. Flores Prieto, Samira C. Oliva Madrigal
*/-->

<?php
session_start();
include_once("./config/config.php");
$controllers_available= array('main', 'upload', 'single_poem');
$controller = ""; // will contain the controller that will call the proper view
//
//-------------------------------------------------------------
//Determine the Controller to call to decide what view to draw
if (isset($_GET['c']) && in_array($_GET['c'], $controllers_available))
{
   $pivot = strtolower($_GET['c']);
   switch(strtolower($pivot)) {
        case "main":
//          require_once(BASEURL.'/controllers/main.php');
            $controller = $pivot;
            // draw($_SESSION['view']);
            break;

        case "upload":
//            require_once(BASEURL.'/controllers/upload.php');
//            uploadController();
//            draw($_SESSION['main']);
            $controller = $pivot;
            break;
        
        case "single_poem":
            $controller = $pivot;
//            require_once(BASEURL.'/controllers/single_poem.php');
//            mainController();
//            draw($_SESSION['view']);
            break;
            
        default:
            $controller = "main";
    }
}

// decide what to do with $controller:
// WELL, DRAW THE PROPER VIEW:
// 

?> 

<?php 
    include_once './views/BaseView.php';
    $b = new BaseView;
    
    $b->printHeader();
    echo "something here";
    echo '<br>';
    $b->printFooter();
?>
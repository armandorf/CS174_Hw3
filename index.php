<!--/*
# index.php
# CS174_hw3
# Pedro A. Flores Prieto, Samira C. Oliva Madrigal
*/-->

<?php
session_start();
include_once("./config/config.php");


$controllers_available= array('landing', 'upload', 'single_poem');
$controller = ""; // will contain the controller that will call the proper view

//Determine the Controller to decide what view to draw
if (isset($_GET['c']) && in_array($_GET['c'], $controllers_available))
{
   $pivot = strtolower($_GET['c']);
   switch(strtolower($pivot)) {
        case "landing_controller":
            include_once("./controllers/landing_controller.php");
            $_SESSION['view'] = $_GET['c'];
            
            $controller = $pivot;
            
            break;
        case "upload":
            $controller = $pivot;
            break;
        case "single_poem":
            $controller = $pivot;
            break;
        default:
            $_GET["c"] = "landing_controller";
    }
}




?> 

<?php 
    require_once("./config/config.php");
    // test if database works
    // if
?>
<?php 
    include_once './views/BaseView.php';
    include_once './views/upload.php';
    
    $b = new BaseView;
    $a = new upload;
    
    $a->drawUploadView();
    
    
    $b->printHeader();
    echo "something here";
    echo '<br>';
    
    $b->printFooter();
    
   
    
    
   
    
    
    
    
?>
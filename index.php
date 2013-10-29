<?php
/*
# index.php
# CS174_hw3
# Pedro A. Flores Prieto, Samira C. Oliva Madrigal
*/

session_start();
include_once("config/config.php");
$controllers_available = array("main", "upload", );

// HEADER definition
$header = <<< EOD1
    <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo(SITENAME) ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Copyrigth 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal"/>
        <meta name="description" content="LooneyLimericks.com" />
        <meta http-equiv="keywords" content=""/>
        <meta name="robots" content="NOINDEX, NOFOLLOW"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="icon" type="image/png" href="/css/logo.png"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
    </head>       
    <body>
EOD1;

// FOOTER definition
$footer = <<< EOD2
<!-- footer -->
</body>
</html>
EOD2;

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

//-------------------------------------------------------------
//draw the view
function draw($view)
{
    global $header;
    global $footer;
    
    echo $header;    
    require_once(BASEURL."/views/{$view}.php"); 
    echo $footer;
}

?> <!-- main bracket -->

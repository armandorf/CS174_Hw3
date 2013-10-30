<?php
    // this class defines the basic 
    require_once(BASEURL.'/config/config.php');

    class BaseView {
    // HEADER definition
    public $header = <<< HEADER
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
HEADER;
    
    // FOOTER definition
public $footer = <<< FOOTER
</body>
</html>
FOOTER;

    function printView() {

    }




    }
?>

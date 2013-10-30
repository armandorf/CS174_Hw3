<?php
    // this class defines the basic 
    require_once('./config/config.php');

    class BaseView {
        private $header = <<< HEADER
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
<br>        
HEADER;
        private $footer = <<< FOOTER
<br>
</body>
</html>
FOOTER;

        public function printHeader() {
            echo $this->header;
        }

        public function printFooter() {
            echo $this->footer;
        }

    }

?>


<?php
    # Config File:
    # CS174_hw3
    # Pedro A. Flores Prieto, Samira C. Oliva

    // dababase connection info
    $host_name = "localhost";
    $admin_name = "root";
    $admin_passwd = "setVal";
    
    //base URL for the website
    define("BASEURL", 'http://localhost/CS173_Hw3');

    // site name to put on title bar
    define("SITENAME", "Looney Limericks");

    define("qDATABASE", "POEMS_DB");
    $table = "poems";
    
    $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd", qDATABASE);
?>


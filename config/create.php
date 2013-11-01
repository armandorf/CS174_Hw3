<?php
    /*
      # Create File:
      # CS174_hw3
      # Pedro A. Flores Prieto, Samira C. Oliva Madrigal
*/

require_once("config.php");
   $dbName = 'POEMS_DB';
   $tableName = "poems";

// CREATE NEW DATABASE
    $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd");

    // CONNECT TO A DATABASE & Check connection
    if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

// CREATE DATABASE
    $create_poems_db = "CREATE DATABASE $dbName";
    if (mysqli_query($db_connect, $create_poems_db))
        echo "Database poems_db created successfully";
    else
        echo "Error creating poems database: " . mysqli_error($db_connect);

    $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd", $dbName);
// CREATE TABLES
    /*
      # timeStamp: date the poem was created/uploaded
      # title: poem title
      # content: poem content
     */
    $table = "CREATE TABLE poems
    (   
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
        title VARCHAR(100) NOT NULL, 
        content VARCHAR(500) NOT NULL,
        authorName VARCHAR(100) NOT NULL,
        starAverage INT,
        timeStamp DATETIME NOT NULL,
        PRIMARY KEY (id)
    )";
    if (mysqli_query($db_connect, $table))
    {    echo "Table was created successfully";
	
     }    
   else
   {
        echo "Error creating table in the database\n\n". mysqli_error($db_connect);    
        echo "\n\n";
    }

// DATETIME example: YYYY-MM-DD HH:MM:SS, such as 2008-10-23 10:37:22
// INSERT INITIAL LIMERICKS

/* limerick#1 */
/*$content1 = <<< LIM1
Chebychev said it and I'll say it again:
There's always a prime between n and 2n!  
LIM1;
*/

//$content1=hellothere";

$query = "INSERT INTO $tableName(title,content,authorName, starAverage, NOW()) 
VALUES(\"Chebychev\", \"theContent\", \"anonymous\", 5)";

$dbName = "POEMS_DB";
$db_connect = mysqli_connect($host_name, $admin_name,$admin_passwd, $dbName);
if(mysqli_query($db_connect, $query))
{
        echo "Insertion was created successfully";
} 
else
{
        echo "\n\nError creating insert in the database\n" . mysqli_error($db_connect);
}

?>

<?php
    /*
      # Create File:
      # CS174_hw3
      # Pedro A. Flores Prieto, Samira C. Oliva Madrigal
     */

    require_once("config.php");
    $dbName = 'POEMS_DB';

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

// CREATE TABLES
    /*
      # timeStamp: date the poem was created/uploaded
      # title: poem title
      # content: poem content
     */
    $table = "CREATE TABLE poems
    (
        title VARCHAR(100) NOT NULL, 
        content VARCHAR(500) NOT NULL,
        authorName VARCHAR(100) NOT NULL,
        starAverage INT,
        timeStamp DATETIME NOT NULL,
        id MEDIUMINT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (id)
    )";
    if (mysqli_query($db_connect, $table))
        echo "Table was created successfully";
    else
        echo "Error creating table in the database" . mysqli_error($db_connect);    
 
// DATETIME example: YYYY-MM-DD HH:MM:SS, such as 2008-10-23 10:37:22

 ?>

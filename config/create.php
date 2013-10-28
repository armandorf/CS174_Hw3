<!--# Create File:
# CS174_hw3
# Pedro Flores, Samira C. Oliva-->


<?php
    include_once("config.php");

    // CREATE NEW DATABASE
    $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd");

    // CONNECT TO A DATABASE // 
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // Create database
    $create_poems_db = "CREATE DATABASE poems_db";
    if (mysqli_query($db_connect, $create_poems_db)) {
        echo "Database poems_db created successfully";
    } else {
        echo "Error creatingc database: " . mysqli_error($db_connect);
    }

    // CREATE THE NECESSARY TABLES
    $poems_table_query = "CREATE TABLE Poems
    (
        title VARCHAR(100),
        poem_content VARCHAR(500),
        datetime_uploaded DATETIME NOT NULL, 
        PRIMARY KEY(title),
    )";
    // execute creation of table Poems
    if (mysqli_query($db_connect, $poems_table_query)) {
        echo "Table Poems created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($db_connect);
    }
    
    // create a table to store most recent time of featured poem displayed
    $poem_display_time = "CREATE TABLE Timestamp
        (
            time_of_display DATETIME NOT NULL,
            PRIMARY KEY (time_of_display)
        )";
    
    if (mysqli_query($db_connect, $poem_display_time)) {
        echo "Table Poems created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($db_connect);
    }
    // DATETIME example: YYYY-MM-DD HH:MM:SS, such as 2008-10-23 10:37:22
?>

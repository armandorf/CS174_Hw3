<?php
# main.php controller
# CS174_hw3
# Pedro A. Flores Prieto, Samira C. Oliva Madrigal

    require_once('baseController.class.php');
    require_once('./models/featured.php');

    class MainController extends BaseController
    {
        
        // selects appropriate view
        function controller() {
            
        
        
        }
        
        function getTenMostRecentPoems () {
            // MySQL query to show 10 most recent poem entries by time or uploading
            $getEntriesByDate = "SELECT * FROM animals ORDER BY grp,id";
        
        }
        
        
    }


?>

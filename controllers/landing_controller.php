<?php

# landing controller
# CS174_hw3
# Pedro A. Flores Prieto, Samira C. Oliva Madrigal

include_once('./models/featured.class.php');
include_once('baseController.php');

$modelPtr = new featured; //MODEL featured class ptr

class landing extends baseController
{
   
    function printHeader()
    {
<<<<<<< HEAD
	parent::printHeader();
=======
        
        function getTenMostRecentPoems () {
            // MySQL query to show 10 most recent poem entries by time or uploading
            $getEntriesByDate = "SELECT * FROM animals ORDER BY grp,id";
        
        }
        
        
>>>>>>> d4f3164b27b84ac3c7f4cd0b465ae9caf420b060
    }

    function printFooter()
    {   
        parent::printFooter();
    }

    //------------------------------------
    function controller($view)
    {

       $this->drawView($view);
    }
   //------------------------------------
   function drawView($view)
   {    
     require_once("./views/$view.php");
     global $modelPtr;
     $viewPtr = new landingView;
     $bVPtr = new BaseView; //BaseView obj ptr 
     $count = 0;
     while($count <= 3)
    {    $record = "hi";
    	// $record = $modelPtr->getRandomPoem(); //from feauted model 
     	 $bVPtr->printHeader();
     	 $viewPtr->execute($record); //landingview will display poem
    	 $bVPtr->printFooter();
     	 $modelPtr->timer();
	 $count++;
     }
   }

}


?>

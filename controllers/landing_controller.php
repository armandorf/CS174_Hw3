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
	parent::printHeader();
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

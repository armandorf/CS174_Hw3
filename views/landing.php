<?php
    include_once 'BaseView.php';
    
    class landing extends BaseView {
        
        public function drawLandingPage() {
            parent::printHeader();
            
            // print a random poem here
            
            parent::printFooter();
        }
        
        public function functionName($param) {
            
        }
    
        
    }
   

?>

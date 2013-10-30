<?php
    # base.class.php controller "landing controller"
    # Pedro A. Flores Prieto & Samira C. Oliva Madrigal
    # CS174_HW3

    require_once('./config/config.php');

    class BaseController {

        private $controller;

        //selects appropriate view		
        public function callView($view) {
            $_SESSION['view'] = $view;
            
        }

        function uploadNewPoem($title, $poem, $author, $timestamp, $starRating) {
            // call appropriate method from model class
        }

        function getRandomPoem($randIDNum) {
            
        }

        function getPoemByTitle($title) {
            
        }

        public function setController($aControllerName) {
            $controller = $aControllerName;
        }

    }

?>
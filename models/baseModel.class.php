<?php
    /*
    # baseModel.class.php controller "landing controller"
    # Pedro A. Flores Prieto & Samira C. Oliva Madrigal
    # CS174_HW3

    # Only model may access database and provide data to
    # controllers. Controllers request information from models.
    */

    require_once(BASEURL.'/config/config.php');

    class baseModel {

	function createTable();
        function load();
	function insertRecord();
	function executeQuery();
    }

?>

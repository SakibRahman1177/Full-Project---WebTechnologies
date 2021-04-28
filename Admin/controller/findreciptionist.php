<?php

require_once '../model/model.php';

if (isset($_POST['finduser'])) {
	
		//echo $_POST['product_name'];

    try {
    	
    	$allSearchedusers = searchreciptionist($_POST['user_name']);
    	header('Location: ../searchallreciptionist.php');
    	//require_once '../searchallreciptionist.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


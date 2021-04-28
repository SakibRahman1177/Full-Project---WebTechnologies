<?php 

require_once ('model/model.php');

function fetchAlldata($tableName){
	return showAllData($tableName);

}

function fetchApplyData($name){
	return showData($name);

}

 ?>
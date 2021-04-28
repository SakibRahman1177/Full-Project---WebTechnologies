<?php 

require_once ('model/model.php');

function fetchAllinfo($tableName){
	return showAllData($tableName);

}

function fetchApplyInfo($username){
	return showData($username);

}

 ?>
<?php 

require_once ('model/model.php');

function fetchAllusers(){
	return showAllreciptionists();

}
function fetchuser($id){
	return showreciptionist($id);

}

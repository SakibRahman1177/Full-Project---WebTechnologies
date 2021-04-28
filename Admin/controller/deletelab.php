<?php 

require_once '../model/model.php';

if (deletelab($_GET['id'])) {
    header('Location: ../lablist.php');
}

 ?>
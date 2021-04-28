<?php 
require_once 'db_connect.php';

function loginSearch($username){

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` WHERE username = '$username'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function register($data) {
    $conn = db_conn();
    $selectQuery = "INSERT into patient_db (name, email, username, password, dateofbirth, gender, address)
    VALUES (:name, :email, :username, :password, :dateofbirth, :gender, :address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dateofbirth' => $data['dateofbirth'],
            ':address' => $data['address']
        ]);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }  
    $conn = null;
    return true;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` WHERE username = '$username'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function checkUsername($tableName, $username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function checkEmail($tableName, $username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` where email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function showPatient($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient_db` where username = '$username'";
    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}

function EditPatient($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE patient_db set   name = ?, email = ?, dateofbirth = ?, address = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['dateofbirth'], $data['address'], $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function Apply($data) {
    $conn = db_conn();
    $selectQuery = "INSERT into applyform (name, email, username, phone, address, gender)
    VALUES (:name, :email, :username, :phone, :address, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':gender' => $data['gender']
        ]);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }   
    $conn = null;
    return true;
}

function updatePasswordStudent($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE patient_db set password = '$password' where username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);     
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function showData($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `applyform` where username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
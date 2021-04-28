<?php 

require_once '../../Patient/model/db_connect.php';


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
    $selectQuery = "INSERT into patient_db (name, email, username, password, dateofbirth, address)
VALUES (:name, :email, :username, :password, :dateofbirth, :address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
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
    $selectQuery = "INSERT into applyform (name, email, phone, address, gender, Patient Report)
VALUES (:name, :email, :phone, :address, :gender, :Patient Report)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':gender' => $data['gender'],
            ':Patient Report' => $data['Patient Report']
        ]);
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function showData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `applyform` where name = '$name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
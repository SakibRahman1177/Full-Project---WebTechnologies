<?php 

require_once 'db_connect.php';


function searchproduct($product_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Name LIKE '%$product_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function searchreciptionist($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Name LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}






function RegistrationForm($data){
    $conn = db_conn();
    $selectQuery = "INSERT into user_info ( Name, Email, Birthday, Gender, Username, Password, Confirmpass)
    VALUES(:name, :email, :birthday, :gender, :username, :Password, :confirmpass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':birthday' => $data['birthday'],
            ':gender' => $data['gender'],
            ':username' => $data['username'],
            ':Password' => $data['Password'],
            ':confirmpass' => $data['confirmpass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;

} 



/*
Edit functions done
*/



function updatereciptionist($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Address = ?, PhoneNumber = ?, Birthday = ?  where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['address'], $data['phonenum'], $data['dob'],  $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updatelab($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE lab_info set Name = ?, Address = ?, PhoneNumber = ?, Birthday = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['address'], $data['phonenum'], $data['dob'],  $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


/*
Add functions done
*/


function addreciptionist($data){
    $conn = db_conn();
    $selectQuery = "INSERT into user_info ( Name, Address, PhoneNumber, Birthday, Gender, Password)
VALUES (:name, :address, :phonenum, :dob, :gender, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':address' => $data['address'],
            ':phonenum' => $data['phonenum'],
            ':dob' => $data['dob'],
            ':gender' => $data['gender'],
            ':pass' => $data['pass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function addlab($data){
    $conn = db_conn();
    $selectQuery = "INSERT into lab_info ( Name, Address, PhoneNumber, Birthday, Gender, Password)
VALUES (:name, :address, :phonenum, :dob, :gender, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':address' => $data['address'],
            ':phonenum' => $data['phonenum'],
            ':dob' => $data['dob'],
            ':gender' => $data['gender'],
            ':pass' => $data['pass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



/*
Show functions done
*/


function showAllreciptionists(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showreciptionist($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function showAlllabs(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `lab_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showlab($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `lab_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}




/*
Delete functions done
*/

function deletereciptionist($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deletelab($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `lab_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
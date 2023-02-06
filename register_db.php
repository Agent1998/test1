<?php
header("Access-Contril-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
error_reporting(E_ERROR | E_PARSE);

include 'db.php';
$input = json_decode(file_get_contents('php://input'));

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_encode(array("status"=> "error"));
    die();
}
try {
    if(empty($input->username)||empty($input->password)||empty($input->email)){
        echo json_encode(array("status"=> "empty"));  
    }
    else{
        // echo ($input->username);
        $check_data = $dbh->prepare("SELECT * FROM user where username = :username");
        $check_data -> bindParam(":username",$input->username);
        // $check_data -> bindParam(":pasword",$input->password);
        $check_data -> execute();
       
        // echo json_encode($input->username);
        // echo json_encode($input->password);
        
        $user = $check_data -> fetch(PDO::FETCH_ASSOC);
        // echo json_encode($user['user_name']);
        // echo json_encode($user['password']);
       
        if($user['username']==$input->username){
            echo json_encode(array("status"=> "userduplicate")); 
        }
         else{
            $stmt = $dbh->prepare("INSERT INTO user (username,password,email) values (:username,:password,:email)");
            $stmt -> bindParam(':username',$input->username);
            $stmt -> bindParam(':password',password_hash($input->password, PASSWORD_DEFAULT));
            $stmt -> bindParam(':email',$input->email);
            if($stmt->execute()){  
                echo json_encode(array("status"=> "ok"));
                
            }else{
                echo json_encode(array("status"=> "error1")); 
            }
         }
        
    }
    

    

    

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<?php 
    session_start();
    header("Access-Contril-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
error_reporting(E_ERROR | E_PARSE);

include 'db.php';
$input = json_decode(file_get_contents('php://input'));

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_encode(array("status"=> "this page REQUEST_METHOD")); 
    die();
}
try {
    // if(empty($input->username)||empty($input->password)){
    //     echo json_encode(array("status"=> "empty"));  
    // }
    // else{
    //     // echo ($input->username);
    //     $check_data = $dbh->prepare("SELECT * FROM user where username = :username");
    //     $check_data -> bindParam(":username",$input->username);
    //     // $check_data -> bindParam(":pasword",$input->password);
    //     $check_data -> execute();
       
       
        
    //     $user = $check_data -> fetch(PDO::FETCH_ASSOC);
    //     // echo json_encode($user['username']);
    //     // echo json_encode($user['password']);
        
    //     $pw = password_verify($input->password, $user['password']);
        
    //     // echo json_encode($pw);
    //     // echo json_encode($user['password']);
    //     if($user['username']==$input->username){
    //         if($input->password==$pw){
    //             echo json_encode(array("status"=> "ok"));
    //             $_SESSION['username'] = $user['username'];
    //         }
    //         else{
    //             echo json_encode(array("status"=> "wrong"));
    //         }
    //     }else{
    //         echo json_encode(array("status"=> "dont have"));
    //     }
        
        
    // }
    $date=date("Y-m-d");
    echo $date;
        
    

    

    

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>

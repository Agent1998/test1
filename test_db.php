<?php
// header("Access-Contril-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// error_reporting(E_ERROR | E_PARSE);

// include 'db.php';
// $input = json_decode(file_get_contents('php://input'));
// try {
//     $id=$_GET['id']; 
//     $stm = $dbh->prepare("SELECT * FROM user where id = :id");
//     $stm -> bindParam(":id",$id);
//     $stm-> execute();
//     $user = $stm -> fetch(PDO::FETCH_ASSOC);
//     // print_r($user);
//     // echo json_encode(array($user)); //array obj
//     // echo json_encode($user['username']);// just index
//     // echo $id;
//     echo json_encode($user);//obj
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }

date_default_timezone_set('Asia/Bangkok');


if (isset($_POST['submit'])) {
    $datestart = '202212';
    $rest = substr($datestart, 0, 4);
    $rest = $rest + 543;
    $rest1 = substr($datestart, -2); //12
    $date1 = $rest . "" . $rest1 . "" . "01";
    echo $date1;

    // echo date('Ym01', strtotime("+543 year"));
    echo '<br>';
    $dateend = '202212';
    $rest2 = substr($dateend, 0, 4);//2022
    $rest2 = $rest2+543;//2566
    $rest21 = substr($dateend, -2);//12
    $date21 = $rest2."".$rest21."". "31";
    echo $date21;

    // echo date('Ym31', strtotime("+543 year"));
    // echo '<br>';
    // // echo date('Ymd');
    // $datestart = date('Ym');
    // echo $datestart;
    // echo '<br>';
    // $rest = substr($datestart, 0, 4);
    // $rest = $rest+543;
    // $datenow =$rest."".date('m01');
    // echo $datenow;
    // $result_date = strtotime('+4 year', strtotime($_POST['month']));
    // echo $result_date;
    // echo '<br>';
    // $strStartDate = "2013-04-21"; //$_POST['month'];
    // $strNewDate = date("Ym", strtotime("+543 year", strtotime($_POST['month'])));
    // $strNewDate = $strNewDate.'01';
    // echo $strNewDate;
}

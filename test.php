<?php 
date_default_timezone_set('Asia/Bangkok');
// // echo strtotime(date('H:i'));
// // $date = strtotime(date('H:i'));
// $date = strtotime(date('Y-m-d H:i'));

// echo $date;
// echo '<br>';

// $gg ="2023-01-13 12:57";//time_start_meeting
// // echo $gg;
// // echo '<br>';
//  $book = strtotime($gg);

// echo $book;
// echo '<br>';

// echo strtotime($gg)-strtotime(date('Y-m-d H:i'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="test_db.php">
       
       <div class="mb-3">
               <label for="month" class="form-label">month</label>
               <input type="month" value="" name="month" >
             </div>
          
          
           
           
           <input type="submit" name ="submit" value = "กด">
       </form>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
date('Y-m-d')<$row1['booking_room_time_check'] 
strtotime($row1['time_start_meeting'])-strtotime(date('Y-m-d H:i'))>'7200' เปลี่ยน 7200 เป็น 86400 จะได้ 1 วัน


    strtotime($row1['time_start_meeting'])-strtotime(date('Y-m-d H:i'))>'7200'  



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="test"></p>
    <script>
        var myHeaders = new Headers();
        myHeaders.append("Cookie", "PHPSESSID=d0nkph9nd8ebhlt9mrh8chf522");

        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };
        var user = document.getElementById('test');
        var id = 4;
        fetch("http://localhost/test/test_db.php?id="+id, requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
    </script>

</body>

</html> -->
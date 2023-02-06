<?php
    session_start();
    include('db.php'); 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
    <body>
        <div class="container">
        <input type="date" id="date" class="form-control form-control-danger" placeholder="โปรดระบุข้อมูล" name="user_date_time" value="<?php echo date("Y-m-d")?>"required>
            <h1>Login</h1>
            
            
            <form>
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" >
              </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>

            <!-- <div class="mb-3">
              <label for="password" class="form-label">Confirm - Password</label>
              <input type="password" class="form-control" id="password">
            </div> -->

            <a href="register.php" style="color: red;">register</a>

          
            
            
            <div style="text-align: center;">
            
              <button type="button" onclick="gologin()" class="btn btn-primary" >signup</button>
              <!-- <button href ="register.php"  class="btn btn-secondary">register</button> -->
            </div>




            
          </form>
        </div>
            

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
    </body>
</html>
<script>
  var gologin = function() {
    // var pass = true;
    // var user =document.getElementById('userName').value;
    // var pw = document.getElementById('password').value;
    // var em = document.getElementById('email').value;
    
    // if( (user.length && pw.length && em.length) <= 0){
    //   pass = false;
    //   alert('ใส่ข้อมูล');
    // }
    // if(pass){
      // console.log('go')
    const API_URL = 'http://localhost/test/login_db.php'; // defalut url backend
      var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    myHeaders.append("Cookie", "PHPSESSID=bokm3ebkeliacfb5bicv54dd1k");

    var raw = JSON.stringify({
      "username": document.getElementById('username').value,
      "password": document.getElementById('password').value
    });

    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };

    fetch(API_URL , requestOptions)
    .then(response => response.text())
    .then(result => {  
    var jsonObj =  JSON.parse(result);
        if(jsonObj.status == 'empty'){
            alert('error : กรอก');
        }
        else if(jsonObj.status == 'wrong'){
            alert('error : รหัสผิด');
        }
        else if(jsonObj.status == 'dont have'){
            alert('error : ไม่มีชื่อผู้ใช้');
        }
        if(jsonObj.status == 'ok'){
            alert('ok');
            window.open('index.php');
        }
       

        // if(jsonObj.status == 'ok'){
        
        //   alert('ok');
        //   window.close('register.html');
        //   // window.open('index.html');
        //   // location.open('index.html');
        // }else if(jsonObj.status == "กรอก"){
        //   alert('error : กรอกด้วยไอสัส');
        //   // location.reload()
        // }else if(jsonObj.status == "error : duplicate username"){
        //   alert('error : ซ้ำ');
        //   // location.reload()
        // }else{
        // alert('error')
        // }
      
    })
    .catch(error => console.log('error', error));
    
    
   
     
  }
  </script>
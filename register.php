<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>register</h1>

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

            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" id="email" >
            </div>

          
            
            
            <div style="text-align: center;">
              <button type="button" onclick="goRegister()" class="btn btn-primary" >signup</button>
            </div>




            <!-- <button href ="./register.html"  class="btn btn-secondary">register</button> -->
          </form>
        
      </div>
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>

<script>
  var goRegister = function() {
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
    const API_URL = 'http://localhost/test/register_db.php'; // defalut url backend
      var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    myHeaders.append("Cookie", "PHPSESSID=bokm3ebkeliacfb5bicv54dd1k");

    var raw = JSON.stringify({
      "username": document.getElementById('username').value,
      "password": document.getElementById('password').value,
      "email": document.getElementById('email').value
    });

    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };

    fetch(API_URL + "/login/register.php", requestOptions)
    .then(response => response.text())
    .then(result => {  
    var jsonObj =  JSON.parse(result);
        if(jsonObj.status == 'empty'){
            alert('error : กรอก');
        }
        else if(jsonObj.status == 'error'){
            alert('error : ซ้ำ');
        }
        else if(jsonObj.status == 'error1'){
            alert('error : ผิดพลาด');
        }
        if(jsonObj.status == 'ok'){
            alert('ok');
            window.open('login.php');
        }
       

      
      
    })
    .catch(error => console.log('error', error));
    
    
   
     
  }
  </script>

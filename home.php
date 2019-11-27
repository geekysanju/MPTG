<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?> 


<!DOCTYPE html>
<html>
<head>
  <title>Login Form in PHP with Session</title>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <!-- External CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

<div class="container">
<div class="panel panel-info">
 <div class="panel-heading"><div id="login">
  <h2>Login Form</h2></div>
   <div class="row">
           <div class="col-xs-12" style="text-align:center;">
                 <a href=""></a>
          <img src="img/userlogin.png"  class="size img-circle"><br>
           </div>
       </div>
  <div class="panel-body" >

  <form action="" method="post">
   <label>UserName :</label>
   <input id="name" name="username" placeholder="username" type="text" class="form-control">
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password" class="form-control"><br><br>
   <input name="submit" type="submit" value=" Login " class="form-group">
   <span><?php echo $error; ?></span>

      <div class="form-group" >
          <button type="button" class="btn btn-link"><a href="">Forgot Password</a></button>
          </div> 
          <div class="form-group" align="right">
         <a href="form.html">Sign Up</a>
          </div> 
      
         
      
       
      </div>  
  </form></div></div></div></div>
 </div>
</body>
</html>



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
 <div class="panel panel-warning"></div>

<div class="container" >
<div class="panel panel-info">
 <div class="panel-heading">Login Portal Of MPTG</div>

  <div class="panel-body" style="background-image:url('img/logos/mp.gif');  background-size:100% 100%; >

   <div class="row">
           <div class="col-xs-12" style="text-align:center;">
                <br>
                <br>
                <br>
                <br>
                <br>
      <b>   <h1 class="text-dark"> Welcome</h1><h1>
     </h1> TO</h1><h1>
         MPTG LOGIN PORTAL </h1><br></b><br>
                <br>
                <br>
                <br>
          </div>
       


  <form action="" method="post">
   <label>UserName :</label>
   <input id="name" name="username" placeholder="username" type="text" class="form-control">
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password" class="form-control"><br><br>
   <input name="submit" type="submit" value=" Login "   class="btn btn-primary">
   <span><?php echo $error; ?></span>

      <div class="form-group" >
         <br>
         

        <a href="forgot.html" class="btn btn-success btn-lg active" tabindex="-1" role="button" aria-disabled="true">Forgot Password</a>

          </div> 
          <div class="form-group" align="right">
            <a href="form.html" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Sign Up</a>
       
          </div> 
      
         
      
       
      </div>  
  </form></div></div></div></div>
 </div>
</body>
</html>



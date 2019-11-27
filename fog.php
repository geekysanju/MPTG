<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <!-- External CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <style type="text/css">
          .size {
             width : 60px;
             height: 60px;
             margin: 20px;
         }
        
     </style>
     
    </head>
    <body>
             <div class="container">
<div class="panel panel-info">
 <div class="panel-heading">Your Password</div>
  <div class="panel-body" style="background-image:url(''); background-size:100% 100%;  ">
    
   
      
     
       <div class="row">
         <div class="col-xs-12">


 <?php
 $email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mptg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query="SELECT * FROM  register where email='$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table class='table'><tr><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 


 </div>
  </div>
</div>
</div>
<a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go To Home</a>
    </body>
</html>
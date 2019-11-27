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
 <div class="panel-heading">Show Hotel Booking</div>
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

$query="SELECT * FROM  hlbook where email='$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table class='table'><tr><th>Name</th><th>Email</th><th>Date of Booking</th><th>Place Name</th><th>Hotel Name</th><th>Check In Time</th><th>Check Out Time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fn"]." ".$row["ln"]."</td><td>".$row["email"]."</td><td>".$row["date"]."</td><td>".$row["slct1"]."</td><td>".$row["slct2"]."</td><td>".$row["cint"]."</td><td>".$row["cout"]."</td></tr>";
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
<a href="profile.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go To Home</a>
    </body>
</html>
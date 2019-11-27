<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <!-- External CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="alert alert-success" role="alert">
<CENTER><H1>ALERT</H1></CENTER>

<a href="form.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BACK TO SIGNUP</a>
<a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LOGIN</a>
</div>



<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || 
   !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mptg";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, password, gender, email, phone) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssi", $username, $password, $gender, $email,  $phone);
      $stmt->execute();
      echo "<h1>New record inserted sucessfully</h1>";
     } else {
      echo "<h1>Someone already register using this email</h1>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

</body>
</html>

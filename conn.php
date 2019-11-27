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
<?php
   // Connect to the database 
    $con=mysqli_connect("localhost","root","") or die(mysql_error());
	
	// Select the database
	
	mysqli_select_db($con,"mptg") or die(mysql_error());

    // Check connection
	
    if ($con)
		
       {echo "Connected";}
	   
    else 
		echo "Connection Failed" or die(mysql_error());
	
	// If the Sign Up button is clicked
	if(isset($_POST['submit'] ))
	{
        $fn= $_POST['fn'];
		$ln= $_POST['ln'];
		$age= $_POST['age'];
		 $email= $_POST['email'];
		$phone= $_POST['phone'];
		$nop= $_POST['nop'];
		 $sb= $_POST['sb'];

		$date= $_POST['date'];
		 $time= $_POST['time'];
		
		

	    $query = "insert into safaribo (fn,ln,age,email,phone,nop,sb,date,time) values ('$fn','$ln','$age','$email','$phone','$nop','$sb','$date','$time')";
		if(mysqli_query($con,$query))
	    {
			echo "<h1>Your details are Successfully enterd </h1>"; 
		}
	}		
?>
</div>
  <div class="container">
<div class="panel panel-info">
	<a href="yyy.php"><button type="button" class="btn btn-danger btn-lg btn-block">BACK TO SAFARI BOOKING</button></a>
	<a href="index.php" >	<button type="button" class="btn btn-danger btn-lg btn-block">HOME</button></a>
		<a href="showbooking.html"> <button type="button" class="btn btn-danger btn-lg btn-block">SHOW  BOOKING</button></a>

</div>

    </div>   
</body>
</html>
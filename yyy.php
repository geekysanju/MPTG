<!DOCTYPE html>
<html>
<head>

 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <!-- External CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body bgcolor="yellow">

<div class="container" >
<div class="panel panel-warning">
 <div class="panel-heading">Safari Booking</div>
  <div class="panel-body">

  <form action="conn.php" method="POST">
  	<div class="form-group">
      <label>First Name</label><BR>
          <input type="text" name="fn" class="form-control" required><BR>
      </div>
      <div class="form-group">
             <label>Last Name</label><BR>
                 <input type="text" name="ln" class="form-control" required><BR>
             </div>
             <div class="form-group">
                   <label>Age</label><BR>
                      <input type="text" name="age" class="form-control" required><BR></div>
                      <div class="form-group">
                        <label>Email</label><BR>
                          <input type="text" name="email" class="form-control" required><BR></div>
                          <div class="form-group">
                            <label>Mobile Number</label><BR>
                              <input type="text" name="phone" class="form-control" required><BR></div>
                              <div class="form-group">
<label>Number Of People</label><br>
<input type="text" name="nop" class="form-control" required><br>
</div>
<div class="form-group">
<label> Choose your Trip Place:</label>
<select id="slct1" class="form-control" name="sb" >
  <option value=""></option>
 
   <option value="Kanha N P">Kanha N P</option>
    <option value="Satpura N P">Satpura N P</option>
    <option value="Pench N P">Pench N P</option>
     <option value="Bandhavgarh N P">Bandhavgarh N P</option>
     <option value="Panna N P">Panna N P</option>
      <option value="Van vihar N P">Van vihar N P</option>
     </select>
<br>

<div class="form-group">
<label>Booking Date</label>
                                           <input type="text" name="date" placeholder="YYYY-MM-DD" class="form-control" required 
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
title="Enter a date in this format YYYY-MM-DD"/><br>
</div>
<div class="form-group">

                                 <label>Check In Time</label>
                                   <input type="time" name="time" class="form-control" required><BR>
                               </div>
                               





<input type="submit" name="submit" value="submit" class="btn btn-outline-warning">
   </form>
</div></div>
</div></div></body>
</html>

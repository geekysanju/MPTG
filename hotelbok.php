<!DOCTYPE html>
<html>
<head>
<script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "MAHAKALESHWER"){
    var optionArray = ["|","Hotel Midland,Ujjain|Hotel Midland,Ujjain","Hotel Kshipra Dham|Hotel Kshipra Dham","Mahakal Sagar Guest House|Mahakal Sagar Guest House"];
  } else if(s1.value == "OMKARESHWER"){
    var optionArray = ["|","HOTEL SHRIRADHE KRISHNA|HOTEL SHRIRADHE KRISHNA","UJJWAL PALACE|UJJWAL PALACE","NARMADA RESORT|NARMADA RESORT"];
  } else if(s1.value == "BHOPALMASJID"){
    var optionArray = ["|","Hotel Shrimaya|Hotel Shrimaya","Jehan Numa Palace Hotel|Jehan Numa Palace Hotel"];
  }
   else if(s1.value == "RamRajaORCHHA"){
    var optionArray = ["|","Betwa Retreat|Betwa Retreat","Amar Mahal|Amar Mahal"];
  }
  else if(s1.value == "PitambaraPEETH"){
    var optionArray = ["|","Hotel Ratan Royal Inn|Hotel Ratan Royal Inn","Hotel Pitambara Palace|Hotel Pitambara Palace"];
  }
   else if(s1.value == "PASHUPATINATH"){
    var optionArray = ["|","Hotel Mahak Palace|Hotel Mahak Palace","Hotel City Crown, Mandsaur|Hotel City Crown, Mandsaur"];
  }
  else if(s1.value == "Kanha N P"){
    var optionArray = ["|","Club mahindra kanha|Club mahindra kanha","Kanha village eco resort|Kanha village eco resort"];
  }
   else if(s1.value == "Satpura N P"){
    var optionArray = ["|","Hotel utkarsh|Hotel utkarsh","hotel pandav|hotel pandav"];
  }
  else if(s1.value == "Pench N P"){
    var optionArray = ["|","olive resorts and villas|olive resorts and villas","Mowglis Den|Mowglis Den"];
  }
   else if(s1.value == "Bandhavgarh N P"){
    var optionArray = ["|","tigers den resort|tigers den resort","Baghela Resort|Baghela Resort"];
  }
   else if(s1.value == "Panna N P"){
    var optionArray = ["|","Pashan Garh|Pashan Garh","Emerald hotel|Emerald hotel"];
  }
  else if(s1.value == "Van vihar N P"){
    var optionArray = ["|","touch wood resort|touch wood resort","caravan resort|caravan resort"];
  }
  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}
</script>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <!-- External CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="panel panel-warning"></div>

<div class="container" >
<div class="panel panel-warning">
 <div class="panel-heading">Hotel Booking</div>

  <div class="panel-body">

  <form action="Conectd.php" method="POST">
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
                              <input type="text" name="mob" class="form-control" required><BR></div>
                              <div class="form-group">
<label>Number Of People</label><br>
<input type="text" name="nop" class="form-control" required><br>
</div>
<div class="form-group">
<label> Choose your Trip Place:</label>
<select id="slct1" class="form-control" name="slct1" onchange="populate(this.id,'slct2')">
  <option value=""></option>
  <option value="MAHAKALESHWER">MAHAKALESHWER</option>
  <option value="OMKARESHWER">OMKARESHWER</option>
  <option value="BHOPALMASJID">BHOPALMASJID</option>
  <option value="RamRajaORCHHA">RamRajaORCHHA</option>
  <option value="PitambaraPEETH">PitambaraPEETH</option>
   <option value="PASHUPATINATH">PASHUPATINATH</option>
   <option value="Kanha N P">Kanha N P</option>
    <option value="Satpura N P">Satpura N P</option>
    <option value="Pench N P">Pench N P</option>
     <option value="Bandhavgarh N P">Bandhavgarh N P</option>
     <option value="Panna N P">Panna N P</option>
      <option value="Van vihar N P">Van vihar N P</option>
     

</select>
<br></div>
<div class="form-group">
<label> Choose HOTEL:</label>
<select id="slct2" class="form-control" name="slct2"></select><br></div>
<div class="form-group">
<label>Booking Date</label>
                                           <input type="text" name="date" placeholder="YYYY-MM-DD" class="form-control" required 
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
title="Enter a date in this format YYYY-MM-DD"/><br>
</div>
<div class="form-group">

                                 <label>Check In Time</label>
                                   <input type="time" name="cint" class="form-control" required><BR>
                               </div>
                               <div class="form-group">
                                     <label>Check Out Time</label>
                                       <input type="time" name="cout" class="form-control" required><BR>
                                         </div>
<BR>






<input type="submit" name="submit" value="submit" class="btn btn-outline-warning">
   </form>
</div></div>
</div></div></body>
</html>

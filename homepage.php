<?php
session_start();
if(!isset($_SESSION['name'])&&!isset($_SESSION['pass'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/social.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/js/all.js">>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
<div class="topname"> Hi <?php echo $_SESSION['name']?>!</div><br><br><br>
<div class="nav_bar">
<a href="http://192.168.101.252:8000/index.php"> <button class="btn btn1">Attendence</button></a>
<a href="#"> <button class="btn btn2">Course</button></a>
<a href="#"> <button class="btn btn3">Schedule</button></a>
<a href="settings.php"> <button class="btn btn4">Settings</button></a>
<a href="php/logout.php"> <button class="btn btn5">Logout</button></a>

<form class="search_box" name="searchform" action="php/search_result.php" method="post">
<input type="text" class="search_text" name="text_search" placeholder="Search...">
<a class="search_btn" href="javascript: submitform()">
<i class="fas fa-search"></i></a>
</form>

<script type="text/javascript">
function submitform(){
document.searchform.submit();
}
</script>
</div>

<center>
<form action="php/stdata.php" method="post" class="data-form">
    <h1>Student Details</h1>
    <h2>Personal Info:-</h2>
    <input class="txtb" type="number" name="roll" placeholder="Roll No." required>
    <input class="txtb" type="text" name="name" placeholder="Name"required>
    <input class="txtb" type="number" name="age"placeholder="Age"required>
    <input class="txtb" type="text" name="dob" placeholder="D.O.B"required>
    <input class="txtb" type="text" name="regno" placeholder="Registration. No."required>
    <input class="txtb" type="text" name="branch" placeholder="Branch"required>
    <input class="txtb" type="text" name="dept" placeholder="Department"required>
    <input class="txtb" type="number" name="cyear" placeholder="Year"required>
    <input class="txtb" type="text" name="bg" placeholder="Blood Group">
    <input class="txtb" type="number" name="scont" placeholder="Contact No."required>
    <h2>Academic Info:-</h2>
    <h3>10th:-</h3>
    <input class="txtb" type="text" name="inst10" placeholder="Institution Name"required>
    <input class="txtb" type="number" name="pyear10" placeholder="Passing Year"required>
    <input class="txtb" type="number" step="0.01" name="marks10" placeholder="Marks %"required>
    <h3>12th/Diploma:-</h3>
    <input class="txtb" type="text" name="inst12" placeholder="Institution Name"required>
    <input class="txtb" type="number" name="pyear12" placeholder="Passing Year"required>
    <input class="txtb" type="number" step="0.01" name="marks12" placeholder="Marks %"required>
    <h2>Family Info:-</h2>
    <input class="txtb" type="text" name="fname" placeholder="Farther's Name"required>
    <input class="txtb" type="text" name="focc" placeholder="Ocupation">
    <input class="txtb" type="number" name="fcont" placeholder="Contact"><br>
    <input class="txtb" type="text" name="mname" placeholder="Mothers's Name"required>
    <input class="txtb" type="text" name="mocc" placeholder="Ocupation">
    <input class="txtb" type="number" name="mcont" placeholder="Contact">

   <input type="submit" class="submitbtn" value="Submit Data">
</form>
</center>

<div class="area">
    <div class="box1">
    <p> Box 1 </p>
    </div>
    <div class="box2">
    <p> Box 2 </p>
    </div>
</div>


<div class="bottom_line">
<a class="social_btn" href="#">
<i class="fab fa-facebook-f"></i>
</a>

<a class="social_btn" href="#">
<i class="fab fa-twitter"></i>
</a>

<a class="social_btn" href="#">
<i class="fab fa-google"></i>
</a>

<a class="social_btn" href="#">
<i class="fab fa-instagram"></i>
</a>

<a class="social_btn" href="#">
<i class="fab fa-youtube"></i>
</a>
</div>


</body>
</html>

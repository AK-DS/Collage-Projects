<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

<div class="nav_bar">
<button class="btn btn1" href="#">Home</button>
<button class="btn btn2" href="#">Course</button>
<button class="btn btn3" href="#">Schedule</button>
<button class="btn btn4" href="192.168.101.252:8000/">Attendence</button>
<button class="btn btn6" >About Us</button>
<button class="btn btn5" href="#">Contact Us</button>
</div>



<form class="box" action="php/logincheck.php" method="post">
<h1>Login</h1>

<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<input type="submit" value="Login">
<p style="color:red;">
<?php
if(isset($_SESSION["check"]) && $_SESSION["check"]==0)
{
	echo "Username/Password Is Incorrect";
}
?></p>
<br>
<a href="Register.php">Not An Existing User? Register here</a><br><br>
<a href="#">Forgot Password?</a>
</form>
</body>
</html>
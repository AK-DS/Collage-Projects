<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Register</title>

<link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>

<form class="box" method="post" action="php/Reg.php" >
<h1>Register</h1>
<input type="text" name="username" placeholder="Username/Roll" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<input type="password" name="cpassword" placeholder="Confirm Password" required><br>
<!-- <input type="number" name="ph_no" placeholder="Phone No."><br> -->
<input type="email" name="email" placeholder="email" required><br>
<input type="submit" value="Register"><br><br>
<p>
<?php
if(isset($_SESSION['pcheck']) && $_SESSION['pcheck']==1)
{
    echo "Passwords Do Not Match";
    unset($_SESSION['pcheck']);
    session_destroy();
}
else if(isset($_SESSION['ucheck']) && $_SESSION['ucheck']==1)
{
    echo "User Already Exists";
    unset($_SESSION['ucheck']);
    session_destroy();
}
?>
</p>
<p>Already A Member?<a href="login.php">Login</a></p>
</form>
</body>
</html>

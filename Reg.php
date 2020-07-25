<?php
session_start();
$_SESSION['name'] = $_POST['username'];
$_SESSION['pass']= $_POST['password'];
$_SESSION['cpass']= $_POST['cpassword'];
$_SESSION['email']= $_POST['email'];
$_SESSION['pcheck']=0;
$_SESSION['ucheck']=0;
// Password Matching
if($_SESSION['pass']!=$_SESSION['cpass'])
{
	$_SESSION['pcheck']=1;
	header("Location: ../Register.php");
	die();
}
else
{
	$_SESSION['pass']=md5($_SESSION['pass']);
}

//Connection To Database
$conn = new mysqli('localhost','root','','Registration_Data') or die("Error Connecting To Databse");


//Check If User Exists
$s = "SELECT * FROM userdata WHERE name='{$_SESSION['name']}'";
$result = mysqli_query($conn,$s);//Storing Query Results
if(mysqli_num_rows($result)>0)
{
	$_SESSION['ucheck']=1;
	header("Location: ../Register.php");
}
else
{
	$reg=" insert into userdata(name,password,email) values('{$_SESSION['name']}','{$_SESSION['pass']}','{$_SESSION['email']}')";
    mysqli_query($conn,$reg);
    header("Location: ../homepage.php");
}
?>
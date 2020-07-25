<?php
session_start();

$_SESSION['name'] = $_POST['username'];
$_SESSION['pass'] = $_POST['password'];
$_SESSION["check"]=1;


$_SESSION['pass']=md5($_SESSION['pass']);
$conn = new mysqli('localhost','root','','Registration_Data') or die("Error Connecting To Databse");


$temp = mysqli_query($conn,"SELECT * FROM userdata WHERE name='".$_SESSION['name']."'AND password='".$_SESSION['pass']."' limit 1");//Storing Query Results
if(mysqli_num_rows($temp)==1)
{
	unset($_SESSION["ckeck"]);
	header("Location: ../homepage.php");
}
else{
	$_SESSION["check"]=0;
	header("Location: ../login.php");
}
?>

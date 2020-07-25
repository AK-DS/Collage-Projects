<?php
session_start();
$_SESSION['opass']= $_POST['opass'];
$_SESSION['pass']= $_POST['pass'];
$_SESSION['cpass']= $_POST['cpass'];
$_SESSION['wpass']=0;
$_SESSION['pcheck']=0;
$_SESSION['passchange']=0;

$_SESSION['opass']=md5($_SESSION['opass']);
$_SESSION['pass']=md5($_SESSION['pass']);
$_SESSION['cpass']=md5($_SESSION['cpass']);

//Connection To Database
$conn = new mysqli('localhost','root','','Registration_Data') or die("Error Connecting To Databse");
//Storing Query Results
$result = mysqli_query($conn,"SELECT * FROM userdata WHERE name='{$_SESSION['name']}'");
$att=mysqli_fetch_array($result);
if($_SESSION['opass']==$att["password"])
{
    mysqli_query($conn,"update userdata set password='".$_SESSION['pass']."' where  name='".$_SESSION['name']."'");
    $_SESSION['passchange']=1;
    header("Location: ../settings.php");
    die();
}
else
{
    $_SESSION['wpass']=1;
    header("Location: ../settings.php");
	die();
}
// Password Maching
if($_SESSION['pass']!=$_SESSION['cpass'])
{
    $_SESSION['pcheck']=1;
    header("Location: ../settings.php");
    die();
}
?>
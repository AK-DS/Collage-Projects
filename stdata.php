<?php
session_start();
$_SESSION['roll'] = $_POST['roll'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['regno'] = $_POST['regno'];
$_SESSION['branch'] = $_POST['branch'];
$_SESSION['dept'] = $_POST['dept'];
$_SESSION['cyear'] = $_POST['cyear'];
$_SESSION['bg'] = $_POST['bg'];
$_SESSION['scont'] = $_POST['scont'];

$_SESSION['inst10'] = $_POST['inst10'];
$_SESSION['pyear10'] = $_POST['pyear10'];
$_SESSION['marks10'] = $_POST['marks10'];

$_SESSION['inst12'] = $_POST['inst12'];
$_SESSION['pyear12'] = $_POST['pyear12'];
$_SESSION['marks12'] = $_POST['marks12'];

$_SESSION['fname'] = $_POST['fname'];
$_SESSION['focc'] = $_POST['focc'];
$_SESSION['fcont'] = $_POST['fcont'];
$_SESSION['mname'] = $_POST['mname'];
$_SESSION['mocc'] = $_POST['mocc'];
$_SESSION['mcont'] = $_POST['mcont'];

//Connection To Database
$conn = new mysqli('localhost','root','','Registration_Data') or die("Error Connecting To Databse");

//data entry

$adata=" insert into academics_data(roll,name,inst10,pyear10,marks10,inst12,pyear12,marks12) values('{$_SESSION['roll']}','{$_SESSION['name']}','{$_SESSION['inst10']}','{$_SESSION['pyear10']}','{$_SESSION['marks10']}','{$_SESSION['inst12']}','{$_SESSION['pyear12']}','{$_SESSION['marks12']}')";
mysqli_query($conn,$adata);
echo "ok";

$pdata=" insert into student_data(roll,name,age,dob,regno,branch,dept,cyear,bg,scont) values('{$_SESSION['roll']}','{$_SESSION['name']}','{$_SESSION['age']}','{$_SESSION['dob']}','{$_SESSION['regno']}','{$_SESSION['branch']}','{$_SESSION['dept']}','{$_SESSION['cyear']}','{$_SESSION['bg']}','{$_SESSION['scont']}')";
mysqli_query($conn,$pdata);
echo"ok";

$fdata=" insert into family_data(roll,name,fname,focc,fcont,mname,mocc,mcont) values('{$_SESSION['roll']}','{$_SESSION['name']}','{$_SESSION['fname']}','{$_SESSION['focc']}','{$_SESSION['fcont']}','{$_SESSION['mname']}','{$_SESSION['mocc']}','{$_SESSION['mcont']}')";
mysqli_query($conn,$fdata);
echo "ok";
?>
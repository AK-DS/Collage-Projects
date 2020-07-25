<?php
session_start();
if($_POST['text_search']==""){
    echo "Not set";
    header("Location: ../homepage.php");
    die();
}
$_SESSION['search_txt']=$_POST['text_search'];

//Connection To Database
$conn = new mysqli('localhost','root','','Registration_Data') or die("Error Connecting To Databse");


//Check If User Exists
$s = "SELECT * FROM student_data WHERE name='{$_SESSION['search_txt']}' or roll='{$_SESSION['search_txt']}'";
$result = mysqli_query($conn,$s);//Storing Query Results
$data=mysqli_fetch_array($result);
echo "Name :- ".$data['name']." roll :-".$data['roll']." age".$data['age']." D.O.B.:-".$data['dob']."Registration:- ".$data['regno']." Branch:-".$data['branch']." Department:-".$data['dept']." Year:-".$data['cyear']." Blood Group:-".$data['bg']." Contact:-".$data['scont'];

?>
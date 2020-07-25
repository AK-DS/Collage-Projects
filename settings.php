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
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <title>Settings</title>
</head>
<body>
    <form class="changebox" action="php/set.php" method="post">
        <h1>Change Password</h1>
        <input type="password" name="opass" placeholder="Current Password" required><br>
        <input type="password" name="pass" placeholder="New Password" required><br>
        <input type="password" name="cpass" placeholder="Confirm Password" required><br>
        <input type="submit" value="Change Password"><br>
        <p>
        <?php
            if(isset($_SESSION['wpass']) && $_SESSION['wpass']==1)
            {
                echo "Current Password Is Not Correct";
                unset($_SESSION['wpass']);
                die();
            }
            else if(isset($_SESSION['pcheck']) && $_SESSION['pcheck']==1)
            {
                echo "New Passwords Do Not Match";
                unset($_SESSION['pcheck']);
                die();
            }
            else if(isset($_SESSION['passchange']) && $_SESSION['passchange']==1)
            {
                echo "Password Changed Successfully";
                unset($_SESSION['passchange']);
                die();
            }
        ?></p>
    </form>
</body>
</html>
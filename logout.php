<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["pass"]);
session_destroy();
header("Location: ../login.php");
?>
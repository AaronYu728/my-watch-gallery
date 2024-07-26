<?php
extract($_POST);
$hashed_password = md5($password);

include("dbconnection.php");

$sql = "select * from users where username='$username' and password='$hashed_password'";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1) {
    session_start();
    $_SESSION["username"] = $username;
    header("Location:management.php");
} else {

    header("Location:login.php?message=Wrong username or password.");
}

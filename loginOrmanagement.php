<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location:management.php");
} else {
    header("Location:login.php");
}

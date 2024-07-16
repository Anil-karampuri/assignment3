<?php
include ("dbcon.php");

session_start();

if (isset($_POST["submit"])) {
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["pwd"]);

    if ($email = $database->insertid($fname, $lname, $email, $password)) {
        header("location:index.php?insert");
    } else {
        echo "error";
    }
}




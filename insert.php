<?php
session_start();

$conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
if (!$conn) {
    die("Error :" . mysqli_connect_error());
}

if (isset($_POST["signUp"])) {
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["pwd"]);
    $u_type;
    if (isset($_POST["user"])) {
        $u_type = 1;
    } else {
        $u_type = 0;
    }
    $sql = "INSERT INTO users (firstName,lastName,email,pword,adminRuser) 
    VALUES('$fname','$lname','$email','$password','$u_type');";
    $result = mysqli_query($conn, $sql);
    if (!$result) {

        echo "error";
    } else {
        header("location:login.php?inserted");
    }
}

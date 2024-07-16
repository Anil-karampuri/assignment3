<?php
include("dbcon.php");
session_start();

if (isset($_POST["book"])) {
    $id = $_GET["id"];
    $email = $_SESSION['email'];
    $dtaken = date("Y-m-d");
    $uid = $_SESSION['id'];
    
    if ($email=$database2-> insertid($id,$email,$dtaken,$uid)){

        header("location:books.php?order=?");

    } else {
        echo "error";
        
    }


}
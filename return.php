<?php
include("dbcon.php");
session_start();
if (isset($_POST["return"])) {
    $email = $_SESSION['email'];
    $book = $_GET['book'];
    $dsubmit = date("Y-m-d");

    if ($email=$database2-> deleteid($book,$email,$dsubmit)){

        header("location:index.php?return");

    } else {
        echo "error";
        
    }


}
    
   


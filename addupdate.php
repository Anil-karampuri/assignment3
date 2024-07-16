<?php

include("dbcon.php");

if(isset($_POST["Update"])){
$fname=trim($_POST["fname"]);
$lname=trim($_POST["lname"]);
$jobposition=trim($_POST["jobposition"]);
$age=trim($_POST["age"]);
$email=trim($_POST["email"]);
$filename = $_FILES["myfile"]["name"];
$id=$_GET["id"];

if ($email=$database-> updateid($id,$fname,$lname,$email)){
 
        header("location:index.php?update");
       
        
    }
else{         
echo"error";
}
}


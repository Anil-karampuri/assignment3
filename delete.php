<?php
include ("dbcon.php");
session_start();

    $id = $_GET["id"];
    $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
    $sql = "select id,u_id,bookName,dateTaken,dateSubmit,Status from files where u_id='$id';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        header("location:index.php?connot_dlt");


    } else {
        $id = $_GET["id"];
        $email = $database->deleteid($id);

        header("location:index.php?dltmsg");

    }

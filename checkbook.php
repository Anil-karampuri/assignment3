<?php
$connect = mysqli_connect("localhost","root","Anil2645@","mydb" );
if(isset($_POST["email"]))
{
    $email = $_POST["email"];

    $query ="SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($connect,$query);
    echo mysqli_num_rows($result);

}

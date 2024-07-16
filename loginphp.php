<?php
session_start();
$conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
if (!$conn) {
    die("Error :" . mysqli_connect_error());
}

if (isset($_POST["signIn"])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["pwd"]);
    $sql = "select * from users where email='$email' and pword='$password';";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];

        $_SESSION['email'] = $email;
        header("location:index.php?loggedin ");
    } else {
        header("location:login.php?login=enter correct details");
    }
}


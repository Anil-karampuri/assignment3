<?php
$conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
if (!$conn) {
    die("Error :" . mysqli_connect_error());
}
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    if (!isset($_SESSION['email'])) {
        header("location:login.php?");
    } ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <h5> <a class="navbar-brand" href=""><img src="img/library.png" width="250px"></a></h5>


                <div class="justify-content-end" id="mynavbar">

                    <ul class="navbar-nav me-3 ">
                        <li class="nav-item me-4"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item me-4"><a href="books.php" class="nav-link">books</a></li>
                        <li class="nav-item me-4"><a href="contact.php" class="nav-link">contact</a></li>
                        <li class="nav-item me-4"><a href="logout.php" class="nav-link">logout</a></li>



                    </ul>

                </div>
            </div>
        </nav>

    </header>
    <?php
    $id = $_GET["id"];
    $sql = "select * from users where id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row > 0) {
        ?>
        <a href="index.php?admindisplay=user" class="btn btn-success m-2 float-end"> <i
                class="fa-solid fa-arrow-left"></i>back </a>

        <div class="container-fluid rounded border border-2 border-dark mx-auto m-5 p-3" style="height:auto; width:400px; ">
            <h2 class="text-center m-3">User Update</h2>
            <form class="form form-borderd" action="addupdate.php?id=<?php echo $row['id']; ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-group mb-2">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control rounded border border-2 border-secondary"
                        value="<?php echo $row['firstName']; ?>" name="fname">
                </div>
                <div class="form-group mb-2">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control rounded border border-2 border-secondary"
                        value="<?php echo $row['lastName']; ?>" name="lname">
                </div>

                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control rounded border border-2 border-secondary"
                        value="<?php echo $row['email']; ?>" name="email">
                </div>

                <div class="text-center">
                    <input type="Submit" class="btn btn-primary" value="update" name="Update">
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <?php
    }

    ?>

    <footer class=" bg-dark ">

        <div class="container text-white pt-5">
            <h2 class="widget-title ">Contact Info</h2>

            <p><strong>Address</strong><br>
                123 Fifth Avenue, New York, NY 10160, USA<br><br>
                <strong>Phone</strong><br>
                +1 910-626-85255<br><br>
                <strong>Email</strong><br>
                contact@library.com
            </p>
        </div>
        <div class=" container d-flex flex-column text-center justify-content-end text-white">

            <p>Copyright © 2024 library</p>
            <p>Powered by library</p>
        </div>
    </footer>
</body>

</html>
<?php
include ("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="10;url=logout.php" /> -->
    <title>Document</title>
    <link rel="stylesheet" href="index.css?" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php?");
}
?>

<body style="background-image: url(img/logbg.jpeg); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover;">
    <div class="bodycontainer mb-0">
   
   <?php
    session_start();
    $_SESSION["last_login_timestamp"] = time();
    if (isset($_SESSION["email"])) {
        if ((TIME() - $_SESSION['last_login_timestamp']) > 1800)
            ;
    } else {
        header("location:login.php");
    }
    ?> 

        <header>

            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container">
                    <h5> <a class="navbar-brand" href=""><img src="img/library.png" width="250px"></a></h5>


                    <div class="justify-content-end" id="mynavbar">

                        <ul class="navbar-nav me-3 ">
                            <li class="nav-item me-4"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item me-4"><a href="books.php" class="nav-link">Books</a></li>
                            <li class="nav-item me-4"><a href="contact.php" class="nav-link">Contact</a></li>
                            <li class="nav-item me-4"><a href="logout.php" class="nav-link">Logout</a></li>

                        </ul>

                    </div>
                </div>
            </nav>

        </header>
        <?php
        if (isset($_GET["connot_dlt"])) {
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>We cannot delete the user <br> The user have a book</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_GET["admindisplay"])) {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Wellcome to library</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_GET["insert"])) {
            $email = $_GET["insert"];

            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> has been Added</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_GET["update"])) {
            $email = $_GET["update"];

            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>User has been updated</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_GET["dltmsg"])) {
            $email = $_GET["dltmsg"];

            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>User has been Deleted</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_GET["return"])) {


            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Book is returned succesfully</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        ?>


        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">DASH BOARD</button>
            <div id="myDropdown" class="dropdown-content">
                <?php
                if (isset($_SESSION['id'])) {
                    $uid = $_SESSION['id'];
                    $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
                    $sql = "select id,firstName,lastName,email,adminRuser from users WHERE id='$uid';";
                    $result = mysqli_query($conn, $sql);
                    if ($result = mysqli_query($conn, $sql)) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['adminRuser'] == 1) {
                                ?>
                                <a href="index.php">YOUR DETAILS</a>
                                <a href="#admindisplay" id="usert">USERS</a>
                                <a href="#libraryTable" id="utable">LIBRARY</a>
                                <a href="#userbooks" id="ubooks">YOUR BOOKS</a>
                                <?php
                            } else {
                                ?>

                                <a href="index.php">YOUR DETAILS</a>
                                <a href="#userbooks" id="ubooks">YOUR BOOKS</a>
                                <a href="#admindisplay" style="display:none;" id="usert"></a>
                                <a href="#libraryTable" style="display:none;" id="utable"></a>

                                <?php

                            }

                        }

                    }

                }

                ?>

            </div>
        </div>


        <div class="container " id="admindisplay" style="display:none;">

            <div class="d-flex flex-column">
                <h2 class="headding rounded border border-2 border-dark bg-dark mx-auto text-center text-white ">USERS
                    DETAILS</h2>
                <div class="text-end">
                    <a href="adduser.php" class="btn btn-success m-2 ">Add <i class="fa-solid fa-user-plus"></i></a>
                </div>

            </div>
            <table id="mytabel" class="table table-bordered table-dark table-hover">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['email'])) {
                        $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
                        $sql = "select id,firstName,lastName,email,adminRuser from users;";
                        $result = mysqli_query($conn, $sql);
                        if ($result = mysqli_query($conn, $sql)) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['adminRuser'] == 0) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['firstName'] ?></td>
                                        <td><?php echo $row['lastName'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td>
                                            <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-info" data-toggle="tooltip"
                                                data-placement="top" title="update"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a type="button" data-toggle="modal"
                                                data-target="#exampleModalCenter<?php echo $row['id'] ?>" class="btn btn-danger"><i
                                                    class="fa-solid fa-user-minus"></i></a>

                                            <div class="modal fade" id="exampleModalCenter<?php echo $row['id'] ?>" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-dark" id="exampleModalLongTitle">DELETE ALERT
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-dark">
                                                            <p> Are you sure you want to Delete?</p>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <a type="button" href="delete.php?id=<?php echo $row['id'] ?>"
                                                                class="btn btn-primary">Confirm</a>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>



                                    </tr>
                                    <?php
                                }
                            }
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
        <div class="container" id="libraryTable" style="display:none;">
            <div class="m-2">
                <div class="d-flex">
                    <h2 class="m-1 rounded border border-2 border-dark bg-dark mx-auto text-center text-white">LIBRARY
                        DATA</h2>
                </div>
                <table id="mytabel" class="table table-bordered table-dark table-hover m-2">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Book name</th>
                            <th>User detail's</th>
                            <th>Taken Date</th>
                            <th>Submited Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['email'])) {
                            $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
                            $sql = "select f.id,u.email, f.bookName,f.dateTaken,f.dateSubmit,f.status from files f left join users u on f.u_id = u.id  ";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['bookName'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['dateTaken'] ?></td>
                                        <td><?php echo $row['dateSubmit'] ?></td>
                                        <td><?php if ($row['status'] == '1') {
                                            echo "Taken";
                                        }
                                        if ($row['status'] == '0') {
                                            echo "Available";
                                        } ?></td>

                                    </tr>
                                    <?php
                                }
                            }
                        } else {
                            unset($_SESSION['email']);
                            session_destroy();

                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container userdisplay" id="userdisplay">
            <div class="d-flex">
                <h2 class="m-3 rounded border border-2 border-dark bg-dark mx-auto text-center text-white">YOUR DETAILS
                </h2>
            </div>
            <table class="table table-bordered table-dark table-hover m-5 mb-5">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $sql = "select id,firstName,lastName,email from users where email='$email';";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['firstName'] ?></td>
                                    <td><?php echo $row['lastName'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            unset($_SESSION['email']);
                            session_destroy();

                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
        <div class="container" id="userbooks" style="display:none;">
            <div class="d-flex">
                <h2 class="m-3 rounded border border-2 border-dark bg-dark mx-auto text-center text-white">YOUR BOOKS
                </h2>
            </div>
            <?Php
            $uid = $_SESSION['id'];
            $checkid = "SELECT * From users where id='$uid'";
            $result = $conn->query($checkid);
            if ($result->num_rows > 0) {
                $sql = "select id,u_id,bookName,dateTaken,dateSubmit,Status from files where u_id='$uid';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['Status'] == 1) {
                            ?>
                            <div class="container rounded border border-2 border-dark bg-white mt-2 mb-5 p-3">
                                <p> You have taken this book "<?php echo $row['bookName'] ?>" <br>
                                    on the this date <?php echo $row['dateTaken'] ?>
                                </p>
                                <a type="button" data-toggle="modal" data-target="#exampleModalCenter1"
                                    class="btn btn-primary"><i></i>Return </a>
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="exampleModalLongTitle">RETURN THE BOOK
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <p>Confirm return</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="return.php?book=<?php echo $row['bookName'] ?>" method="post">
                                                    <input type="Submit" class="btn btn-primary" value="Return" name="return">
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                } else { ?>
                    <div class="container rounded border border-2 border-dark bg-white m-5 p-3">
                        <p> Currently you don't have any books</p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>



        <script>
            const userButton = document.getElementById('utable');
            const tableButton = document.getElementById('usert');
            const bookButton = document.getElementById('ubooks');


            userButton.addEventListener('click', function () {
                libraryTable.style.display = "block";
                admindisplay.style.display = "none";
                userbooks.style.display = "none";
                userdisplay.style.display = "none";


            })
            tableButton.addEventListener('click', function () {
                admindisplay.style.display = "block";
                libraryTable.style.display = "none";
                userbooks.style.display = "none";
                userdisplay.style.display = "none";


            })
            bookButton.addEventListener('click', function () {
                userbooks.style.display = "block";
                libraryTable.style.display = "none";
                admindisplay.style.display = "none";
                userdisplay.style.display = "none";


            })
        </script>


        <script src="DataTables/jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function () {
                $("#mytabel").DataTable();
            });
        </script>
        <script src="DataTables/datatables.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </div>
    <div class="footer mt-2">
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
    </div>

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</body>

</html>
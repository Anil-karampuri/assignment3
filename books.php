<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start();
  if (!isset($_SESSION['email'])) {

    header("location:login.php?login");
  }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="book.css?" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>

<body
  style="background-image: url(img/logbg.jpeg); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover;">
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
  if (isset($_GET["order"])) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>You'r Order placed succesfully</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }
  ?>
  <div class="bodycontainer">
    <section class="m-5">
      <div class="container">
        <div class="d-flex m-5">
          <h1 class="rounded border border-2 border-dark bg-dark mx-auto text-center text-white"
            style="text-shadow: 2px 2px 5px black;">Science Fiction Books</h1>
        </div>
        <div class="dropdown-center text-center">
          <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Books list
          </button>
          <ul class="dropdown-menu">
            <?php
            if (isset($_SESSION['email'])) {
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select id,bookName,dateTaken,dateSubmit,Status from files;";
              $result = mysqli_query($conn, $sql);
              $array = array();
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $array[] = $row['Status'];
                }

                ?>
                <div class="container d-flex">
                  <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModa6"> <img src="img/img6.jpg"
                        style="height:300px; width:auto">
                      <br>Dune by Frank Herbert</a>
                    <?php if ($array[5] == '1') { ?>

                      <h4 class=" rounded border border-2 border-dark bg-dark mx-4 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-4 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                  <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModa7"><img src="img/img7.jpg"
                        style="height:300px; width:auto"><br>Foundation Series by Isaac
                      Asimov</a>
                    <?php if ($array[6] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                  <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModa8"><img src="img/img8.jpg"
                        style="height:300px; width:auto"><br>The Expanse by James S. A.
                      Corey</a>
                    <?php if ($array[7] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                </div>
                <div class="container d-flex">
                  <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModa9"><img src="img/img9.jpg"
                        style="height:300px; width:auto"><br>The Hyperion Cantos by Dan
                      Simmons</a>
                    <?php if ($array[8] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                  <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModa10"><img src="img/img10.jpg"
                        style="height:300px; width:auto"><br>Enders Game by Orson Scott
                      Card</a>
                    <?php if ($array[9] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                </div>
              </ul>
            </div>
          </div>
        </section>
        <section class="m-5">
          <div class="container">
            <div class="d-flex m-5">
              <h1 class="rounded border border-2 border-dark bg-dark mx-auto text-center text-white"
                style="text-shadow: 5px 5px 5px black;">Horor Books</h1>
            </div>
            <div class="dropdown-center text-center">
              <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Books list
              </button>

              <ul class="dropdown-menu">

                <div class="container d-flex">

                  <li><a type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><img
                        src="img/img1.jpg" style="height:300px; width:auto"><br>The Ruins by Scott
                      Smith.</a>
                    <?php if ($array[0] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                  <li><a type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModa2"><img
                        src="img/img2.jpg" style="height:300px; width:auto"><br>Coraline By Neil
                      Gaiman.</a>
                    <?php if ($array[1] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                  <li><a type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModa3"><img
                        src="img/img3.jpg" style="height:300px; width:auto"><br>IT By Stephen
                      King.</a>
                    <?php if ($array[2] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>

                </div>

                <div class="container d-flex">
                  <li><a type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModa4"><img
                        src="img/img4.jpg" style="height:300px; width:auto"><br>Frankenstein By
                      Mary Selleyh.</a>
                    <?php if ($array[3] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                  <li><a type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModa5"><img
                        src="img/img5.jpg" style="height:300px; width:auto"><br>The Shining By
                      Stephen King.</a>
                    <?php if ($array[4] == '1') { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Taken</h4>
                    <?php } else { ?>
                      <h4 class=" rounded border border-2 border-dark bg-dark mx-5 text-center text-white">Available</h4>
                    <?php } ?>
                  </li>
                </div>

              </ul>
              <?php
              }
            }
            ?>
        </div>

      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex flex-row">
            <h5 class="modal-title" id="exampleModalLabel">The Ruins by Scott Smith.</h5>
            <div class="d-flex justify-content-end">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select status from files where id = 1;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=1" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Coraline By Neil Gaiman.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select  status from files where id = 2;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=2" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IT By Stephen King.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select  status from files where id = 3;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=3" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Frankenstein By Mary Selleyh.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select  status from files where id = 4;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=4" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModa5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">The Shining By Stephen King.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select  status from files where id = 5;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=5" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dune by Frank Herbert </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select  status from files where id = 6;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=6" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Foundation Series by Isaac Asimov</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select status from files where id = 7;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=7" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">The Expanse by James S. A. Corey</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select  status from files where id = 8;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=8" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">The Hyperion Cantos by Dan Simmons</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select status from files where id = 9;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=9" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";
                  }
                }
              }
              ?>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModa10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enders Game by Orson Scott Card</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This book is
              <?php
              $conn = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
              $sql = "select status from files where id = 10;";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  if ($row['status'] == '0') {
                    echo "available"; ?>
                  <form action="order.php?id=10" method="post">
                </div>
                <div class="modal-footer">
                  <input type="Submit" class="btn btn-primary" value="Order" name="book">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                <?php }
                  if ($row['status'] == '1') {
                    echo "unavailable.";

                  }
                }
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <script>
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
    </script>

    <script src="DataTables/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  </div>

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
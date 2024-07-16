
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("dbcon.php");
session_start();
 if (!isset($_SESSION['email']))
 {

     header("location:login.php?login");
 }
 ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
<header>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <h5> <a class="navbar-brand" href=""><img src="img/library.png" width="250px">Library</a></h5>

       
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
<a href="index.php?admindisplay=user" class="btn btn-success m-2 float-end"> <i class="fa-solid fa-arrow-left"></i>back </a>
<div class="container-fluid rounded border border-2 border-dark mx-auto m-5 p-3" style="height:auto; width:400px; ">
    <h2 class="text-center m-3">Adding user's Data</h2>
    <form class="form form-borderd" id="insertform" action="adduserphp.php" method="post" enctype="multipart/form-data">
      <div class="form-group mb-2">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control rounded border border-2 border-secondary" name="fname" required>
      </div>
      <div class="form-group mb-2">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control rounded border border-2 border-secondary" name="lname" required>
      </div>
      <div class="form-group mb-2">
        <label for="email" class="form-label">Email</label>
       <input type="email" id="email" class="form-control rounded border border-2 border-secondary" name="email" required>
        <span id="emailtext"></span>
      </div>
      <div class="form-group mb-2">
        <label for="pwd" class="form-label">Password</label>
        <input type="Password" class="form-control rounded border border-2 border-secondary" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  name="pwd" required>
      </div>
     
      <div class="text-center">
        <input type="Submit" class="btn btn-primary" id="register" value="submit" name="submit">
      </div>
    </form>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
</body>
</html>
<script>
          $(document).ready(function () {
            $('#email').blur(function () {

                var email = $(this).val();
                $.ajax({
                    url: 'check.php',
                    method: "post",
                    data: { email: email },
                    success: function (data) {
                        if (data != '0') {
                            $('#emailtext').html('<span class="text-danger"> email not available</span>');
                            $('#register').attr("disabled", true);
                        }
                        else {
                            $('#emailtext').html('<span class="text-success"> email available</span>');
                            $('#register').attr("disabled", false);
                        }
                    }


                })

            });
        });

</script>
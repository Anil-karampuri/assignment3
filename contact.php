<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php?login");
}
?>

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
    <h2 class="contact-heading-title container-fluid text-center p-5 text-white">CONTACT US</h2>
    <section class="d-flex flex-row m-4">

        <div class="container bodycontainer rounded border border-2 border-dark bg-secondary m-3 p-5"
            style="height:auto; width:50%; ">
            <div class="contact-title2">
                <h2 class="text-center">Leave A Message</h2>
            </div>
            <div class="widget-divider">
            </div>
            <div class="contact-para1">

            </div>
            <form class="form form-borderd">

                <div class="forms">

                    <div class="forms-field mb-2">
                        <label class="forms-container">Name</label>
                        <input type="text" id="wpforms-383-field_0"
                            class="form-control rounded border border-2 border-secondary"
                            style="background-color:aliceblue;" name="wpforms[fields][0]" placeholder="Name"
                            required="">
                    </div>
                    <div class="forms-field mb-2">
                        <label class="forms-container">Email Address</label>
                        <input type="text" id="wpforms-383-field_0"
                            class="form-control rounded border border-2 border-secondary"
                            style="background-color:aliceblue;" name="wpforms[fields][0]" placeholder="Email Address"
                            required="">

                    </div>
                    <div class="forms-field mb-4">
                        <label class="forms-container">Message</label>
                        <input type="text" id="wpforms-383-field_0"
                            class="form-control rounded border border-2 border-secondary p-1 pb-5"
                            style="background-color:aliceblue;" name="wpforms[fields][0]" placeholder="Message"
                            required>
                    </div>

                    <div class="button-form text-center">
                        <button type="submit" name="wpforms[submit]" id="wpforms-submit-383" type="Submit"
                            class="btn btn-dark" data-alt-text="Sending..." data-submit-text="Send Message"
                            aria-live="assertive" value="wpforms-submit">Send Message</button>
                    </div>
            </form>
        </div>
        <div class="bodycontainer rounded border border-2 border-dark bg-secondary m-3 p-5 "
            style="height:auto; width:50%;background-color:black;">

            <div class="contact-box container-fluid my-5">
                <div class="icon-box d-flex ">
                    <i class="fas fa-map-marker-alt  m-1"></i>

                    <h5 class="contact-icon-box-title">
                        <span> Address </span>
                    </h5>
                </div>
                <p class="contact-icon-box-description">
                    13 Fifth Avenue, New York,
                    NY 10160 </p>
            </div>


            <div class="contact-box container-fluid my-5">
                <div class="icon-box d-flex ">
                    <i class="fas fa-phone  m-1"></i>

                    <h5 class="contact-icon-box-title">
                        <span> Phone </span>
                    </h5>
                </div>
                <p class="contact-icon-box-description">
                    +1 910-626-85255 +1 910-828-95990 </p>


            </div>


            <div class="contact-box container-fluid  my-5">
                <div class="icon-box d-flex ">

                    <i class="fas fa-envelope m-1"></i>

                    <h5 class="contact-icon-box-title  ">
                        <span>Email
                        </span>
                    </h5>
                </div>
                <p class="contact-icon-box-description">
                    contact@university.com
                    university@sierra.com</p>

            </div>
        </div>

    </section>

    <section>

        <iframe loading="lazy"
            src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
            title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"
            style="height:400px; width:100%;"></iframe>

    </section>


    <footer class=" bg-dark p-5">


        <div class=" container d-flex flex-column text-center justify-content-end text-white">

            <p>Copyright © 2024 library</p>
            <p>Powered by library</p>
        </div>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_GET["logout"])) {
        $email = $_GET["insert"];

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>User has been logged out</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    ?>
    <?php
    if (isset($_GET["msg"])) {
        echo "<script>alert('Please Fill All The Details'); location.replace(registration.php)</script>";
    }

    ?>
    <section class="vh-100" style="background-image: url('')">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="background-color:#5F9EA0;" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/logimg.webp" alt="login form" class="img-fluid m-4"
                                    style="border-radius: 1rem 1rem 1rem 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 " id="signIn">

                                    <form method="post" action="loginphp.php">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="img/library.png" width="250px" class="d-flex align-items-center">
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 text-white" style="letter-spacing: 1px;">Sign
                                            into your account</h5>

                                        <div data-mdb-input-init class="form-outline mb-3 mt-2">

                                            <input type="email" name="email"
                                                class="form-control form-control-lg text-white"
                                                style="background-color:#5F9EA0;" placeholder="" required>
                                            <label class="form-label text-white" for="email"><i
                                                    class="fas fa-envelope"></i> Email address</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3 ">

                                            <input type="password" name="pwd"
                                                class="form-control form-control-lg  text-white"
                                                style="background-color:#5F9EA0;" placeholder="" required>
                                            <label class="form-label text-white" for="pwd"><i class="fas fa-lock"></i>
                                                Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input type="submit" class="btn btn-dark btn-lg btn-block " value="Login"
                                                name="signIn">

                                        </div>

                                        <a class="small text-muted link-offset-2 link-underline link-underline-opacity-0"
                                            href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2 text-white">Don't have an account? <a href="#!"
                                                class="link-primary link-offset-2 link-underline link-underline-opacity-0"
                                                id="signUpButton">Register here</a></p>
                                        <a href="#!"
                                            class="small text-muted link-offset-2 link-underline link-underline-opacity-0">Terms
                                            of use.</a>
                                        <a href="#!"
                                            class="small text-muted link-offset-2 link-underline link-underline-opacity-0">Privacy
                                            policy</a>
                                    </form>

                                </div>


                                <div class="card-body p-4 p-lg-5 " id="signUp" style="display:none;">

                                    <form method="post" autocomplete="on" action="insert.php">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="img/library.png" width="250px" class="d-flex align-items-center">
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 text-white" style="letter-spacing: 1px;">Register
                                            your account</h5>
                                        <div class="d-flex flex-row">
                                            <div data-mdb-input-init class="form-outline mb-2 m-1">

                                                <input type="text" class="form-control form-control-lg  text-white"
                                                    style="background-color:#5F9EA0;" name="fname" placeholder=""
                                                    required>
                                                <label class="form-label text-white" for="fname">First
                                                    name</label>
                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-2 m-1">
                                                <input type="text" id="form2Example17"
                                                    class="form-control form-control-lg  text-white"
                                                    style="background-color:#5F9EA0;" name="lname" placeholder=""
                                                    required>
                                                <label class="form-label text-white" for="lname">Last
                                                    name</label>
                                            </div>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-2 m-1">
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-lg  text-white"
                                                style="background-color:#5F9EA0;" name="email"
                                                pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" placeholder=""
                                                required>
                                            <label class="form-label text-white" for="email">Email
                                                address</label>
                                            <span id="emailtext"></span>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-2 m-1">
                                            <input type="password" class="form-control form-control-lg text-white"
                                                style="background-color:#5F9EA0;"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pwd" placeholder=""
                                                required>
                                            <label class="form-label text-white" for="pwd">Password</label>
                                        </div>
                                        <div class="form-check m-3">
                                            <input class="form-check-input" type="checkbox" value="1" name="user">
                                            <label class="form-check-label text-white" for="user"> Admin?
                                            </label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <input type="submit" class="btn btn-dark btn-lg btn-block " id="register"
                                                value="Register" name="signUp">

                                        </div>


                                        <a class="small text-muted link-offset-2 link-underline link-underline-opacity-0 mt-3"
                                            href="#!">Forgot password?</a>

                                        <p class="mb-5 pb-lg-2 text-white">Already have an account? <a href="#!"
                                                class="link-primary link-offset-2 link-underline link-underline-opacity-0"
                                                id="signInButton">Log In</a></p>

                                        <a href="#!"
                                            class="small text-muted link-offset-2 link-underline link-underline-opacity-0">Terms
                                            of use.</a>
                                        <a href="#!"
                                            class="small text-muted link-offset-2 link-underline link-underline-opacity-0">Privacy
                                            policy</a>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php


    if (isset($_GET["login"])) {
        echo "<script>alert('Enter correct details'); </script>";
    }


    ?>
    <script>
        const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signInForm = document.getElementById('signIn');
        const signUpForm = document.getElementById('signUp');

        signUpButton.addEventListener('click', function () {
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        })
        signInButton.addEventListener('click', function () {
            signInForm.style.display = "block";
            signUpForm.style.display = "none";
        })



    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

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
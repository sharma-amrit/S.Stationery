<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.Stationery</title>

    <!-- Style -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>

<body>
<?php
    // Check if there is a login error message in the session
    if (isset($_SESSION["signup_success"])) {
        // Display the error message
        include '../components/signupSuccess.php';
        // Clear the login error message from the session
        unset($_SESSION["signup_success"]);
    }
?>
    <div class="d-flex justify-content-center align-items-center">
    <?php
        if(isset($_SESSION['signup_error'])){
            echo'<a> signup error</a>';
            unset($_SESSION["signup_error"]);
        }
    ?>
        <div class="tab-content">
            <form class="shadow-lg rounded p-4 mt-2" action="../../controllers/signup.php" method="POST">
                <h6>Create An Account</h6>
                <div class="form-outline mb-2">
                    <input name ="username" type="text" id="form3Example1cg" class="form-control form-control-lg"
                        placeholder="Enter your name" style="font-size: 14px;" required/>
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-2">
                    <input name = "email" type="email" id="form3Example3cg" class="form-control form-control-lg"
                        placeholder="Enter email" style="font-size: 14px;" required />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-2">
                    <input name="password" type="password" id="form3Example4cg" class="form-control form-control-lg"
                        placeholder="Enter password" style="font-size: 14px;" required />
                    <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-2">
                    <input name = "cpassword" type="password" id="form3Example4cdg" class="form-control form-control-lg"
                        placeholder="Repeat your password" style="font-size: 14px;" required/>
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check mb-5">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                service</u></a>
                    </label>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit"
                        class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href="#!"
                        class="fw-bold text-body"><u><a href="./login.php">Login here</a></u></a></p>

            </form>
        </div>
    </div>
    <!-- footer -->
    <hr>
    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline social-icons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">&copy; 2023 S.Stationery. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
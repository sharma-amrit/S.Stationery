<?php
if(isset($_POST['button'])) {
  // Redirect to a new page
  header("Location: ../../views/pages/login.php");
  exit(); // Make sure to exit after the redirect
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>S.Stationery</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="../../views/css/home.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- AOS Animatin -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-md fixed-top bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#home">S.Stationery</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="nav navbar-nav w-100 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <div id="home" class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-12 col-lg-6" data-aos="fade-left">
                <img src="../../img/bg.jpg" class="d-block mx-lg-auto img-fluid" alt="background Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h1 class="display-5 fw-bold lh-1 mb-3">Welcome to S.Stationery - Your Destination for Premium Stationery Products!</h1>
                <p class="lead">At S.Stationery, we believe in the power of stationery to inspire, create, and connect. Whether you're a student, professional, artist, or simply someone who appreciates the beauty of stationery, we have everything you need to enhance your writing experience and unleash your creative potential.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <form method="post" class="btn btn-primary btn-lg px-4 me-md-2">
                        <div class="form-group">
                            
                            <input type="submit" name="button" class="btn btn-primary" value="Let's Go Shopping">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <section id="services" class="services-section" data-aos="fade-up">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <h2 class="services-heading">Our Services</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-book service-icon"></i>
                        <h4>Wide Selection of Books</h4>
                        <p>Explore our vast collection of books across various genres.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="service-card">
                        <i class="fas fa-pencil-ruler service-icon"></i>
                        <h4>Stationery Supplies</h4>
                        <p>Find a wide range of stationery supplies to meet your needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-shipping-fast service-icon"></i>
                        <h4>Fast Delivery</h4>
                        <p>Enjoy quick and reliable delivery of your orders.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Us-->
    <div id="contact">
        <div class="contact-form-wrapper d-flex justify-content-center">
            <form action="#" class="contact-form">
                <h5 class="title">Contact us</h5>
                <p class="description">Feel free to contact us if you need any assistance, any help or another question.
                </p>
                <div data-aos="fade-up">
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name"
                        placeholder="Name" required>
                </div>
                <div data-aos="fade-up">
                    <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email"
                        required>
                </div>
                <div data-aos="fade-up">
                    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5"
                        cols="30" placeholder="Message" required></textarea>
                </div>
                <div class="submit-button-wrapper">
                    <input class="bg-primary" type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        //console.log("hellow world");
        AOS.init();
    </script>
</body>

</html>
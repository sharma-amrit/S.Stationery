

<!DOCTYPE html>
<html>
<head>
    <title>Professional Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="fixed-top px-5 navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">S.Stationery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"> Amrit Sharma</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../pages/login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row pt-3">
        <?php 
            $urls = [
                "https://cdn.pixabay.com/photo/2012/04/18/14/50/pencil-37254_1280.png",
                "https://cdn.pixabay.com/photo/2012/04/18/14/50/pencil-37254_1280.png",
                "https://cdn.pixabay.com/photo/2012/04/18/14/50/pencil-37254_1280.png",
                "https://cdn.pixabay.com/photo/2012/04/18/14/50/pencil-37254_1280.png",
                "https://cdn.pixabay.com/photo/2012/04/18/14/50/pencil-37254_1280.png",
            ];

            foreach ($urls as $url) {
                include '../components/productCard/productAsItem.php';
            }
        ?>
        </div>
            
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
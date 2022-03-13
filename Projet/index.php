<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Home</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="menu-bar">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col">
                    <img src="./assets/logo.png" alt="logo" id="logo">
                </div>
                <!-- Navigation -->
                <div class="col">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="Internship.php">Internships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="companies.php">Companies</a>
                        </li>
                    </ul>
                </div>
                <!-- Sign in links -->
                <div class="col">
                    <a class="btn float-end text-white" href="signIn.php" role="button">Sign In</a>
                    <a class="btn float-end text-white" href="signUp.php" role="button">Sign Up</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Banner -->
    <div class="banner text-center">
        <h1>INTERNSHIP FOR YOU</h1>
        <p>On our website you'll find your internship</p>
    </div>
    <!-- Search internship -->
    <div class="search-box text-center">
        <i class="fa-solid fa-magnifying-glass"></i><input type="text" class="form-control" placeholder="What" disabled>
        <i class="fa-solid fa-location-dot"></i><input type="text" class="form-control" placeholder="Where" disabled>
        <input type="button" class="btn btn-primary" value="Find internship" disabled>
    </div>

    <!-- Footer -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Nternship</h3>
                        <p>Our brand new company was created with the aim of helping students in need when looking for an internship. Indeed, by our various past experiences, we decided to create this site which will help more than one student.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="fa-brands fa-facebook-f"></i></a><a href="#"><i class="fa-brands fa-twitter"></i></a><a href="#"><i class="fa-brands fa-snapchat"></i></a><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                </div>
                <p class="copyright">Nternship © 2018</p>
            </div>
        </footer>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Script Font Awesome -->
    <script src="https://kit.fontawesome.com/0c287f2687.js" crossorigin="anonymous"></script>
</body>

</html>
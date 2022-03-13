<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Internships</title>
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
                            <a class="nav-link active" href="#">Internships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="companies.php">Companies</a>
                        </li>
                    </ul>
                </div>
                <!-- Account menu -->
                <div class="col">
                    <img src="./assets/img_243887.png" alt="account" class="btn dropdown-toggle float-end" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
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
        <i class="fa-solid fa-magnifying-glass"></i><input type="text" class="form-control" placeholder="What">
        <i class="fa-solid fa-location-dot"></i><input type="text" class="form-control" placeholder="Where">
        <input type="button" class="btn btn-primary" value="Find internship">
    </div>

    <!-- Internship container-->
    <div class="content-container" id="internship-container">
        <!-- Internship brief container -->
        <div class="content-brief-container" id="internship-brief-container">
            <div class="card">
                <div class="card-header">123 YEY</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Details</button>
                </div>
            </div>
            <?php
                for($i=0;$i<6;$i++)
                {
                echo "
                    <div class='card'>
                        <div class='card-header'>123 YEY</div>
                        <div class='card-body'>
                            Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                            et repudiandae
                            maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                            recusandae
                            nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                            sit distinctio
                            perferendis sit dolor labore.
                        </div>
                        <div class='card-footer'>
                            <button class='btn btn-primary'>Details</button>
                        </div>
                    </div>
                ";
                }
            ?>
        </div>
        <!-- Details internship container -->
        <div class="content-details-container" id="internship-details-container">
            <div class="card">
                <div class="card-header">123 YEY</div>
                <div class="card-body overflow-auto">
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                    <p>Lorem ipsum dolor sit amet. Ut odio cumque id veniam cumque id rerum architecto non necessitatibus eaque
                    et repudiandae
                    maxime aut cumque nihil. Et temporibus quasi ut consequatur omnis sed illum distinctio sit quia nemo At
                    recusandae
                    nihil. Eum ullam totam est repellat magni hic delectus similique est sapiente ipsum rem minus quisquam
                    sit distinctio
                    perferendis sit dolor labore.</p>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Sign Up</title>
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
                            <a class="nav-link" href="#">Companies</a>
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
    <!-- Sign Up Form -->
    <div class="box-signUp text-white">
        <h1 class="text-center mb-4">Sign Up</h1>
        <form class="row g-3 m-3">
            <!-- Last Name Input -->
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="inputLastName">
            </div>
            <!-- First Name Input -->
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="inputFirstName">
            </div>
            <!-- Email Input -->
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <!-- Password Input -->
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <!-- Password Confirmation Input -->
            <div class="col-md-6">
                <label for="inputPasswordConfirmation" class="form-label">Repeat password</label>
                <input type="password" class="form-control" id="inputPasswordConfirmation">
            </div>
            <!-- Phone Number Input -->
            <div class="col-md-6">
                <label for="inputPhoneNumber" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="inputPhoneNumber">
            </div>
            <!-- Birth Date Input -->
            <div class="col-md-6">
                <label for="inputBirthDate" class="form-label">Birth date</label>
                <input type="text" class="form-control" id="inputBirthDate" placeholder="MM/DD/YYYY">
            </div>
            <!-- Gender Input -->
            <div class="col-md-12">
                <label for="inputGender" class="form-label">Gender</label>
                <select id="inputGender" class="form-select">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <!-- Address Input -->
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <!-- Address2 Input -->
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <!-- City Input -->
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <!-- State Input -->
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <!-- Zip Input -->
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <!-- Campus Input -->
            <div class="col-md-6">
                <label for="inputCampus" class="form-label">Campus</label>
                <input type="text" class="form-control" id="inputCampus">
            </div>
            <!-- Role Input -->
            <div class="col-md-6">
                <label for="inputRole" class="form-label">Role</label>
                <input type="text" class="form-control" id="inputRole">
            </div>
            <!-- Submit btn -->
            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </form>
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
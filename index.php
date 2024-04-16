<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>နေမိသားစု စတိုး</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- jQuery library -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>


</head>

<body>
    <!--navbar open-->
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <img src="images\DM logo 2.png" class="img-thumbnail" alt="...">
            <div id="space"></div>
            <a class="navbar-brand" href="#">နေမိသားစု စတိုး</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Shirts</a></li>
                            <li><a class="dropdown-item" href="#">Pants</a></li>
                            <li><a class="dropdown-item" href="#">Shoes</a></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light-border-subtle" type="submit" id="search">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--navbar close-- >

    < !-- background images open -->


    <div id="background-image">
        <div id="image-1"></div>
        <div id="image-2"></div>
    </div>


    <!-- background images close -->

    <!-- main content of featured products -->
    <div class="container">
        <div class="row">

            <!--Feature Products Title Div-->
            <h2 class="text-center">ကုန်ပစ္စည်းများ </h2>

            <!--Jeans-->
            <div class="col">
                <h2>Levis Jeans</h2>
                <img src="images/levis.jpg" alt="Levis Jeans" id="images" />
                <p class="List-price text-danger">List Price: <s>..Kyats</s></p>
                <p class="Price">Our Price: ..Kyats </p>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#details-1">Details</button>

            </div>

            <!--football-->
            <div class="col">
                <h2>Dress</h2>
                <img src="images/dress.png" alt="dress" id="images" />
                <p class="List-price text-danger">List Price: <s>..Kyats</s></p>
                <p class="Price">Our Price: ..Kyats</p>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#details-2">Details</button>


            </div>

            <!--watch-->
            <div class="col">
                <h2>Watch</h2>
                <img src="images/Gucci_Watch.jpg" alt="watch" id="images" />
                <p class="List-price text-danger">List Price: <s>..Kyats</s></p>
                <p class="Price">Our Price: ..Kyats </p>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#details-3">Details</button>
            </div>

        </div>

    </div>


    <!--footer open-->
    <footer id="footer">

        <div class="container">
            <div class="row">
                <div class="col order-last">
                    Develop by Nay Win Aung
                </div>
                <div class="col">
                </div>
                <div class="col order-first">
                    &copy;Copyright 2024 Nay Family Shop
                </div>
            </div>
        </div>
    </footer>


    <!--detail modal-->

    <?php
    include 'details-modal-levisJeans.php';
    include 'details-modal-dress.php';

    include 'details-modal-watch.php';
    ?>



</body>

</html>
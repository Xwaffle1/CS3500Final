<!DOCTYPE html>
<html>
<link lang="en">
<meta charset="utf-8">
<title>CS3500 Final</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>

<link rel="stylesheet" type="text/css" href="assets/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/main.css"/>

</head>
<header>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <?php include("navbar-top.php"); ?>
    <!--    --><?php //include("navbar-left.php"); ?>
</header>
<body>
<div class="container">
    <div class="jumbotron text-center">
        <h1>Company Name</h1>
        <p style="margin: 1em">Subsribe to our news letter in order to hear about our great deals!</p>
        <div class="input-group">
            <input type="email" class="form-control" size="50" placeholder="Email Address" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<div class="w3-content w3-display-container">
    <div class="w3-display-container slide">
        <img src="assets/images/laptops/lenovo.jpg" style="width:100%">
        <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
            $249.99
        </div>
    </div>

    <div class="w3-display-container slide">
        <img src="assets/images/laptops/dell.jpg" style="width:100%">
        <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
            $549.99
        </div>
    </div>

    <div class="w3-display-container slide">
        <img src="assets/images/laptops/hp.jpg" style="width:100%">
        <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
            $949.99
        </div>
    </div>
    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>


</body>

<!-- Bootstrap core JavaScript -->
<!-- ================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/carousel.js"></script>

</html>
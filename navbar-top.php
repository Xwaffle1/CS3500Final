<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      type="text/css">

<header>
    <script src="assets/js/main.js"></script>
</header>

<nav class="navbar navbar-toggleable-md navbar-light navbar-inverse bg-inverse">


    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">WebsiteName</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item" id="home">
                <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item" id="categories">
                <a class="nav-link" href="products.php">Products</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary text-white" type="submit"><span class="fa fa-search"></span></button>
        </form>
    </div>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['user']) && !empty(trim($_SESSION['user']))) {

        ?>


        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <?php
            echo "<a class='welcome-user' onmouseover='' href='javascript:void(0)' onmouseenter='displayProfile(this)' onmouseleave='hideProfile(this)'>
                    <p >" . $_SESSION['user'] . "</p>
                    <p>
                        <i class='fa d-inline fa-lg fa-usd' style='color: gold'></i> 10.52 
                    </p>
                    </a>                    
                    ";
            ?>
            <a class="btn navbar-btn ml-2 text-white btn-default sign-out" href="shoppingCart.php"> <i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Cart</a>
            <a class="btn navbar-btn ml-2 text-white btn-info sign-out" href="signout.php"> Sign Out</a>
        </div>
        <?php
    } else {
        ?>

        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">

            <a class="btn navbar-btn ml-2 text-white btn-success" href="login.php"><i
                        class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
            <a class="btn navbar-btn ml-2 text-white btn-success" href="register.php"><i
                        class="fa d-inline fa-lg fa-child"></i>&nbsp;Register</a>
        </div>

    <?php } ?>

</nav>
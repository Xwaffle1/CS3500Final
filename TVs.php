<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<header>
    <?php include("navbar-top.php"); ?>
    <script>
        $(document).ready(function () {
            $(".nav li").removeClass("active");
            $('#categories').addClass('active');
        });
    </script>
</header>

<a class="btn navbar-btn text-white btn-info back-button" href="products.php"><i
            class="fa fa-arrow-left"></i></a>


<div class="container">
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Sony TV</h3>
                    <img class="item-image" src="assets/images/tvs/sony.jpg"/>
                    <p style="word-wrap: break-word">Sony - 50" Class(49.5" Diag.) - LED - 2160p - Smart - 4K Ultra HD TV</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$600.00</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">LG TV</h3>
                    <img class="item-image" src="assets/images/tvs/LG.jpg"/>
                    <p style="word-wrap: break-word">LG - 55" Class (54.6" Diag.) - LED - 2160p - Smart - 4K Ultra HD TV </p>
                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$699.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Samsung TV</h3>
                    <img class="item-image" src="assets/images/tvs/samsung.jpg"/>
                    <p style="word-wrap: break-word">Samsung  -  40" Class (39.9 Diag.) - LED - 2160p - Smart - 4k Ultra HD TV</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$549.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

</div>
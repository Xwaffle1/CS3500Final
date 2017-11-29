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
<a class="btn navbar-btn text-white btn-info back-button" href="products.php" ><i
            class="fa fa-arrow-left"></i></a>

<div class="container">
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Lenovo Laptop</h3>
                    <img class="item-image" src="assets/images/laptops/lenovo.jpg"/>
                    <p style="word-wrap: break-word">Lenovo - 15.6" Laptop - AMD A6-Series
                        -4GB Memory - 500GB Hard Drive - Black</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$279.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Dell Laptop</h3>
                    <img class="item-image" src="assets/images/laptops/dell.jpg"/>
                    <p style="word-wrap: break-word">Dell - Inspiron 15.6" Touch-Screen Laptop - Intel Core i5 - 8GB
                        Memory - 2TB Hard Drive - Black</p>
                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$529.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">HP Laptop</h3>
                    <img class="item-image" src="assets/images/laptops/hp.jpg"/>
                    <p style="word-wrap: break-word">ENVY x360 2-in-1 15.6" Touch-Screen Laptop - Intel Core i7 - 16GB
                        Memory - 1TB Hard Drive - Natural Silver</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$949.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

</div>
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
                    <h3 class="item-header">Canon DSLR Camera</h3>
                    <img class="item-image" src="assets/images/cameras/canon-camera.jpg"/>
                    <p style="word-wrap: break-word">Canon - EOS Rebel T6i DSLR Camera with 
                        EF-S 18-55mm IS STM Lens - Black</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$599.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning add-to-cart" href="" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Nikon DSLR Camera</h3>
                    <img class="item-image" src="assets/images/cameras/nikon.jpg"/>
                    <p style="word-wrap: break-word">Nikon - D5600 DSLR Camera with AF-P DX NIKKOR 
					18-55mm f/3.5-5.6G VR Lens - Black</p>
                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$749.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning add-to-cart" href="javascript:void(0)" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Sony DSLR Camera</h3>
                    <img class="item-image" src="assets/images/cameras/sony.jpg"/>
                    <p style="word-wrap: break-word">Sony - a77 II DSLR Camera (Body Only) - Black</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$1,499.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning add-to-cart" href="javascript:void(0)" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

</div>
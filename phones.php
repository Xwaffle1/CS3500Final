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
<div class="container">
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Apple iPhone X</h3>
                    <img class="item-image" src="assets/images/phones/iphone.jpg"/>
                    <p style="word-wrap: break-word">Apple - iPhone X 64GB - 5.8-inch Super Retina HD display with HDR - Space Gray</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$999.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>

    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr />
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">Samsung Galaxy S8</h3>
                    <img class="item-image" src="assets/images/phones/galaxy.jpg"/>
                    <p style="word-wrap: break-word">Samsung - Galaxy S8 64GB - AMOLED 5.8-inch screen - 12MP dual camera - Midnight Black</p>
                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr />
            <p class="price">$576.99</p>
            <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
        </div>
    </div>


</div>
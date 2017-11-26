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
<body>
<div class="container">
    <div class="col-10 float-right">
        <div class="col">
            <div class="row">
                <div class="col-80">
                    <div class="col-60 float-left item-image-slot" style="background-color: blue; padding: 2em;">
                        <h3 class="item-header">Lenovo Laptop</h3>
                        <img class="item-image" src="assets/images/laptops/lenovo.jpg"/>
                        <div class="col-7 float-right" style="background-color: #2b542c; padding: 2em;">
                            <p style="word-wrap: break-word">Lenovo - 15.6" Laptop - AMD A6-Series
                                -4GB Memory - 500GB Hard Drive - Black</p>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-80 float-right" style="position: static;    ">
                <p class="price">$279.99</p>
                <a class="btn navbar-btn ml-2 text-white btn-warning" href="javascript:void(0)"><i
                            class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>
            </div>

        </div>
    </div>
</div>
</div>


</body>
</html>
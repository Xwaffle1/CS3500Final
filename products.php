<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>


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
    <h1 id="categoryHeader">All Categories</h1>
    <div class="list-group">
        <a href="display-product.php?category=0" class="list-group-item"><i class="fa fa-camera"></i>&nbsp; Cameras</a>
        <a href="display-product.php?category=1" class="list-group-item"><i class="fa fa-laptop"></i>&nbsp; Computers</a>
        <a href="display-product.php?category=2" class="list-group-item"><i class="fa fa-lg fa-mobile"></i>&nbsp; Phones</a>
        <a href="display-product.php?category=3" class="list-group-item"><i class="fa fa-television"></i>&nbsp; TVs</a>
		<div class="dropdown">
			<a class="list-group-item" data-toggle="dropdown" href="#"><i class="fa fa-gamepad"></i>&nbsp; Video Games</a>
			<ul class="dropdown-menu">
				<li><a href="display-product.php?category=4">Consoles</a></li>
				<li><a href="display-product.php?category=5">Games</a></li>
				<li><a href="display-product.php?category=6">Accessories</a></li>
			</ul>
        <!--<a href="display-product.php?category=4" class="list-group-item"><i class="fa fa-gamepad"></i>&nbsp; Video Games</a>-->
    </div>
</div>


</body>
</html>
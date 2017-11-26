<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>


    <script>
        $(document).ready(function () {
            $(".nav li").removeClass("active");
            $('#home').addClass('active');
        });
    </script>

</head>
<header>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <?php include("navbar-top.php"); ?>
<!--    --><?php //include("navbar-left.php"); ?>

<style>
.jumbotron{
	background-color: MidnightBlue;
	color: #fff;
	padding: 100px 25px;
	font-family: Montserrat, sans-serif;
}
h1{font-size: 8em;}
</style>

</header>
<body>
<div class="jumbotron text-center">
	<h1>Company Name</h1>
	<div class="input-group">
		<input type="email" class="form-control" size="50" placeholder="Email Address" required>
		<div class="input-group-btn">
			<button type="button" class="btn btn-danger">Subscribe</button>
		</div>
	</div>
</div>

</body>

<!-- Bootstrap core JavaScript -->
<!-- ================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


</html>
<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>CS3500 Final</title>
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/reset.css" />
   <link rel="stylesheet" href="assets/css/main.css" />

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>


   <script>
       $(document).ready(function () {
           $(".nav li").removeClass("active");
           $('#sellitem').addClass('active');
       });
   </script>

</head>
<header>
   <?php include("navbar-top.php"); ?>
</header>
<body>
<h1> Sell Item Page </h1>

</body>
</html>
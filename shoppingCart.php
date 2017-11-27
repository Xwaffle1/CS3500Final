<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"/>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"/>

    <script src="assets/bootstrap/js/bootstrap.min.js"/>
</head>
<header>
    <?php include("navbar-top.php"); ?>

</header>

<?php
define("TAX_PERCENT", 0.10);
define("SHIPPING_THRESHOLD", 0);
define("SHIPPING_FLAT_AMOUNT", 0);
?>

<body>
<div class="container">

    <div class="page-header">
        <h1 id="shoppingCartHeader">View Cart</h1>
    </div>
    <table class="table table-condensed">
        <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
        </tr>


        <tr class="success strong">
            <td colspan="4" class="moveRight">Subtotal</td>
            <td>$<?php echo number_format(0, 2) ?></td>
        </tr>
        <tr class="active strong">
            <td colspan="4" class="moveRight">Tax</td>
            <td>$<?php echo number_format(0, 2) ?></td>
        </tr>
        <tr class="strong">
            <td colspan="4" class="moveRight">Shipping</td>
            <td>$<?php echo number_format(0, 2) ?></td>
        </tr>
        <tr class="warning strong text-danger">
            <td colspan="4" class="moveRight">Total</td>
            <td>$<?php echo number_format(0, 2) ?></td>
        </tr>
        <tr>
            <td colspan="4" class="moveRight"><a href="main.php" class="btn btn-primary" role="button">Continue
                    Shopping</a></td>
            <td><a href="" class="btn btn-success">Checkout</a></td>
        </tr>
    </table>


</div>

<!-- Bootstrap core JavaScript -->
<script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
<script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>
</html>
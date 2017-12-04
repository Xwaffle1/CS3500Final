<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
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

    <?php
    include("database.php");
    global $products;
    ?>

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
        <?php

        $subTotal = 0;

        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $productID) {
                $product = $products[$productID];
                $subTotal += $product->price;
                echo "<tr>";
                echo "<td><img src=\"$product->imagePath\" height=\"60\" width=\"80\"/></td>";
                echo "<td>$product->itemName</td>";
                echo "<td>1</td>";
                echo "<td>$product->price</td>";
                echo "<td>$product->price</td>";
                echo "<td><a class=\"btn btn-danger\" onclick=\"removeItem(this);\">X</a></td>";
                echo "<tr>";
            }
        }

        $tax = $subTotal * 0.06;
        $shipping = 5;
        $total = $subTotal + $tax + $shipping;
        ?>


        <tr class="success strong">
            <td colspan="4" class="moveRight">Subtotal</td>
            <td>$<?php echo number_format($subTotal, 2) ?></td>
        </tr>
        <tr class="active strong">
            <td colspan="4" class="moveRight">Tax</td>
            <td>$<?php echo number_format($tax, 2) ?></td>
        </tr>
        <tr class="strong">
            <td colspan="4" class="moveRight">Shipping</td>
            <td>$<?php echo number_format($shipping, 2) ?></td>
        </tr>
        <tr class="warning strong text-danger">
            <td colspan="4" class="moveRight">Total</td>
            <td>$<?php echo number_format($total, 2) ?></td>
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
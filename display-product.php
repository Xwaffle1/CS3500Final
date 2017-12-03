<?php

include "database.php";


function cartContains($id) {
    if (!isset($_SESSION["cart"]))
        return false;

    foreach ($_SESSION["cart"] as $productID) {
        if ($productID == $id)
            return true;
    }

    return false;
}

?>

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
</header>

<a class="btn navbar-btn text-white btn-info back-button" href="products.php"><i
            class="fa fa-arrow-left"></i></a>


<div class="container">

    <?php
    global $products;

    $results = 0;

    foreach ($products as $product) {
        if (isset($_GET["category"])) {
            $category = $_GET["category"];
            if ($product->getCategoryID() != $category)
                continue;
        }

        if (isset($_GET["search"]) && strlen($_GET["search"]) > 0) {
            if (!(strpos(strtolower($product->itemName), strtolower($_GET["search"])) !== false))
                continue;
        }
        $results++;
        echo '    
    <div class="col">
        <div class="row float-left">
            <div class="col-80">
                <hr/>
                <div class="col-60 float-left item-image-slot">
                    <h3 class="item-header">' . $product->itemName . '</h3>
                    <img class="item-image" src="' . $product->imagePath . '"/>
                    <p style="word-wrap: break-word">' . $product->itemDesc . '</p>

                </div>

            </div>
        </div>
        <div class="col-80 float-right">
            <hr/>
            <p class="price">' . $product->price . '</p>';

        if (cartContains($product->id)) {
            echo '<a class="btn navbar-btn ml-2 text-white btn-success" href="addToCart.php?productID=' . $product->id . '" onclick="addToCart(this)">    <i
                        class="fa d-inline fa-lg fa-check"></i> In Cart</a>';
        } else {
            echo '<a class="btn navbar-btn ml-2 text-white btn-warning" href="addToCart.php?productID=' . $product->id . '" onclick="addToCart(this)"><i
                        class="fa d-inline fa-lg fa-shopping-cart"></i> Add To Cart</a>';
        }
        echo '
        </div>
    </div>
    ';

    }

    if ($results === 0) {
        echo "<h3 style='margin-top: 3em; font-size: 24px;'>No Results Found... for:  <strong>" . $_GET["search"] . "</strong></h3>";
    } else {
    }


    ?>


</div>
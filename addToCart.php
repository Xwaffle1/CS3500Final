<?php
/**
 * Created by PhpStorm.
 * User: chase
 * Date: 12/3/2017
 * Time: 1:26 AM
 */

session_start();
$_SESSION["cart"][] = $_GET["productID"];

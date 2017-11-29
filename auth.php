<?php
/**
 * Created by PhpStorm.
 * User: chase
 * Date: 11/25/2017
 * Time: 10:03 PM
 */


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $name = $_POST["email"];

    $_SESSION["user"] = $name;
}

header("Location: main.php");
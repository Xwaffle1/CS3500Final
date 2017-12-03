<?php
/**
 * Created by PhpStorm.
 * User: chase
 * Date: 12/3/2017
 * Time: 12:48 AM
 */


include_once("Product.php");
$host = '127.0.0.1';
$db = 'electronics';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$products = array();


if (sizeof($products) == 0) {
    loadProducts();
}

function loadProducts() {
    global $products;
    $products = array();

    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `products`");
    $stmt->execute();
    foreach ($stmt->fetchAll() as $row) {
        $products[] = new Product($row);
    }

}
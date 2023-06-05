<?php


require_once('../dao/Produit.php');

$pd = new ProduitCRUD();

$title = $_POST['title'];
$price = $_POST['price'];

$quantity = $_POST['quantity'];
$category = $_POST['category'];

$pd->createProduit($title, $price, $quantity,$category);

print_r('wqrfwretgeardgawrstarwetsdaerd');




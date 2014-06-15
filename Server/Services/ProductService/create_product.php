<?php
// create_product.php
require_once "../../bootstrap.php";

$data = file_get_contents("php://input");
$objData = json_decode($data);

$name  = $objData->name;



$product = new Product();
$product->setName($name);

$entityManager->persist($product);
$entityManager->flush();

//echo "Created Product with ID " . $product->getId() . "\n";



echo json_encode("Created Product");
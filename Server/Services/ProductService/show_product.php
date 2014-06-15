<?php
// show_product.php <id>
require_once "../../bootstrap.php";

//$id = $argv[1];
//$id = 2;
$id = $_GET['id'];

//$data = file_get_contents("php://input");
//$objData = json_decode($data);
//$id = $objData->id;

/*
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}
*/


$dql = "SELECT p FROM Product p WHERE p.id=".$id;
$product = $entityManager->createQuery($dql)->getArrayResult();

$pr = $product[0];
echo json_encode($pr);
//echo sprintf("-%s\n", $product->getName());




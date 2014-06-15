<?php
// update_product.php <id> <new-name>
require_once "../../bootstrap.php";



//$id = 2;
//$newName = 'product2';

$data = file_get_contents("php://input");
$objData = json_decode($data);

$id = $objData->id;
$name  = $objData->name;

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($name);

$entityManager->flush();

echo json_encode("Product Updated");
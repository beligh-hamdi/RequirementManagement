<?php
// products.php
require_once "../../bootstrap.php";

$dql = "SELECT p FROM Product p";
$products = $entityManager->createQuery($dql)->getArrayResult();

echo json_encode($products);


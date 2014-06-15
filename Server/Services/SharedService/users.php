<?php
// users.php
require_once "../bootstrap.php";

$dql = "SELECT u FROM User u";

$query = $entityManager->createQuery($dql);
$users = $query->getArrayResult();// array

echo json_encode($users);


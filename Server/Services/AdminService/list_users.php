<?php

// users.php
require_once "../../bootstrap.php";


$dql = "SELECT u FROM Person u";

$query = $entityManager->createQuery($dql);
//$users = $query->getArrayResult();// array
$users = $query->getResult();// array
//print_r(json_encode($users));

print_r($users);

<?php
// products.php
require_once "../../bootstrap.php";

//$dql = "SELECT p FROM Project p";

$dql = "SELECT p,m FROM Project p JOIN p.manager m";

$projects = $entityManager->createQuery($dql)->getArrayResult();

echo json_encode($projects);


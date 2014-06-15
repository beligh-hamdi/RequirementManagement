<?php

require_once "../../bootstrap.php";

$id = $_GET['id'];

$dql = "SELECT p,m FROM Project p JOIN p.manager m WHERE p.id=".$id;;

$project = $entityManager->createQuery($dql)->getArrayResult();

$pr = $project[0];
echo json_encode($pr);


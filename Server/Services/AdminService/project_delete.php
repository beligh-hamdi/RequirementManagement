<?php
require_once "../../bootstrap.php";

$id = $_GET['id'];

$dql = "DELETE Project p WHERE p.id=".$id;
$em = $entityManager->createQuery($dql);
$numDeleted = $em->execute();

echo json_encode($numDeleted);


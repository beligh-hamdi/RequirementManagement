<?php
// create_exigence.php
require_once "../../bootstrap.php";

$newExigenceName = $argv[1];

$exigence = new Exigence();
$exigence->setName($newExigenceName);

$entityManager->persist($exigence);
$entityManager->flush();

echo "Created Exigence with ID " . $exigence->getId() . "\n";

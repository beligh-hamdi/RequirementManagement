<?php
// create_projet.php
require_once "../../bootstrap.php";

$newProjectName = $argv[1];

$projet = new Projet();
$projet->setName($newProjectName);

$entityManager->persist($projet);
$entityManager->flush();

echo "Created Project with ID " . $projet->getId() . "\n";

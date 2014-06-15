<?php
// create_collaborateur.php
require_once "../../bootstrap.php";

$newCollaborateurName = $argv[1];

$collaborateur = new Collaborateur();
$collaborateur->setName($newCollaborateurtName);

$entityManager->persist($collaborateur);
$entityManager->flush();

echo "Created Collaborateur with ID " . $collaborateur->getId() . "\n";

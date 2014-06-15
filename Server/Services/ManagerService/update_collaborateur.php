<?php
// update_collaborateur.php <id> <new-name>
require_once "../../bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$collaborateur = $entityManager->find('Collaborateur', $id);

if ($collaborateur === null) {
    echo "Collaborateur $id does not exist.\n";
    exit(1);
}

$collaborateur->setName($newName);

$entityManager->flush();

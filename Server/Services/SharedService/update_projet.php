<?php
// update_projet.php <id> <new-name>
require_once "../bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$projet = $entityManager->find('projet', $id);

if ($projet === null) {
    echo "Project $id does not exist.\n";
    exit(1);
}

$projet->setName($newName);

$entityManager->flush();

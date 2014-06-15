<?php
// update_exigence.php <id> <new-name>
require_once "../../bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$exigence = $entityManager->find('Exigence', $id);

if ($exigence === null) {
    echo "Exigence $id does not exist.\n";
    exit(1);
}

$exigence->setName($newName);

$entityManager->flush();

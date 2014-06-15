<?php
// update_manager.php <id> <new-name>
require_once "../../bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$manager = $entityManager->find('Manager', $id);

if ($manager === null) {
    echo "Manager $id does not exist.\n";
    exit(1);
}

$manager->setName($newName);

$entityManager->flush();

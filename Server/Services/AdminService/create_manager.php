<?php
// create_manager.php
require_once "../../bootstrap.php";

$newManagerName = $argv[1];

$manager = new Manager();
$manager->setName($newManagerName);

$entityManager->persist($manager);
$entityManager->flush();

echo "Created Manager with ID " . $manager->getId() . "\n";

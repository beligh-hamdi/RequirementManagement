<?php
// show_manager.php <id>
require_once "../bootstrap.php";

$id = $argv[1];
$manager = $entityManager->find('Manager', $id);

if ($manager === null) {
    echo "No manager found.\n";
    exit(1);
}

echo "Name: ".$manager->getName()."\n";
echo "First name: ".$manager->getFirstname()."\n";
echo "Email: ".$manager->getEmail()."\n";
echo "Date of hire: ".$manager->getDate_of_hire()."\n";
echo "Contact: ".$manager->getContact()."\n";
foreach($manager->getProjets() AS $projet) {
        echo "  Project list: ".$projet->getName()."\n";
    }
  
echo "\n";
foreach($manager->getExigences() AS $exigence) {
        echo "Requirements created ".$exigence->getNumber()."\n";
    }
echo "\n";
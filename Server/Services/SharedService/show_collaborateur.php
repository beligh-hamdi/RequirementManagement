<?php
// show_collaborateur.php <id>
require_once "../bootstrap.php";

$id = $argv[1];
$collaborateur = $entityManager->find('Collaborateur', $id);

if ($collaborateur === null) {
    echo "No collaborateur found.\n";
    exit(1);
}

echo "Name: ".$collaborateur->getName()."\n";
echo "First name: ".$collaborateur->getFirstname()."\n";
echo "Email: ".$collaborateur->getEmail()."\n";
echo "Date of hire: ".$collaborateur->getDate_of_hire()."\n";
echo "Contact: ".$collaborateur->getContact()."\n";
echo "Supervisor: ".$collaborateur->getSupervisor()."\n";
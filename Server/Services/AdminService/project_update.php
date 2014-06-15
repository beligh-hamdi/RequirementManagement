<?php

require_once "../../bootstrap.php";

$data = file_get_contents("php://input");
$objData = json_decode($data);

$id = $objData->id;
$name  = $objData->name;
$manager_id  = $objData->manager->id;
$level  = $objData->level;
$functionality  = $objData->functionality;
$progress  = $objData->progress;

$manager = $entityManager->find("Manager", $manager_id);


$project = $entityManager->find('Project', $id);

if ($project === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}



$project->setName($name);
$project->setManager($manager);
$project->setLevel($level);
$project->setFunctionality($functionality);
$project->setProgress($progress);



$entityManager->flush();

echo json_encode("Updated");
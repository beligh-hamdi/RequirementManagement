<?php
// project_create.php
require_once "../../bootstrap.php";

$data = file_get_contents("php://input");
$objData = json_decode($data);


$name  = $objData->name;
$manager_id  = $objData->manager_id;
$level  = $objData->level;
$functionality  = $objData->functionality;
$progress  = $objData->progress;


$manager = $entityManager->find("Manager", $manager_id);


$project = new Project();

$project->setName($name);
$project->setManager($manager);
$project->setLevel($level);
$project->setFunctionality($functionality);
$project->setProgress($progress);

$entityManager->persist($project);
$entityManager->flush();


echo json_encode("Created");
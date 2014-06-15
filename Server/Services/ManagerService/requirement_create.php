<?php
// requirement_create.php
require_once "../../bootstrap.php";

$data = file_get_contents("php://input");
$objData = json_decode($data);



$user_id  = $objData->user_id;
$features  = $objData->features;
$number  = $objData->number;
$decription  = $objData->description;
$priority  = $objData->priority;
$level  = $objData->level;
$dependentDevelopment = $objData->dependentDevelopment;
$endDesiredDate = $objData->endDesiredDate ;
$collaborateur = $objData->collaborateur ;
$startDate = $objData->startDate ;
$percentageOfIncrease = $objData->percentageOfIncrease ;

$user = $entityManager->find("User", user_id);


$requirement = new Requirement();


$requirement->setUser($user);
$requirement->setFeatures($features);
$requirement->setNumber($number);
$requirement->setDescription($description);
$requirement->setPriority($priority);
$requirement->setLevel($level);
$requirement->setDependentDevelopment($dependentDevelopment);
$requirement->setEndDesiredDate($endDesiredDate);
$requirement->setCollaborateur($collaborateur);
$requirement->setStartDate($startDate);
$requirement->setPercentageOfIncrease($percentageOfIncrease);
        
$entityManager->persist($requirement);
$entityManager->flush();


echo json_encode("Created");
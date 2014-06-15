<?php
// list_exigences.php
require_once "../bootstrap.php";

$dql = "SELECT `id`, `user_id`, `features`, `number`, `description`, `priority`, `level`, `dependentDevelopment`, `endDesiredDate`, `collaborateur`, `startDate`, `percentageOfIncrease` FROM `exigence`";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach($exigences AS $exigence) {
    echo "Exigence:"."\n";
    echo "Features: ".$exigence->getFeatures()."\n";
    echo "Number: ".$exigence-> getNumber()."\n";
    echo "Description: ".$exigence->getDescription()."\n";
    echo "Priority: ".$exigence->getPriority()."\n";
    echo "Level: ".$exigence->getLevel()."\n";
    echo "Dependent development: ".$exigence->getDependentDevelopment()."\n";
    echo "End desired date: ".$exigence-> getEndDesiredDate()."\n";
    echo "Collaborateur: ".$exigence->getCollaborateur()."\n";
    echo "Start date : ".$exigence->getStartDate() ."\n";
    echo "Percentage of increase: ".$exigence->getPercentageOfIncrease()."\n";
    foreach($exigence->getExigences() AS $exigence) {
        echo "Requirements created ".$exigence->getNumber()."\n";
    }
echo "\n";
}


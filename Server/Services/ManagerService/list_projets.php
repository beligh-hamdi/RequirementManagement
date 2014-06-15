<?php
// list_projets.php
require_once "../../bootstrap.php";

$dql = "SELECT `id`, `manager_id`, `name`, `level`, `functionality`, `progress` FROM `projet`";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach($projets AS $projet) {
    echo $projet->getName();
    echo "Level: ".$projet->getLevel()."\n";
    echo "Functionality: ".$projet->getFnctionality()."\n";
    echo "Manager: ".$projet->getManager()->getName()."\n";
    echo "Progress: ".$projet->getProgress()."\n";
}

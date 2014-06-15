<?php
// create_user.php
require_once "../bootstrap.php";

$newUsername = $_POST['name'];

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

//echo "Created User with ID " . $user->getId() . "\n";

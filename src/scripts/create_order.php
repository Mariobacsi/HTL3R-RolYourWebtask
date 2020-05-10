<?php
//create_product.php <firstname> <lastname> <phone> <email> <address> <city> <zipcode> <country>
require_once "bootstrap.php";

$newFirstname = $argv[1];
$newLastname = $argv[2];
$newPhone = $argv[3];
$newEmail = $argv[4];
$newAddress = $argv[5];
$newCity = $argv[6];
$newZipcode = $argv[7];
$newCountry = $argv[8];

$order = new Order();
$order->setFirstname($newFirstname);
$order->setLastname($newLastname);
$order->setPhone($newPhone);
$order->setEmail($newEmail);
$order->setAddress($newAddress);
$order->setCity($newCity);
$order->setZipcode($newZipcode);
$order->setCountry($newCountry);

$entityManager->persist($order);
$entityManager->flush();

echo "Created new Order with ID [" . $order->getId() . "]";

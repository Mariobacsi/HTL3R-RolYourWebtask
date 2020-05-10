<?php
//create_product.php <name> <price>
require_once "bootstrap.php";

$newProductName = $argv[1];
$newProductPrice = $argv[2];

$product = new Product();
$product->setName($newProductName);
$product->setPrice($newProductPrice);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product [" . $product->getName() . ', ' . $product->getPrice() . "] with ID [" . $product->getId() . "]\n";

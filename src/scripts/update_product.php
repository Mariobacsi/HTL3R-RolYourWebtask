<?php

// update_product.php <id> <new-name> <price>
require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];
$newPrice = $argv[2];

$product = $entityManager->find('Product', $id);

if ($product === null) {
  echo "Product $id does not exist.\n";
  exit(1);
}

$product->setName($newName);
$product->setPrice($newPrice);

$entityManager->flush();

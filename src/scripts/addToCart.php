<?php
//addToCart.php <order> <product>
require_once "bootstrap.php";

$orderId = $argv[1];
$productId = $argv[2];

$order = $entityManager->find('Order', $orderId);
$product = $entityManager->find('Product', $productId);

if (!$order || !$product){
  echo 'No order and/or product were found by the given id(s).\n';
  exit(1);
}

if ($argc == 4 && is_int($argv[3]) && $argv[3] > 1){
  $amount = $argv[3];
}else{
  $amount = 1;
}

$cartItem = new CartItem();
$cartItem->setOrder($order);
$cartItem->setProduct($product);
$cartItem->setAmount($amount);


$entityManager->persist($cartItem);
$entityManager->flush();

echo 'Product [' . $cartItem->getProduct() . '] was added to the Order [' . $cartItem->getOrder() . ']';

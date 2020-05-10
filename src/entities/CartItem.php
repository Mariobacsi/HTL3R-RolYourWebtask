<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="cartitems")
 */
class CartItem
{
  /**
   * @ORM\ID
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;
  /**
   * @ORM\Column(type="integer")
   */
  protected $amount;

  /*Getter*/
  public function getId()
  {
    return $this->id;
  }

  public function getAmount(){
    return $this->amount;
  }

  /*Setters*/

  public function setAmount($amount){
    $this->amount = $amount;
  }

  /*References*/

  /**
   * @ORM\ManyToOne(targetEntity="Order", inversedBy="addProduct")
   */
  protected $order;
  /**
   * @ORM\ManyToOne(targetEntity="Product", inversedBy="addCart")
   */
  protected $product;

  /*Setter*/
  public function setOrder(Order $order)
  {
    $order->addProduct($this);
    $this->order = $order;
  }

  public function setProduct(Product $product)
  {
    $product->addCart($this);
    $this->product = $product;
  }

  /*Getter*/
  public function getOrder()
  {
    return $this->order;
  }

  public function getProduct()
  {
    return $this->product;
  }
}

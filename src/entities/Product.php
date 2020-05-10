<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{

  /**
   * @ORM\ID
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;
  /**
   * @ORM\Column(type="string")
   */
  protected $name;
  /**
   * @ORM\Column(type="float")
   */
  protected $price;

  /*Getter*/
  public function getID(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }

  /*Setter*/
  public function setName($name){
    $this->name = $name;
  }

  public function setPrice($price){
    $this->price = $price;
  }

  /*References*/

  protected $cartItem;

  public function __construct(){
    $this->cartItem = new ArrayCollection();
  }

  public function addCart(CartItem $cartItem)
  {
    $this->cartItem[] = $cartItem;
  }

}

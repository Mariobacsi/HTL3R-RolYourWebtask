<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
 */
class Order
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
  protected $firstname;
  /**
   * @ORM\Column(type="string")
   */
  protected $lastname;
  /**
   * @ORM\Column(type="string")
   */
  protected $phone;
  /**
   * @ORM\Column(type="string")
   */
  protected $email;
  /**
   * @ORM\Column(type="string")
   */
  protected $address;
  /**
   * @ORM\Column(type="string")
   */
  protected $city;
  /**
   * @ORM\Column(type="integer")
   */
  protected $zipcode;
  /**
   * @ORM\Column(type="string")
   */
  protected $country;

  /*Getter*/
  function getId()
  {
    return $this->id;
  }

  function getFirstname()
  {
    return $this->firstname;
  }

  function getLastname()
  {
    return $this->lastname;
  }

  function getPhone()
  {
    return $this->phone;
  }

  function getEmail()
  {
    return $this->email;
  }

  function getAddress()
  {
    return $this->address;
  }

  function getCity()
  {
    return $this->city;
  }

  function getZipcode()
  {
    return $this->zipcode;
  }

  function getCountry()
  {
    return $this->country;
  }

  /*Setter*/
  function setFirstname($firstname)
  {
    $this->firstname = $firstname;
  }

  function setLastname($lastname)
  {
    $this->lastname = $lastname;
  }

  function setPhone($phone)
  {
    $this->phone = $phone;
  }

  function setEmail($email)
  {
    $this->email = $email;
  }

  function setAddress($address)
  {
    $this->address = $address;
  }

  function setCity($city)
  {
    $this->city = $city;
  }

  function setZipcode($zipcode)
  {
    $this->zipcode = $zipcode;
  }

  function setCountry($country)
  {
    $this->country = $country;
  }

  /*References*/

  protected $cartItem;

  public function __construct(){
    $this->cartItem = new ArrayCollection();
  }

  public function addProduct(CartItem $cartItem)
  {
    $this->cartItem[] = $cartItem;
  }

}

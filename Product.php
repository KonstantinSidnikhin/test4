<?php
include "Cart.php";
class Product{
    private $name;
    private $price;
    private $quantity;
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function getCost(){
        return ($this->getPrice() * $this->getQuantity());
    }

}
$eval=new Product;
 $sum=$eval->getCost();
 echo $sum;


?>


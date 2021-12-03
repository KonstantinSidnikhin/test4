<?php

class Cart{
    public $products = [];
//    public  $index=0;
    public function get(){
    return $this->products;
}
    public function add($item){
        $this->products[]=$item;
        return $this->get();
    }
    public function remove($item1){
        $index=array_search($item1,$this->products);
        unset($this->products[$index]);
  return $this->get();
    }
}
$cart=new Cart;
$cart->add("milk");
$cart->add("butter");
$cart->add("yogurt");
$cart->remove("butter",$cart->get());
print_r($cart->products);






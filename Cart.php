<?php

class Cart{
    public $products = [];
    public  $index=0;
    public function get(){
    return $this->products;
}
    public function add($item){
        $this->products[]=$item;
        return $this->products;

    }
    public function remove($item1){



        $index=array_search($item1, $products);


        array_splice($products,$index,1);
  return $this->$products;
    }


}



$cart=new Cart;
$cart->add("milk");
$cart->add("butter");
$cart->remove("butter");
print_r($cart->products);





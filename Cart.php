<?php

class Cart{
    public $products = [];
    public  $index=0;



    public function add($item){
        $this->products[]=$item;
        return $this;

    }
    public function remove($item1){
//        $this->index=0;
        $this->products[]=$products;



        $index=array_search($item1, $products);


        array_splice($products,$index,2);
        return $products;
    }


}



$cart=new Cart;
$cart->add("milk")->add("bread");
$cart->add("butter")->remove("butter");



print_r($cart);

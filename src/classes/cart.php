<?php
//namespace cart;
class Cart
{
    public array $cart;

    public function __construct()
    {
        $this->cart=array();
    }

    public function addToCart($product)
    {
        if(!($this->isProductExist($product)))
        {
            $product->quantity=1;
            array_push($this->cart, $product);  
        }             
    }

    public function isProductExist($product)
    {
       foreach($this->cart as $k=>$cart)
       {
           if($this->cart[$k]->id == $product->id)
           {
               $product->quantity=+1;
           }
       }
    }

    public function getCart()
    {
        return $this->cart;
    }

}
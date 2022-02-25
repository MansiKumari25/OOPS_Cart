<?php
namespace cart;

class Cart{
    
    public $id;
    public $image;
    public $name;
    public $price;
    public $quantity;

    public function setProduct($id, $image, $name, $price, $quantity)
    {
        $this->id=$id;
        $this->image=$image;
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }

    public function getProduct()
    {
        $product=array($this->id, $this->image, $this->name, $this->price, $this->quantity);
        return $product;
    }
}




?>
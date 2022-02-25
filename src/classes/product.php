<?php
//namespace products;
class Products
{
    public int $id;
    public string $name;
    public float $price;
    public string $image;
    public int $quantity;
    //public array $product;
    //

    //public array $product;
    public function __construct(int $id, string $image, string $name, float $price, int $quantity)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->image=$image;
        $this->quantity=$quantity;
        //$this->product=array();
    }    
}

// public function setProducts($product)
    // {
    //     $this->product=$product;
    // }

    // public function getProduct()
    // {
    //      $this->product=array($this->id, $this->image, $this->name, $this->price, $this->quantity);
    //     return $this->product;
    // }

?>



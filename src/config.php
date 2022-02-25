<?php 
    //session_start();
    require 'classes/product.php';
    require 'classes/cart.php';
    $_SESSION["products"]=array();
    $_SESSION["cart"] = new Cart();

    $products=array();
    //     array("id"=>101, "image"=>"football.png", "name"=>"Football", "price"=>150.00, "quantity"=>1),
    //     array("id"=>102, "image"=>"tennis.png", "name"=>"Tennis Ball", "price"=>120.00, "quantity"=>1),
    //     array("id"=>103, "image"=>"basketball.png", "name"=>"Basketball", "price"=>90.00, "quantity"=>1),
    //     array("id"=>104, "image"=>"table-tennis.png", "name"=>"Table tennis ball", "price"=>110.00, "quantity"=>1),
    //     array("id"=>105, "image"=>"soccer.png", "name"=>"Soccer", "price"=>80.00, "quantity"=>1),
    // );

    //assigning product objects 
    $football=new Products(101, "football.png", "Football", 150.00, 0);
    $tennis=new Products(102, "tennis.png", "Tennis Ball", 120.00, 0);
    $basketball=new Products(103, "basketball.png", "Basketball", 90.00, 0);
    $tabletennis=new Products(104, "table-tennis.png", "Table Tennis ball", 110.00, 0);
    $soccer=new Products(105, "soccer.png", "Soccer", 80.00, 0);

    //pushing the objects into session array to be accesible in the overall
    array_push($_SESSION["products"], json_encode($football));
    array_push($_SESSION["products"], json_encode($tennis));
    array_push($_SESSION["products"], json_encode($basketball));
    array_push($_SESSION["products"], json_encode($tabletennis));
    array_push($_SESSION["products"], json_encode($soccer));

    //$cart=new Cart();
  
    
   
?>
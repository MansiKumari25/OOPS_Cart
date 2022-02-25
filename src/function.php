<?php
//session_start();


    // $products=isset($_SESSION["products"])?json_decode($_SESSION["products"]): array();
    // // echo "<pre>";
    // // print_r($products);
    // // echo "</pre>";
   
    // if(isset($_POST["action"]))
    // {
    //     $action=$_POST["action"];
    //     switch($action)
    //     {
    //         case "add":  addToCart();
    //                     break;
    //     }
    // }

    //function to display products from product class to doc
    function showProduct()
    {
        global $products;
        foreach($products as $product)
        {
           // $products=json_decode($products);//decoding the objects
            echo '<div id="'.$product->id.'" class="product">';
            echo '<img src="images/'.$product->image.'">';
            echo '<h3 class="title"><a href="#">'.$product->name.'</a></h3>';
            echo '<span>Price: $'.$product->price.'</span>';
            echo '<a class="add-to-cart" href="#" data-id="'.$product->id.'">Add To Cart</a>';
            echo '</div>';			
        }
    }

       
    // function addToCart()
    // {     
    //     //$id=$_POST["id"];
    //     global $products;
    //     foreach($products as $product)
	// 	{
    //         //$products=json_decode($products); //decoding the objects
    //             echo "<pre>";
    //             print_r($product);
    //             echo "</pre>";
    //             // echo "Hello";
    //         // if($id == ($products->id))		
    //         // {
    //         //     $_SESSION["cart"]->addToCart($products);
    //         //     echo "Done";
    //         // }
	// 	}
    //      // echo json_encode(array($_SESSION["cart"]->getCart()));
    // }

    // addToCart();


?>
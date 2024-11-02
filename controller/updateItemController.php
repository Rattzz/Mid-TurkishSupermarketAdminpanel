<?php
    include_once "../config/dbconnect.php";

    $id=$_POST['id'];
    $product= $_POST['product'];
    $description= $_POST['description'];
    $quantity= $_POST['quantity'];
    $retail_price= $_POST['retail_price'];
    $cat_id= $_POST['cat_id'];
    $brand_id= $_POST['brand_id'];


    $updateItem = mysqli_query($conn,"UPDATE product SET 
        product='$product', 
        description='$description',
        quantity='$quantity',  
        retail_price='$retail_price',
        cat_id=$cat_id,
        brand_id='$brand_id' 
        WHERE id=$id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>
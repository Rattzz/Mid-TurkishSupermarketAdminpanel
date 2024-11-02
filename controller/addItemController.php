<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
    $id=$_POST['id'];
    $product= $_POST['product'];
    $description= $_POST['description'];
    $quantity= $_POST['quantity'];
    $barcode= $_POST['barcode'];
    $cost_price= $_POST['cost_price'];
    $retail_price= $_POST['retail_price'];
    $cat_id= $_POST['cat_id'];
    $brand_id= $_POST['brand_id'];
   
    $insert = mysqli_query($conn,"INSERT INTO product (product,description,quantity,barcode,cost_price,retail_price,cat_id,brand_id) VALUES ('$product','$description','$quantity','$barcode','$cost_price','$retail_price','$cat_id','$brand_id')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }



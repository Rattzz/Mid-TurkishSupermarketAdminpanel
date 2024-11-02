<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM brand where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Brand Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
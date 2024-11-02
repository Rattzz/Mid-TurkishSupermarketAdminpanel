<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $date = $_POST['salesdate'];
        $subtotal= $_POST['subtotal'];
        $pay = $_POST['pay'];
        $balance = $_POST['balance'];


         $insert = mysqli_query($conn,"INSERT INTO sales
         (salesdate,subtotal,pay,balance) VALUES ('$date','$subtotal','$pay','$balance')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?variation=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?variation=success");
         }
     
    }
        
?>
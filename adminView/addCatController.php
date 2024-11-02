<?php
include_once 'dbconnect.php';
if(isset($_POST['submit']))
{    
     $category = $_POST['category'];
     $status = $_POST['status'];
     $sql = "INSERT INTO category (category,status)
     VALUES ('$category','$status')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
header("Location:index.php");

}
?>

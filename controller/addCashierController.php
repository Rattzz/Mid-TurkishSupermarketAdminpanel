<?php
include_once 'dbconnect.php';
if(isset($_POST['submit']))
{    
     $username = $_POST['username'];
     $status = $_POST['status'];
     $sql = "INSERT INTO cashier (username,status)
     VALUES ('$username','$status')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

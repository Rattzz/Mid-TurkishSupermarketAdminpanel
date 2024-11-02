<?php
require('dbconnect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from product where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/updates.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Dashboard</a> 
| <a href="addItemController.php">Insert New Record</a> 
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_POST['id'];
$product= $_POST['product'];
$description= $_POST['description'];
$retail_price= $_POST['retail_price'];
$cat_id= $_POST['cat_id'];
$brand_id= $_POST['brand_id'];
$submittedby = $_SESSION["product"];
$update="update product set product='".$product."',
name='".$name."', age='".$age."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php }

header("Location: ../index.php");

?>
</div>
</div>
</body>
</html>
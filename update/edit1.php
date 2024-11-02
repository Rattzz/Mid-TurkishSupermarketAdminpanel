<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Product</title>
</head>
<body>
<?php
			$zz = $_POST['id']; 
			$product = $_POST['product'];
		    $description = $_POST['description'];
			$cat_id = $_POST['cat_id'];
			$brand_id = $_POST['brand_id'];
			$cost_price = $_POST['cost_price'];
			$retail_price = $_POST['retail_price'];
			$quantity = $_POST['quantity'];
			$barcode = $_POST['barcode'];


			
	   include('connection.php');
		
	 			$query = 'UPDATE product set product ="'.$product.'",
					description ="'.$description.'", cat_id="'.$cat_id.'",
					brand_id="'.$brand_id.'",cost_price="'.$cost_price.'",
                    retail_price="'.$retail_price.'",
                    quantity="'.$quantity.'", 
					barcode="'.$barcode.'" WHERE
					id="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>

 
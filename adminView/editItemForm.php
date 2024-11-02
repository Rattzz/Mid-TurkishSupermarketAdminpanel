
<div class="container p-5">

<h4>Edit Product Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM product WHERE id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="product" value="<?=$row1['product']?>">
    </div>
    <div class="form-group">
      <label for="desc">Product Description:</label>
      <input type="text" class="form-control" id="description" value="<?=$row1['description']?>">
    </div>
    <div class="form-group">
      <label for="qty">Quantity:</label>
      <input type="number" class="form-control" id="quantity" value="<?=$row1['quantity']?>">
    </div>
    <div class="form-group">
      <label for="barcode">Barcode:</label>
      <input type="number" class="form-control" id="barcode" value="<?=$row1['barcode']?>">
    </div>
    <div class="form-group">
      <label for="price">Unit Price:</label>
      <input type="number" class="form-control" id="retail_price" value="<?=$row1['retail_price']?>">
    </div>
<div class="form-group">
      <label for="price">Category ID:</label>
      <input type="number" class="form-control" id="cat_id" value="<?=$row1['cat_id']?>">
    </div>
<div class="form-group">
      <label for="price">Brand ID:</label>
      <input type="number" class="form-control" id="brand_id" value="<?=$row1['brand_id']?>">
    </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>






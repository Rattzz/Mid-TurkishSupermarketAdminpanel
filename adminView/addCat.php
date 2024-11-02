<?php
include_once 'dbconnect.php';

<form method="POST" action="">
  <input type="text" name="product" placeholder="Product">
  <input type="text" name="description" placeholder="Description">
  <input type="text" name="cat_id" placeholder="Category ID">
  <input type="text" name="brand_id" placeholder="Brand ID">
  <input type="text" name="cost_price" placeholder="Cost Price">
  <input type="text" name="retail_price" placeholder="Retail Price">
  <input type="text" name="barcode" placeholder="Barcode">
  <input type="text" name="quantity" placeholder="Quantity">
  <button type="submit" name="add">Add</button>
</form>

if (isset($_POST['add'])) {
  $product = $_POST['product'];
  $description = $_POST['description'];
  $cat_id = $_POST['cat_id'];
  $brand_id = $_POST['brand_id'];
  $cost_price = $_POST['cost_price'];
  $retail_price = $_POST['retail_price'];
  $barcode = $_POST['barcode'];
  $quantity = $_POST['quantity'];

  $stmt = $db->prepare("INSERT INTO product (product, description, cat_id, brand_id, cost_price, retail_price, barcode, quantity) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiiddis", $product, $description, $cat_id, $brand_id, $cost_price, $retail_price, $barcode, $quantity);
  $stmt->execute();
  $stmt->close();
}

header("Location:index.php");

?>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' method="POST">
            <div class="form-group">
              <label for="retail_price">Product Name:</label>
              <input type="text" class="form-control" id="product" required>
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" id="description" required>
            </div>
            <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="number" class="form-control" id="quantity" required>
            </div>
            <div class="form-group">
              <label for="barcode">Barcode:</label>
              <input type="number" class="form-control" id="barcode" required>
            </div>
            <div class="form-group">
              <label for="price">Cost Price:</label>
              <input type="number" class="form-control" id="cost_price" required>
            </div>
            <div class="form-group">
              <label for="price">Retail Price:</label>
              <input type="number" class="form-control" id="retail_price" required>
            </div>
            <div class="form-group">
              <label for="price">Category ID:</label>
              <input type="number" class="form-control" id="cat_id" required>
            </div>
            <div class="form-group">
              <label for="price">Brand ID:</label>
              <input type="number" class="form-control" id="brand_id" required>
            </div>
            
            
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="submit" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>

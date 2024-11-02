
<div >
  <h2>Product Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Product ID</th>
        <th class="text-center">Product Name</th>
        <th class="text-center">Product Description</th>
        <th class="text-center">Quantity</th>
        <th class="text-center">Barcode</th>
        <th class="text-center">Cost Price</th>
        <th class="text-center">Retail Price</th>
        <th class="text-center">Category ID</th>
        <th class="text-center">Brand ID</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from product";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>

    <tr>
      <td><?=$count?></td>
      <td><?=$row["product"]?></td>
      <td><?=$row["description"]?></td>
      <td><?=$row["quantity"]?></td>
      <td><?=$row["barcode"]?></td>
      <td><?=$row["cost_price"]?></td>
      <td><?=$row["retail_price"]?></td>
      <td><?=$row["cat_id"]?></td>
      <td><?=$row["brand_id"]?></td>    
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['id']?>')">Delete</button></td>

      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

<?php 
 echo '<form method="POST" action="../superbim/update/index.php">
    <button type="submit" class="btn btn-danger" id="submit" style"height:40px">Edit Products</button>
  </form>';
?>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Product
  </button>

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
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
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


   
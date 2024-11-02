
<div >
  <h3>Categories</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Category ID</th>
        <th class="text-center">Category Name</th>
        <th class="text-center">Status</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from category";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["category"]?></td>
      <td><?=$row["status"]?></td>   
   
      <td><button class="btn btn-danger" style="height:40px" onclick="categoryDelete('<?=$row['id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>



  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Category
</button>
<body>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Sale</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="controller/addCatController.php" method="post">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
  </button>




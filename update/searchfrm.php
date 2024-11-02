
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
 <a class="navbar-brand" href="index.php">
 <img src="bim.png" width="70" height="35" alt="BIM Supermarket">
    </a>            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           BIM <small> Stock Search</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

<form method="GET" action="">
  <input type="text" name="search" placeholder="Search">
  <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['search']) && !empty($_GET['search'])) {
  $search = $_GET['search'];
  $stmt = $db->prepare("SELECT * FROM product WHERE product LIKE ? OR description LIKE ?");
  $search = "%$search%";
  $stmt->bind_param("ss", $search, $search);
  $stmt->execute();
  $result = $stmt->get_result();
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $zz= $row['id'];
      $i= $row['product'];
      $a= $row['description'];
      $b= $row['cat_id'];
      $c= $row['brand_id'];
      $d= $row['cost_price'];
      $e= $row['retail_price'];
      $f= $row['barcode'];
      $g= $row['quantity'];
    }
  }
}

         
?>

             <div class="col-lg-12">
                  <h2>Detailed Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="index.php">
                            
                               <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="product" name="product" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="description" name="description" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="cat_id" name="cat_id" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="brand_id" name="brand_id" value="<?php echo $c; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="cost_price" name="cost_price" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="retail_price" name="retail_price" value="<?php echo $e; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="barcode" name="barcode" value="<?php echo $f; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="quantity" name="quantity" value="<?php echo $g; ?>">
                            </div>  
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>


<div >
  <h2>All Cashiers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Cashier ID</th>
        <th class="text-center">Cashier Name </th>
        <th class="text-center">Status</th>

      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from cashier";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["status"]?></td>
      </tr>
      <?php
    
            $count=$count+1;
           
        }
    }
    ?>
  </table>




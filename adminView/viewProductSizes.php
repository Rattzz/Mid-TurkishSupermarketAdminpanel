
<div>
  <h2>Sales History</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Sale ID</th>
        <th class="text-center">Sale Date</th>
        <th class="text-center">Subtotal</th>
        <th class="text-center">Payment</th>
        <th class="text-center">Balance</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from sales";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["date"]?></td>      
      <td><?=$row["subtotal"]?></td>
      <td><?=$row["pay"]?></td>
      <td><?=$row["balance"]?></td>     
    
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>


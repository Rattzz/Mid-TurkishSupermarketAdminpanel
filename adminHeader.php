<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: red;">
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assets/images/bim.png" width="320" height="160" alt="BIM Supermarket">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:white;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <?php 
            
            
            

        } ?>
    </div>  
</nav>

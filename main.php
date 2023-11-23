<?php
  class Main{
    function fetch($search){
        require('db_con.php');
        $sql = "SELECT * FROM products WHERE search ='$search'";
        $result = mysqli_query($conn, $sql);
        $total_row = mysqli_num_rows($result);
        if ($total_row == 0) {
            require('shopclues.php');
          $shopclues_ob= new shopclues();
          $shopclues_ob->fetch_details($search,$conn);
        }
    }
  }
?>
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

          require('gadgetsnow.php');
          $gadgetsnow_ob= new gadgetsnow();
          $gadgetsnow_ob->fetch_details($search,$conn);
          require('reliance.php');
          
          $reliance_ob= new reliance();
          $reliance_ob->fetch_details($search,$conn);
        }
    }
  }
?>
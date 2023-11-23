<?php
class Main
{
    function fetch($search, $website,$topn,$conn,$filter)
    {

        foreach ($website as $key) {

            if ($key == "shopclues") {
                require('websites/shopclues.php');
                $shopclues_ob = new shopclues();
                $shopclues_ob->fetch_details($search, $conn);
            }
            if ($key == "reliance") {
                require('websites/reliance.php');
                $reliance_ob = new reliance();
                $reliance_ob->fetch_details($search, $conn);
            }
            if ($key == "gadgetsnow") {
                require('websites/gadgetsnow.php');
                $gadgetsnow_ob = new gadgetsnow();
                $gadgetsnow_ob->fetch_details($search, $conn);
            }
        }
        $this->diplay_details($topn,$website,$search,$conn,$filter);
    }
    function diplay_details($topn,$website,$search,$conn,$filter)
    {
      // $sql="SELECT * FROM products WHERE search='$search' website IN('.implode(',',$website).') LIMIT '$topn'";
      $sql = "SELECT * FROM products WHERE search='$search' AND website IN ('" . implode("','", $website) . "')";

      if($filter =="highest_price"){
        $sql .= " ORDER BY price desc";
      }else if($filter == "lowest_price"){
        $sql .= " ORDER BY price";
      }else if($filter == "rating"){
        $sql .= " ORDER BY rating desc";
      }else if($filter == "review"){
        $sql .= " ORDER BY review desc";
      }
      $sql .= " LIMIT $topn";
      $result = mysqli_query($conn, $sql);
       $total_row = mysqli_num_rows($result);
       $json_array=array();
       while( $row = mysqli_fetch_assoc($result)) {
           $json_array[]=$row;
       }
       echo json_encode($json_array,JSON_PRETTY_PRINT);
    }
}
?>
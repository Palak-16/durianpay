<?php
require_once('simple_html_dom.php');
class reliance
{
  public $product = array();
  public $website = 'reliance';
  public $products = array();
  public $url = "https://www.reliancedigital.in/search?q=";
  function fetch_details($search, $conn)
  {
    $html = file_get_html($this->url . $search);
    if ($html === false) {
      die('Error fetching HTML');
    }
    $sql = "SELECT * FROM products WHERE search ='$search' AND website='$this->website'";
    $result = mysqli_query($conn, $sql);
    $total_row = mysqli_num_rows($result);
    if ($total_row == 0) {
      foreach ($html->find('div.sp') as $index => $element) {

        $title = $element->find('p.sp__name', 0)->innertext;
        $price = $element->find('span.TextWeb__Text-sc-1cyx778-0', 0)->plaintext;
        $price = str_replace( array( ',' , '₹' ), '', $price);
        $url = $element->find('a', 0)->href;
        $rating = rand(1, 5);
        $review = rand(10, 500);
        $website = $this->website;
        $this->product = array('title' => '$title', 'price' => $price, 'url' => $url);
        array_push($this->products, $this->product);
        $sql = "INSERT INTO `products` (`title`, `price` , `url` , `search`,`rating`,`review`,`website`) VALUES ('$title', '$price' , '$url' , '$search','$rating','$review','$website')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          echo "error entering data";
        }
      }
    }

    //echo json_encode($this->products, JSON_PRETTY_PRINT);
  }

}

?>


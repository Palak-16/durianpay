<?php
require_once('./vendor/simple_html_dom.php');
class gadgetsnow
{
  public $product = array();
  public $products = array();
  public $website = "gadgetsnow";
  public $url = "https://shop.gadgetsnow.com/mtkeywordsearch?SEARCH_STRING=";
  function fetch_details($search, $conn)
  {
    echo "gadgets".time();
    $html = file_get_html($this->url . $search);
    if ($html === false) {
      die('Error fetching HTML');
    }
    $sql = "SELECT * FROM products WHERE search ='$search' AND website='$this->website'";
    $result = mysqli_query($conn, $sql);
    $total_row = mysqli_num_rows($result);
    if ($total_row == 0) {
      
      foreach ($html->find('div.product-wrap') as $index => $element) {
        $title = $element->find('span.product-name', 0)->innertext;
        $price = $element->find('span.offerprice', 0)->plaintext;
        $price = str_replace( array( ',' , '`', ' '), '', $price);
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


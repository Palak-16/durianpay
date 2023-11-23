<?php
require('simple_html_dom.php');
class shopclues
{
  public $product = array();
  public $products = array();
  public $url = "https://www.shopclues.com/search?q=";
  function fetch_details($search, $conn)
  {
    $html = file_get_html($this->url . $search);
    if ($html === false) {
      die('Error fetching HTML');
    }
    foreach ($html->find('div.column') as $index => $element) {
      
      $title = $element->find('.extraBadges+h2', 0)->innertext;
      $price = $element->find('span.p_price', 0)->innertext;
      $url = $element->find('a', 0)->href;
      $rating = rand(1, 5);
      $review = rand(10, 500);
      $this->product = array('title' => '$title', 'price' => $price, 'url' => $url);
      array_push($this->products, $this->product);
      $sql = "INSERT INTO `products` (`title`, `price` , `url` , `search`,`rating`,`review`) VALUES ('$title', '$price' , '$url' , '$search','$rating','$review')";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        echo "error entering data";
      }
    }

    echo json_encode($this->products, JSON_PRETTY_PRINT);
  }

}

?>


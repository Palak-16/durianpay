<?php
 require('simple_html_dom.php');
class shopclues{ 
  public $product=array();
  public $products= array();
  public $url="https://www.shopclues.com/search?q=";
 function fetch_details($search)
 {

  $html= file_get_html($this->url.$search);

  if ($html === false) {
      die('Error fetching HTML');
  }
  foreach($html->find('div.column') as $index => $element) {
     // $this->product['image']= $element->find('div.img_section',0)->innertext;
      $this->product["title"]=$element->find('.extraBadges+h2',0)->innertext;
      $this->product["price"]= $element->find('span.p_price',0)->innertext;
      $this->product["url"]= $element->find('a',0)->href;
      array_push($this->products, $this->product);   
  }
    echo json_encode($this->products,JSON_PRETTY_PRINT);  
 }
 
}

?>


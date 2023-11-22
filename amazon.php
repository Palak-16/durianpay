<?php
 require('simple_html_dom.php');
$html= file_get_html("https://www.amazon.in/s?k=mobile");

if ($html === false) {
    die('Error fetching HTML');
}
echo '
<div class="w3-col l8">
<div class="w3-card-2">
  <table class="w3-table w3-striped w3-bordered w3-card-4">
  <thead>
  <tr class="w3-blue">
    <th>IMAGE</th>
    <th>PRODUCT</th>
    <th>PRICE</th>
    <th>BUY HERE</th>
  </tr>
  </thead>
';
foreach($html->find('div.a-section') as $index => $element) {
    $img= $element->find('div.s-product-image-container',0)->innertext;
    $name=$element->find('h2.a-size-mini',0)->innertext;
    $price= $element->find('span.a_price',0)->innertext;
    // $buy= $element->find('.column+a',0)->innerhtml;
    echo '
    <tr>
      <td>'.$img.'</td>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td><a href="'.$img.'">Buy</a></td>
    </tr>

    ';
}
// $html= file_get_html('https://www.google.com/');
// echo $html->find('title',0)->plaintext;
?>


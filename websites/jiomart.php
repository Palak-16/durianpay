<?php
 require('./vendor/simple_html_dom.php');
$html= file_get_html("https://www.jiomart.com/search/phone");

if ($html === false) {
    die('Error fetching HTML');
}
echo '
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
$base_url="https://www.jiomart.com/";
foreach($html->find('li.ais-InfiniteHits-item') as $index => $element) {
    $img= $element->find('div.plp-card-image',0)->innertext;
    $name=$element->find('div.plp-card-details-name',0)->innertext;
    $price= $element->find('span.jm-heading-xxs',0)->innertext;
    $buy= $base_url.$name;
    echo '
    <tr>
      <td>'.$img.'</td>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td><a href="'.$buy.'">Buy</a></td>
    </tr>

    ';
}
// $html= file_get_html('https://www.google.com/');
// echo $html->find('title',0)->plaintext;
?>


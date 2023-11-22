<?php
 require('simple_html_dom.php');
$html= file_get_html("https://vijaysales.com/search/phone");

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
$base_url="https://vijaysales.com/";
foreach($html->find('div.col5_2') as $index => $element) {
    $img= $element->find('div.plp-card-image',0)->innertext;
    $name=$element->find('h2.Dynamic-Bucket-ProductName',0)->innertext;
    $price= $element->find('span.jm-heading-xxs',0)->innertext;
    $buy= $element->find('span.jm-heading-xxs',0)->getAttribute("");

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


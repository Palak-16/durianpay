<?php
 require('simple_html_dom.php');
$html= file_get_html("https://www.reliancedigital.in/search?q=phone");

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
$base_url="https://www.reliancedigital.in/";
foreach($html->find('div.sp') as $index => $element) {
    $img= $element->find('img.img-responsive',0)->innertext;
    $name=$element->find('p.sp__name',0)->innertext;
    $price= $element->find('span.TextWeb__Text-sc-1cyx778-0',0)->innertext;
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


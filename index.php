<!DOCTYPE html>
<html>
<title>Price Compare Site</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<header class="w3-container w3-teal">
  <h1>Price Compare Site</h1>
</header>

<form class="w3-container w3-card-4" action="index.php" method="get">
 <p>
 <input class="w3-input" name="searchdata" type="text" required>
 <label class="w3-label w3-validate">Search Product</label></p>
 <p>
 <input id="search" class="w3-input" type="submit" value="Search">
</form>

<?php
   if(isset($_GET['searchdata']))
   {
    $search = $_GET['searchdata'];
    $search = strtolower($search);
    $search = str_replace(" ","+",$search);
//     echo $search;
require('shopclues.php');
   $shopclues_ob= new shopclues();
    $shopclues_ob->fetch_details($search);
   }
?>

</body>
</html>
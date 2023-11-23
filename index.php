<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form action="index.php"  method="post">
 
<label class="">Search Product</label>
<input class="" name="searchdata" type="text" maxlength="20" required><br>
 
<label >Filter:</label>
<select name="filter">
  <option value="none">none</option>
  <option value="highest price">highest price</option>
  <option value="lowest price">lowest price</option>
  <option value="review">review</option>
  <option value="rating">rating</option>
</select><br>
<label class="">Top n :</label>
<input type="number" name="topn" min="1" max="5"><br>

<label >Comparison websites:</label><br>
<input type="checkbox" name="websites[]" value="shopclues" checked>
<label for="shopclues"> shopclues</label><br>
<input type="checkbox" name="websites[]" value="reliance" checked>
<label for="reliance">reliance</label><br>
<input type="checkbox" name="websites[]" value="gadgets now" checked>
<label for="gadgets now"> gadgets now</label><br>
<br>
 <input id="search" class="" type="submit" value="Search">
</form>
</body>
</html>

<?php
   $website = $_POST['websites'];
   
     $N = count($website);
     for($i=0; $i < $N; $i++)
     {
       echo($website[$i] . " ");
     }
?>

<?php
require('db_con.php');
if (isset($_GET['searchdata'])) {
   $search = $_GET['searchdata'];
   $search = strtolower($search);
   $search = str_replace(" ", "+", $search);

   require('main.php');
   $main_ob = new main();
   $main_ob->fetch($search);
}
?>

</body>
</html>
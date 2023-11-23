
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form action="api.php"  method="get">
 
<label class="">Search Product</label>
<input class="" name="searchdata" type="text" maxlength="20" required><br>
 
<label >Filter:</label>
<select name="filter">
  <option value="none">none</option>
  <option value="highest_price">highest price</option>
  <option value="lowest_price">lowest price</option>
  <option value="review">review</option>
  <option value="rating">rating</option>
</select><br>
<label class="">Top n :</label>
<input type="number" name="topn" value="3" max="5"><br>

<label >Comparison websites:</label><br>
<input type="checkbox" name="websites[]" value="shopclues" checked>
<label for="shopclues"> shopclues</label><br>
<input type="checkbox" name="websites[]" value="reliance" checked>
<label for="reliance">reliance</label><br>
<input type="checkbox" name="websites[]" value="gadgetsnow" checked>
<label for="gadgetsnow"> gadgets now</label><br>
<br>
 <input id="search" class="" type="submit" value="Search">
</form>
</body>
</html>

</body>
</html>
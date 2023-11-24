
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <style>
      .inputs_container{
         margin-left: 35%;
         margin-top: 7%;
      }
      .fields{
         margin-top: 2%;
      }
      .labels{
         font-style:oblique;
         font-weight:600;
         font-size:large;
      }
   </style>
</head>
<body>
   <div class="">
     
      <form class="" action="api_controller.php"  method="get">

         <div class="inputs_container">

            <div class="fields">
               <h3>Price Comparison System</h3>
            </div>
            
            <div class="fields">
               <label class="labels">Search Product:</label><br>
               <input class="" name="searchdata" type="text" maxlength="20" placeholder="product name" required><br>
            </div>
            
            <div class="fields">
               <label class="labels">Filter:</label><br>
               <select class="" name="filter">
                  <option value="none">Select from the options</option>
                  <option value="highest_price">highest price</option>
                  <option value="lowest_price">lowest price</option>
                  <option value="review">review</option>
                  <option value="rating">rating</option>
               </select><br>
            </div>
            
            <div class="fields">
               <label class="labels">Top n :</label><br>
               <input class="" type="number" name="topn" value="3"><br>
            </div>
            
            <div class="fields">
               <label class="labels">Comparison websites:</label><br>
               <input type="checkbox" name="websites[]" value="shopclues" checked>
               <label for="shopclues"> shopclues</label><br>
               <input type="checkbox" name="websites[]" value="reliance" checked>
               <label for="reliance">reliance</label><br>
               <input type="checkbox" name="websites[]" value="gadgetsnow" checked>
               <label for="gadgetsnow"> gadgets now</label><br>
            </div>
            
            <div class="fields">
               <input id="search" class="" type="submit" value="Search">
            </div>

         </div>
      </form>
   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

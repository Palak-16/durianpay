<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require('db_con.php');


if (isset($_GET['searchdata'])) {
   $search = $_GET['searchdata'];
   $search = strtolower($search);
   $search = str_replace(" ", "+", $search);
   $website = $_GET['websites'];
   $topn = $_GET['topn'] ;
   $filter = $_GET['filter'] ;

   require('main.php');
   $main_ob = new main();
   $main_ob->fetch($search,$website,$topn,$conn,$filter);
}
?>
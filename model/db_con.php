<?php



  require("./config/config.php");
  try {
      $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

      if (!$conn) {
          throw new Exception("Could not connect to database.");   
      }
  } catch (Exception $e) {
      throw new Exception($e->getMessage());   
  }	



?>
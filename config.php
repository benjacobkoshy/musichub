<?php

  session_start();

  $host = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "music_hub";


  $conn = mysqli_connect($host, $db_username, $db_password, $db_name);
 
  if(!$conn){
    echo "Database could not be accssesd".mysqli_connect_error();
  }

?>
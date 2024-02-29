<?php

  require_once('../../private/initialize.php'); 

  if(is_post_request()) 
  {
    $salamander_name = $_POST['name'] ?? '';
    echo "Salamander name: " . $salamander_name;
  }
  else
    redirect_to(url_For('/salamanders/new.php'));

?>

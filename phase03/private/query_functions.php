<?php

function find_all_salamanders() {

  $db = db_connect();
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY name ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result; 
}

?>

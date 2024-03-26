<?php 

require_once('../../private/initialize.php');

if(is_post_request()) {
  $salamander = [];
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_salamander($salamander);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/salamanders/show.php?id=' . $new_id));
  }
  else {
    $errors = $result;
  }
}
else {

}

?>

<?php

$pageTitle = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');

?>

<p><a href="<?php echo url_For('/salamanders/index.php'); ?>">&laquo; Back to Salamanders</a></p>

<h1>Create Salamander</h1>

<?php echo display_errors($errors); ?>

<form action="<?php echo url_for('/salamanders/new.php'); ?>" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <p>Habitat:<br>
  <textarea rows="4" cols="50" id="habitat" name="habitat"></textarea></p>

  <p>Description:<br>
  <textarea rows="4" cols="50" id="description" name="description"></textarea></p>

  <input type="submit" value="Create Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

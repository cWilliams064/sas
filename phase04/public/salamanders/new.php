<?php 

  require_once('../../private/initialize.php');

?>

<?php 
require_once('../../private/initialize.php');

$pageTitle = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');
?>

<p><a href="<?php echo url_For('/salamanders/index.php'); ?>">&laquo; Back to Salamanders</a></p>

<h1>Create Salamander</h1>

<form action="<?php  echo url_for('/salamanders/create.php'); ?>" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <p>Habitat:<br>
  <textarea rows="4" cols="50" id="habitat" name="habitat"></textarea></p>

  <p>Description:<br>
  <textarea rows="4" cols="50" id="description" name="description"></textarea></p>

  <input type="submit" value="Create Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

<?php 

  require_once('../../private/initialize.php');

  if(!isset($_GET['id'])) 
  {
    redirect_to(url_for('/salamanders/index.php'));
  }
  $id = $_GET['id'];

  if(is_post_request()) 
  {
    $salamander_name = $_POST['name'] ?? '';
    echo "Salamander name: " . $salamander_name;
  } 
  else
  //
?>

<?php 
require_once('../../private/initialize.php');

$pageTitle = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');
?>

<p><a href="<?php echo url_For('/salamanders/index.php'); ?>">&laquo; Back to List</a></p>

<h1>Edit Salamander</h1>

<form action="<?php echo url_For('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <input type="submit" value="Edit Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

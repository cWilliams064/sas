<?php 

  require_once('../../private/initialize.php');

  if(!isset($_GET['id'])) 
  {
    redirect_to(url_for('salamanders/index.php'));
  }
  $id = $_GET['id'];

  if(is_post_request()) 
  {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';

    $result = update_salamander($salamander);
    redirect_to(url_for('salamanders/show.php?id=' . $id));
  } 
  else 
  {
    $salamander = find_salamander_by_id($id);
  }
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
  <input type="text" id="name" name="name" value="<?php echo h($salamander['name']) ?>"><br>

  <p>Habitat:<br>
  <textarea rows="4" cols="50" id="habitat" name="habitat"><?php echo h($salamander['habitat']) ?></textarea></p>

  <p>Description:<br>
  <textarea rows="4" cols="50" id="description" name="description"><?php echo h($salamander['description']) ?></textarea></p>

  <input type="submit" value="Edit Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>


<?php 

  require_once('../../private/initialize.php');

  $test = $_GET['test'] ?? '';

  if($test == '404')
    error_404();
  elseif($test == '500')
    error_500();
  elseif($test == 'redirect')
  {
    redirect_to(url_for('/salamanders/index.php'));
  }
?>

<?php 
require_once('../../private/initialize.php');

$pageTitle = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');
?>

<p><a href="<?php echo url_For('/salamanders/index.php'); ?>">&laquo; Back to List</a></p>

<h1>Create Salamander</h1>

<form action="<?php  echo url_for('/salamanders/create.php'); ?>" method="post">
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <input type="submit" value="Create Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

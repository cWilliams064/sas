<?php 
require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1';

$salamander = find_salamander_by_id($id);

$pageTitle = 'Salamander Details'; 
include(SHARED_PATH . '/salamander-header.php'); 
?>

<h2>Salamander Details</h2>
<p><b>ID:</b> <?php echo h($salamander['id']) ?></p>
<p><b>Name:</b> <?php echo h($salamander['name']) ?></p>
<p><b>Habitat:</b><br>
      <?php echo h($salamander['habitat']) ?></p>
<p><b>Description:</b><br>
      <?php echo h($salamander ['description']) ?></p>
<p><a href="<?php echo url_For('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

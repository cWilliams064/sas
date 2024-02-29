<?php require_once('../../private/initialize.php'); ?>

<!-- fancy if...else
if the id is not empty assign it the value from $_GET['id']
else $id = 1
or use the non-coalesing operator -->
<?php $id = $_GET['id'] ?? '1'; ?>

<?php $pageTitle = 'Salamander Details'; ?>

<!-- include the shared path to the header -->
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<h2>Salamander Details</h2>
<!-- <p> Page ID: Use the h() function and pass in the id/p> -->
<p>Page ID: <?php echo h(u($id)) ?></p>
<p><a href="<?php echo url_For('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<!-- Use the shared path to the salamander footer. -->
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

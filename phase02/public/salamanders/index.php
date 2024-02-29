<!-- require initialize.php -->
<?php require_once('../../private/initialize.php'); ?>

<!-- 
  Write a salamanders array with the following
id=1, salamanderName = Red-Legged Salamander
id=2, salamanderName = Pigeon Mountain Salamander
id=3', salamanderName = ZigZag Salamander
id=4,  salamanderName= Slimy Salamander 
-->
<?php
  $salamanders = [
    ['id' => '1', 'name' => 'Red-Legged Salamander'],
    ['id' => '2', 'name' => 'Pigeon Mountain Salamander'],
    ['id' => '3', 'name' => 'ZigZag Salamander'],
    ['id' => '4', 'name' => 'Slimy Salamander']
  ];
?>

<!-- Add the pageTitle -->
<?php $pageTitle = 'Salamanders'; ?>
<!-- Include a shared path to the salamander header -->
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<h1>Salamanders Main Page</h1>

  <a href="<?php echo url_for('/salamanders/new.php') ?>">Create a Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <!-- <td>Display the salamander id</td> -->
    	    <!-- <td>Display the salamander name</td> -->
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><?php echo h($salamander['id']); ?></td>
          <td><?php echo h($salamander['name']); ?></td>
          <td><a href="<?php echo url_For('/salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a href="<?php echo url_for('/salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<!-- add the shared path to the salamander footer -->

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>


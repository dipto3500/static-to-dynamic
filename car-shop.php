<?php 
/* template name: Meta box */


get_header();
?>

<?php
$cars = carbon_get_the_post_meta("cars");
echo "<pre>";
echo "</pre>";
?>

<body class="table_style">
<!-- partial:index.partial.html -->
<h2 class="big-heading">Cars Stock</h2>
<div class="table">
  <h2 class="heading">
    Manufacture
  </h2>
  <div class="block">
  	<?php foreach ($cars as $car): ?>
  		
  <p><?php echo $car['manufactue'];?>
    </p>
      	<?php endforeach ?>


</div>
</div>

<div class="table">
  <h2 class="heading">
	Manufacturer
	  </h2>
  <div class="block">
  	  	<?php foreach ($cars as $car): ?>

  <p><?php echo $car['model'];?>
    
 </p>
 <?php endforeach ?>

</div>

</div>


<div class="table">
  <h2 class="heading">
    quentity
  </h2>
  <div class="block">
  <?php foreach ($cars as $car): ?>

  <p><?php echo $car['quentity'];?>    
 </p>
  <?php endforeach ?>

</div>



</div>

<!-- partial -->
  
</body>




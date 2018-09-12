<?php
require_once("../resources/config.php");

?>
<?php
require_once("cart.php");

?>
<?php
include(TEMPLATE_FRONT . DS ."header.php");

?>

    <!-- Page Content -->
    <div class="container">
 
<?php
		echo "<h4> Thankyou for Shoping </h4>";
		
		 
			
			process_transaction();
			
			
		
		
		
	  	
		
		
		?>
<!-- /.row --> 




       <?php
include(TEMPLATE_FRONT . DS ."footer.php");

?>

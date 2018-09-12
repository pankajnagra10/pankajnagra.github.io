<?php
require_once("../resources/config.php");

?>
<?php
include(TEMPLATE_FRONT . DS ."header.php");

?>
<!-- Page Content -->
<div class="container">

	<!-- Jumbotron Header -->
	<header class="jumbotron hero-spacer">
		<h4>A Warm Welcome!</h4>
	</header>

	<hr>

	<!-- Title -->
	<div class="row">
		<div class="col-lg-12">
			<h3>Latest product</h3>
		</div>
	</div>
	<!-- /.row -->

	<!-- Page Features -->
	<div class="row text-center">

	<?php	get_product_in_cat_page();

?>





	</div>

	<!-- Footer -->
	<?php
include(TEMPLATE_FRONT . DS ."footer.php");

?>

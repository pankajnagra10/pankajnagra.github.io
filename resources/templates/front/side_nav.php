
<div class="col-md-3">
<p class="lead">Bake-N-Cake</p>
<div class="list-group">
<?php
 /*
$query = "SELECT * FROM categories";
$send_query = mysqli_query($connection, $query);
if(!$send_query){
	die("Query faild" . mysqli_error($connection));

}
while ($row = mysqli_fetch_array($send_query)){
	echo "<a href='' class='list-group-item'>{$row['cat_title']}</a>";
}
*/
	get_categories();
?>


    
</div>
</div>



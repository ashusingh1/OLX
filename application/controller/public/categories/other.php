<?php require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -40).'library/initialize.php'; ?>
<?php  
	$sql = "SELECT * FROM products ";
	$sql .= "WHERE category = 'Other'";
	$products = Product::find_by_sql($sql);
?>
<?php include($dir_categories.'other.php'); ?>
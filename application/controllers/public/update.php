<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_GET['name'])) {
		$name = $_GET['name'];
		$page = $_GET['page'];
		$domain = Domains::find_by_name($name);
		$domain->hits = $domain->hits + 1;
		$domain->save();
		$hit = Hits::make($domain->id, $page);
		$hit->save();
	}
?>

<?php //include($dir_public.'update.php'); ?>


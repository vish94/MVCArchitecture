<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_GET['id'])) {
		$domain_id = $_GET['id'];
		$hits = Hits::count_distinct_by_domain_id($domain_id);
		$domain = Domains::find_by_id($domain_id);
	}
?>

<?php include($dir_public.'unique.php'); ?>


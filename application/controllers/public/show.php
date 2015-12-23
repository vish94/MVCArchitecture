<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$domain = Domains::find_by_id($id);
		$hits = Hits::find_by_domain_id($domain->id);
		foreach($hits as $hit) {
			$hit->delete();
		}
		$domain->delete();
	}

	$domains = Domains::find_all();

?>

<?php include($dir_public.'show.php'); ?>


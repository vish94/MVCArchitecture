<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_GET['id'])) {
		$domain_id = $_GET['id'];
		$limit = 0;
		if(isset($_GET['limit'])) {
			if($_GET['limit']=='true') {
				$hits = Hits::find_by_domain_id_limit_100($domain_id);
				$limit = 1;
			} else 
				$hits = Hits::find_by_domain_id($domain_id);
		} else 
			$hits = Hits::find_by_domain_id($domain_id);
	}


?>

<?php include($dir_public.'hits.php'); ?>


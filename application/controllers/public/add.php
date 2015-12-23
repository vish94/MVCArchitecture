<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_POST['submit'])) {
		if(($_POST['url'])!="") {
			$name = $_POST['url'];
			if(strstr($name, 'http://')) {
				$name = str_replace('http://', '', $name);
			}
			$domain = Domains::make($name);
			if($domain->save()) {
				$status = 1;
			} else {
				$status = 0;
			}
		}
	}
?>

<?php include($dir_public.'add.php'); ?>


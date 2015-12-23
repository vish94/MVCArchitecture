<?php require_once($dir_public_requires.'header.php'); ?>

<div id="content">
	<?php 
		if($limit==1) 
			$heading = "Recent 100 Hits";
		else
			$heading = "All hits";
	?>
	<h2> <?php echo $heading ?> </h2>
	<ul>
	<li><a href="<?php echo $dir_site.'unique/?id='.$domain_id?>"> Unique Pages </a></li>
	<li><a href="<?php echo $dir_site.'hits/?id='.$domain_id.'&limit=false'?>"> Show All </a></li>
	</ul>
	<table>
		<tr>
			<td><b>Page</b></td>
			<td><b>DateTime</b></td>
		</tr>
		<?php
			$i=1;
			foreach($hits as $hit) {
				echo '<tr>';
				echo '<td>'.$hit->page.'</td>';
				echo '<td>'.$hit->timestamp.'</td>';
				echo '</tr>';
				$i++;
			}
		?>
	</table>
	
</div>

<?php require_once($dir_public_requires.'footer.php'); ?>
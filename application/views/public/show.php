<?php require_once($dir_public_requires.'header.php'); ?>

<div id="content">
	<h2> All URLs </h2>
	<table>
		<tr>
			<td><b>No.</b></td>
			<td><b>Name</b></td>
			<td><b>Hits</b></td>
			<td><b>Action</b></td>
		</tr>
		<?php
			$i=1;
			foreach($domains as $domain) {
				echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td><a href="'.$dir_site.'hits/?id='.$domain->id.'&limit=true">'.$domain->name.'</a></td>';
				echo '<td>'.$domain->hits.'</td>';
				echo '<td><a href="'.$dir_site.'show/?delete='.$domain->id.'">Delete</a></td>';
				echo '</tr>';
				$i++;
			}
		?>
	</table>
	
</div>

<?php require_once($dir_public_requires.'footer.php'); ?>
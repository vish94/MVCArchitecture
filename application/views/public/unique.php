<?php require_once($dir_public_requires.'header.php'); ?>

<div id="content">
	<h2> Unique URLS </h2>
	<h3> <?php echo $domain->name ?></h3>
	<table>
		<tr>
			<td><b>No.</b></td>
			<td><b>Page</b></td>
			<td><b>Hits</b></td>
		</tr>
		<?php
			$i=1;
			while($row = mysqli_fetch_array($hits)) {
				echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td>'.$row['page'].'</td>';
				echo '<td>'.$row['COUNTS'].'</td>';
				echo '</tr>';
				$i++;
			}
		?>
	</table>
	
</div>

<?php require_once($dir_public_requires.'footer.php'); ?>
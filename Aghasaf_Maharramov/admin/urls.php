<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-urls.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Urls</a>

				<h1>Urls</h1>
				<p>This table includes <?php echo counting("urls", "id");?> urls.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Instagram</th>
			<th>Facebook</th>
			<th>Linkedin</th>
			<th>Id</th>
			<th>CVdownload</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$urls = getAll("urls");
				if($urls) foreach ($urls as $urlss):
					?>
					<tr>
		<td><?php echo $urlss['Instagram']?></td>
		<td><?php echo $urlss['Facebook']?></td>
		<td><?php echo $urlss['Linkedin']?></td>
		<td><?php echo $urlss['id']?></td>
		<td><?php echo $urlss['CVdownload']?></td>


						<td><a href="edit-urls.php?act=edit&id=<?php echo $urlss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $urlss['id']?>&cat=urls" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
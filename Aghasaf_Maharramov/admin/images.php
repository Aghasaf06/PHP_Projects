<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-images.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Images</a>

				<h1>Images</h1>
				<p>This table includes <?php echo counting("images", "id");?> images.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>ImageName</th>
			<th>ImageLocation</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$images = getAll("images");
				if($images) foreach ($images as $imagess):
					?>
					<tr>
		<td><?php echo $imagess['id']?></td>
		<td><?php echo $imagess['imageName']?></td>
		<td><?php echo $imagess['imageLocation']?></td>


						<td><a href="edit-images.php?act=edit&id=<?php echo $imagess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $imagess['id']?>&cat=images" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
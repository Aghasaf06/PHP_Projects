<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-languages.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Languages</a>

				<h1>Languages</h1>
				<p>This table includes <?php echo counting("languages", "id");?> languages.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Language</th>
			<th>Percent</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$languages = getAll("languages");
				if($languages) foreach ($languages as $languagess):
					?>
					<tr>
		<td><?php echo $languagess['id']?></td>
		<td><?php echo $languagess['language']?></td>
		<td><?php echo $languagess['percent']?></td>


						<td><a href="edit-languages.php?act=edit&id=<?php echo $languagess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $languagess['id']?>&cat=languages" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-eduexp.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Eduexp</a>

				<h1>Eduexp</h1>
				<p>This table includes <?php echo counting("eduexp", "id");?> eduexp.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Title</th>
			<th>Loc</th>
			<th>Interval</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$eduexp = getAll("eduexp");
				if($eduexp) foreach ($eduexp as $eduexps):
					?>
					<tr>
		<td><?php echo $eduexps['id']?></td>
		<td><?php echo $eduexps['title']?></td>
		<td><?php echo $eduexps['loc']?></td>
		<td><?php echo $eduexps['interval']?></td>


						<td><a href="edit-eduexp.php?act=edit&id=<?php echo $eduexps['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $eduexps['id']?>&cat=eduexp" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
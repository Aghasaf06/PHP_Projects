<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-main.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Main</a>

				<h1>Main</h1>
				<p>This table includes <?php echo counting("main", "id");?> main.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Name</th>
			<th>Surname</th>
			<th>NameSurname</th>
			<th>Degree</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Birthday</th>
			<th>Experience</th>
			<th>Email</th>
			<th>Id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$main = getAll("main");
				if($main) foreach ($main as $mains):
					?>
					<tr>
		<td><?php echo $mains['name']?></td>
		<td><?php echo $mains['surname']?></td>
		<td><?php echo $mains['nameSurname']?></td>
		<td><?php echo $mains['degree']?></td>
		<td><?php echo $mains['phone']?></td>
		<td><?php echo $mains['address']?></td>
		<td><?php echo $mains['birthday']?></td>
		<td><?php echo $mains['experience']?></td>
		<td><?php echo $mains['email']?></td>
		<td><?php echo $mains['id']?></td>


						<td><a href="edit-main.php?act=edit&id=<?php echo $mains['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $mains['id']?>&cat=main" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
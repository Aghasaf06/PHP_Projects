<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="admins.php">Admins</a></td>
					<td><?=counting("admins", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="eduexp.php">Eduexp</a></td>
					<td><?=counting("eduexp", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="images.php">Images</a></td>
					<td><?=counting("images", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="languages.php">Languages</a></td>
					<td><?=counting("languages", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="main.php">Main</a></td>
					<td><?=counting("main", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="skills.php">Skills</a></td>
					<td><?=counting("skills", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="urls.php">Urls</a></td>
					<td><?=counting("urls", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			
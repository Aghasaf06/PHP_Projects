<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$urls = getById("urls", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Urls</legend>
						<input name="cat" type="hidden" value="urls">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Instagram</label>
							<input class="form-control" type="text" name="Instagram" value="<?=$urls['Instagram']?>" /><br>
							
							<label>Facebook</label>
							<input class="form-control" type="text" name="Facebook" value="<?=$urls['Facebook']?>" /><br>
							
							<label>Linkedin</label>
							<input class="form-control" type="text" name="Linkedin" value="<?=$urls['Linkedin']?>" /><br>
							
							<label>CVdownload</label>
							<input class="form-control" type="text" name="CVdownload" value="<?=$urls['CVdownload']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
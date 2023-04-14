<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$images = getById("images", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Images</legend>
						<input name="cat" type="hidden" value="images">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>ImageName</label>
							<input class="form-control" type="text" name="imageName" value="<?=$images['imageName']?>" /><br>
							
							<label>ImageLocation</label>
							<input class="form-control" type="text" name="imageLocation" value="<?=$images['imageLocation']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
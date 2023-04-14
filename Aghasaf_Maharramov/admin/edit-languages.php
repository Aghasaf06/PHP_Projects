<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$languages = getById("languages", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Languages</legend>
						<input name="cat" type="hidden" value="languages">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Language</label>
							<input class="form-control" type="text" name="language" value="<?=$languages['language']?>" /><br>
							
							<label>Percent</label>
							<input class="form-control" type="text" name="percent" value="<?=$languages['percent']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
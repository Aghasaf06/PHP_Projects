<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$eduexp = getById("eduexp", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Eduexp</legend>
						<input name="cat" type="hidden" value="eduexp">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Title</label>
							<input class="form-control" type="text" name="title" value="<?=$eduexp['title']?>" /><br>
							
							<label>Loc</label>
							<input class="form-control" type="text" name="loc" value="<?=$eduexp['loc']?>" /><br>
							
							<label>Interval</label>
							<input class="form-control" type="text" name="interval" value="<?=$eduexp['interval']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
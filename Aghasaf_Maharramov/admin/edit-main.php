<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$main = getById("main", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Main</legend>
						<input name="cat" type="hidden" value="main">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$main['name']?>" /><br>
							
							<label>Surname</label>
							<input class="form-control" type="text" name="surname" value="<?=$main['surname']?>" /><br>
							
							<label>NameSurname</label>
							<input class="form-control" type="text" name="nameSurname" value="<?=$main['nameSurname']?>" /><br>
							
							<label>Degree</label>
							<input class="form-control" type="text" name="degree" value="<?=$main['degree']?>" /><br>
							
							<label>Phone</label>
							<input class="form-control" type="text" name="phone" value="<?=$main['phone']?>" /><br>
							
							<label>Address</label>
							<input class="form-control" type="text" name="address" value="<?=$main['address']?>" /><br>
							
							<label>Birthday</label>
							<input class="form-control" type="text" name="birthday" value="<?=$main['birthday']?>" /><br>
							
							<label>Experience</label>
							<input class="form-control" type="text" name="experience" value="<?=$main['experience']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$main['email']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
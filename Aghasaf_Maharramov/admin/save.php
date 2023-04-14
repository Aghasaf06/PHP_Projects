<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "admins" || $cat_get == "admins") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `admins` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `admins` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `admins` WHERE id = '".$id_get."' ");
					}
					header("location:"."admins.php");
				}
				
				if($cat == "eduexp" || $cat_get == "eduexp") {
					$title = addslashes(htmlentities($_POST["title"], ENT_QUOTES));
$loc = addslashes(htmlentities($_POST["loc"], ENT_QUOTES));
$interval = addslashes(htmlentities($_POST["interval"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `eduexp` (  `title` , `loc` , `interval` ) VALUES ( '".$title."' , '".$loc."' , '".$interval."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `eduexp` SET  `title` =  '".$title."' , `loc` =  '".$loc."' , `interval` =  '".$interval."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `eduexp` WHERE id = '".$id_get."' ");
					}
					header("location:"."eduexp.php");
				}
				
				if($cat == "images" || $cat_get == "images") {
					$imageName = addslashes(htmlentities($_POST["imageName"], ENT_QUOTES));
$imageLocation = addslashes(htmlentities($_POST["imageLocation"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `images` (  `imageName` , `imageLocation` ) VALUES ( '".$imageName."' , '".$imageLocation."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `images` SET  `imageName` =  '".$imageName."' , `imageLocation` =  '".$imageLocation."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `images` WHERE id = '".$id_get."' ");
					}
					header("location:"."images.php");
				}
				
				if($cat == "languages" || $cat_get == "languages") {
					$language = addslashes(htmlentities($_POST["language"], ENT_QUOTES));
$percent = addslashes(htmlentities($_POST["percent"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `languages` (  `language` , `percent` ) VALUES ( '".$language."' , '".$percent."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `languages` SET  `language` =  '".$language."' , `percent` =  '".$percent."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `languages` WHERE id = '".$id_get."' ");
					}
					header("location:"."languages.php");
				}
				
				if($cat == "main" || $cat_get == "main") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$surname = addslashes(htmlentities($_POST["surname"], ENT_QUOTES));
$nameSurname = addslashes(htmlentities($_POST["nameSurname"], ENT_QUOTES));
$degree = addslashes(htmlentities($_POST["degree"], ENT_QUOTES));
$phone = addslashes(htmlentities($_POST["phone"], ENT_QUOTES));
$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
$birthday = addslashes(htmlentities($_POST["birthday"], ENT_QUOTES));
$experience = addslashes(htmlentities($_POST["experience"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `main` (  `name` , `surname` , `nameSurname` , `degree` , `phone` , `address` , `birthday` , `experience` , `email` ) VALUES ( '".$name."' , '".$surname."' , '".$nameSurname."' , '".$degree."' , '".$phone."' , '".$address."' , '".$birthday."' , '".$experience."' , '".$email."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `main` SET  `name` =  '".$name."' , `surname` =  '".$surname."' , `nameSurname` =  '".$nameSurname."' , `degree` =  '".$degree."' , `phone` =  '".$phone."' , `address` =  '".$address."' , `birthday` =  '".$birthday."' , `experience` =  '".$experience."' , `email` =  '".$email."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `main` WHERE id = '".$id_get."' ");
					}
					header("location:"."main.php");
				}
				
				if($cat == "skills" || $cat_get == "skills") {
					$skillname = addslashes(htmlentities($_POST["skillname"], ENT_QUOTES));
$percent = addslashes(htmlentities($_POST["percent"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `skills` (  `skillname` , `percent` ) VALUES ( '".$skillname."' , '".$percent."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `skills` SET  `skillname` =  '".$skillname."' , `percent` =  '".$percent."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `skills` WHERE id = '".$id_get."' ");
					}
					header("location:"."skills.php");
				}
				
				if($cat == "urls" || $cat_get == "urls") {
					$Instagram = addslashes(htmlentities($_POST["Instagram"], ENT_QUOTES));
$Facebook = addslashes(htmlentities($_POST["Facebook"], ENT_QUOTES));
$Linkedin = addslashes(htmlentities($_POST["Linkedin"], ENT_QUOTES));
$CVdownload = addslashes(htmlentities($_POST["CVdownload"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `urls` (  `Instagram` , `Facebook` , `Linkedin` , `CVdownload` ) VALUES ( '".$Instagram."' , '".$Facebook."' , '".$Linkedin."' , '".$CVdownload."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `urls` SET  `Instagram` =  '".$Instagram."' , `Facebook` =  '".$Facebook."' , `Linkedin` =  '".$Linkedin."' , `CVdownload` =  '".$CVdownload."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `urls` WHERE id = '".$id_get."' ");
					}
					header("location:"."urls.php");
				}
				?>
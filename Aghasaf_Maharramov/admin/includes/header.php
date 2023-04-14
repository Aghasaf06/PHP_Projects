<?php
		error_reporting(0);
		@session_start();
		if (!isset($_SESSION["sess_admin_login"])){header("location:"."index.php");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>Portfolisite Admin Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							Portfolisite Admin Panel<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							Portfolisite<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="admins.php"> <i class="glyphicon glyphicon-certificate"></i>Admins <span class="pull-right"><?=counting("admins", "id")?></span></a></li>
<li><a href="eduexp.php"> <i class="glyphicon glyphicon-phone"></i>Eduexp <span class="pull-right"><?=counting("eduexp", "id")?></span></a></li>
<li><a href="images.php"> <i class="glyphicon glyphicon-modal-window"></i>Images <span class="pull-right"><?=counting("images", "id")?></span></a></li>
<li><a href="languages.php"> <i class="glyphicon glyphicon-chevron-up"></i>Languages <span class="pull-right"><?=counting("languages", "id")?></span></a></li>
<li><a href="main.php"> <i class="glyphicon glyphicon-text-background"></i>Main <span class="pull-right"><?=counting("main", "id")?></span></a></li>
<li><a href="skills.php"> <i class="glyphicon glyphicon-minus-sign"></i>Skills <span class="pull-right"><?=counting("skills", "id")?></span></a></li>
<li><a href="urls.php"> <i class="glyphicon glyphicon-gbp"></i>Urls <span class="pull-right"><?=counting("urls", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">
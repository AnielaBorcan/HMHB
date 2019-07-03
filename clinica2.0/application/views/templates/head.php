<?php
	if (!isset($_SESSION["login"]))
		$_SESSION["login"] = "ion";
?>

<!DOCTYPE html>
<html lang="en"> 
	<head profile="http://www.w3.org/2005/10/profile">				
				<meta charset="utf16_romanian_ci">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
			    <meta name="description" content="">
			    <meta name="author" content="">
				<title>H.M.H.B.- "Healthy mind in a healthy body"</title>
				
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
				
				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
				
				<link rel="stylesheet" href="<?=base_url()?>css/style.css">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300" rel="stylesheet" type="text/css">
				<link href="http://fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet" type="text/css">

				<link rel="shortcut icon" href="<?=base_url()?>/favicon.ico" type="image/x-icon">
				<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/x-icon">
							
				<!--[if lt IE 9]>
			      <script src="<?=base_url()?>js/html5shiv.js"></script>
			      <script src="<?=base_url()?>js/respond.min.js"></script>
			    <![endif]-->
	</head>
	<body>
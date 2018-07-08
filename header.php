<!DOCTYPE html>

<html> 

	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Beauty for Ashes: Love is the greatest.</title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" ></script>
		
		<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
		
	</head>
	
<body>
	
<div id="outer_wrapper">
	
	<div id="wrapper" class="center">
		
		<div id="top_nav">

			

			<?php wp_nav_menu(array('menu' => 'top_menu', 'container' => 'top_nav')); ?>
			
					
		</div><!--/top_nav-->
		
		<div id="header">
			
			<h1 id="logo">Beauty For Ashes</h1>
			
			<div id="tagline">
				<h2>Love is the greatest</h2>
			</div><!--/tagline-->
			
		</div><!--/header-->
		
		<div id="main_nav">
			
		
			<?php wp_nav_menu(array('menu' => 'custom_menu', 'container' => 'main_nav')); ?>


		</div><!--/main_nav-->

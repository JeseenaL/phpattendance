<!DOCTYPE html>
<html>
<head>
		<title><?php wp_title();?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
	<div class="menubar">
	<ul>
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="galery.php">Galery</a></li>
		<li><a href="#">About us</a>
			<div  class="submenu">
				<ul>
					<li><a href="#">vision</a></li>
					<li><a href="#">mission</a></li>
				</ul></div>
		</li>
		<li><a href="contact.php">Contact us</a>
				<div  class="submenu">
				<ul>
					<li><a href="#">personal</a></li>
					<li><a href="#">office</a></li>
				</ul></div>
</li>
	</ul>
	</div>
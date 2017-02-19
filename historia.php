<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
    	<title>po prostu php</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
	</head>
	<body>
		<div class="fullcontainer">	
			<div class="container">
				<a href="index.html">
					<div class="logo">
						<div class="slonik"></div>
					</div>
				</a>
				<?php 
					include(dirname(__FILE__).'/modules/header.html');
				?>
				<div class="content">
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
</html>
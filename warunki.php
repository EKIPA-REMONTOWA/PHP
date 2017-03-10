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
				<?php 
					include(dirname(__FILE__).'/modules/header.html');
				?>
				<div class="content">
					<?php
					include(dirname(__FILE__).'/modules/tabela.html');
				?>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="main.js"></script>
</html>
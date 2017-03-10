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
					<h1>Stronę wykonali:</h1>
					<p style="font-size: 30px;">uczniowie z klasy 4ti</p>
					<div style="margin-right: 30px; height: 120px;">
						<span style="float: right; font-size: 40px;">W składzie:</span>
						<h2 style="clear: both; float: right; font-size: 50px;">Kamil Różański</h2>
					</div>
					<p>
						Źródła:<br>
						<ul style="margin-left: 40px; font-size: 24px;">
							<li>https://pl.wikibooks.org/wiki/PHP/Instrukcja_if</li>
						</ul>
					</p>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="main.js"></script>
</html>
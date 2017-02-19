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
					<h1>PHP
					</h1>
					<p> Interpretowany skryptowy język programowania zaprojektowany do generowania stron internetowych i budowania aplikacji webowych w czasie rzeczywistym.
					PHP jest najczęściej stosowany do tworzenia skryptów po stronie serwera WWW, ale może być on również używany do przetwarzania danych z poziomu wiersza poleceń, a nawet do pisania programów pracujących w trybie graficznym (np. za pomocą biblioteki GTK+, używając rozszerzenia PHP-GTK). Implementacja PHP wraz z serwerem WWW Apache oraz serwerem baz danych MySQL określana jest jako platforma AMP (w środowisku Linux – LAMP, w Windows – WAMP).
					</p>
					
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
</html>
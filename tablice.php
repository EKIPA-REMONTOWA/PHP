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
					<ul class="lisContent">
						<li class="lisContent">Wstęp</li>
						<p>Tablice są bardzo specyficznym typem zmiennych – są to, najprościej mówiąc, zmienne zawierające w sobie uporządkowany zbiór zmiennych. Do zmiennych tych uzyskuje się dostęp przez liczbę w nawiasie kwadratowym podane bezpośrednio po nazwie zmiennej – tablicy. Liczba ta to tak zwany indeks – numer kolejny zmiennej w tablicy. Tak samo przypisuje się wartość do tablicy.</p>
						<li class="lisContent">Przykład 5.1. Tworzenie tablic</li>
					</ul>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
</html>
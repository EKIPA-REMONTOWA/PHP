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
					<h1>
						Składnia
					</h1>
							<p>
								Składnia PHP jest oparta na składni języków C, Java oraz Perl.
							</p>
							<p>
								Cały kod PHP musi zawierać się pomiędzy znacznikami:
							</p>
							<p>
								- &#60;?php oraz ?&#62; – jedyny nieskrótowy tag zalecany przez PSR-1, wymienione jako dozwolone w podręczniku php.net; PSR-2 nakazuje ominięcie znacznika końcowego, jeśli plik zawiera tylko kod PHP, a na końcu pliku musi zostać jedna, pusta linia, z kolei php.net jedynie zaleca ominięcie końcowego tagu, w takim przypadku.
							</p>
							<p>
								- &#60;? oraz ?&#62; – niezalecane przez php.net z powodu mniejszej kompatybilności (wymaga włączenia short_open_tag); użycie zabronione przez PSR-1, mimo warunkowego zezwolenia przez podręcznik php.net.
							</p>
							<p>
								- &#60;?= oraz ?&#62; – powoduje wysłanie tekstu na wyjście (np. &#60;?=$zmienna ?&#62; i ma taki sam wynik (tj. skrócona notacja) jak &#60;?php echo $zmienna; ?&#62;; jedyny skrótowy tag zalecany przez PSR-1  <b>nie mylić z dopuszczeniem &#60;? oraz ?&#62;</b>; nie wymaga włączenia short_open_tag w wersjach PHP 5.4 i późniejszych.
							</p>
							<p>
								- &#60;% oraz %&#62; – tagi w stylu ASP; wymaga włączenia asp_tags (usunięto w PHP 7)
							</p>
							<p>
								- &#60;%= oraz %&#62; – analogiczny efekt do &#60;?= oraz ?&#62; (usunięto w PHP 7)
							</p>
							<p>
								- &#60;script language="php"&#62; oraz &#60;/script&#62; – case insensitive, wprowadzone dla kompatybilności z niektórymi edytorami HTML (usunięto w PHP 7)
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
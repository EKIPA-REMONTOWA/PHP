<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php
					include(dirname(__FILE__).'/modules/head.html');
		?>
	</head>
	<body>
		<div class="fullcontainer">	
			<div class="container">
				<?php 
					include(dirname(__FILE__).'/modules/header.html');
				?>
				<div class="content">
					<h1>Czym są operatory ?</h1>
					<p>Operatory są to najprościej mówiąc symbole, które służą do operacji na zmiennych. Dzielą się one na:</p>
					<ul class="lisContent">
						<li class="lisContent">operatory arytmetyczne, które służą do operacji na liczbach</li>
						<li class="lisContent">operatory przypisania, służące do przypisywania zmiennym wartości</li>
						<li class="lisContent">operatory operacji bitowych</li>
						<li class="lisContent">operatory porównania, niezbędne do instrukcji warunkowych</li>
						<li class="lisContent">operator kontroli błędów</li>
						<li class="lisContent">operator wykonania służący do uruchamiania zewnętrznych programów</li>
						<li class="lisContent">operatory inkrementacji i dekrementacji</li>
						<li class="lisContent">operatory logiczne</li>
						<li class="lisContent">operatory ciągu</li>
					</ul>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="js/main.js"></script>
</html>
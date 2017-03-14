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
					<h1>Stronę wykonał</h1>
					<br>
					<h2 style="font-size: 34px;">Kamil Różański z klasy 4ti</h2>
					<p>Z wykorzystaniem edytora Brackets</p>
					<div style="margin: 0 auto; width: 700px; height: 350px; background-image: url(../images/edytor.jpg); background-size: cover;"></div>
					<p>
						Źródła:<br>
						<ul style="margin-left: 40px; font-size: 24px;">
							<li>pl.wikibooks.org/wiki/PHP/</li>
							<li>phpkurs.pl</li>
							<li>devphp.sourceforge.net</li>
							<li>wikipedia.com</li>
							<li>vm5.eu/blog/php-7-infographic</li>
						</ul>
					</p>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="js/main.js"></script>
</html>
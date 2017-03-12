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
					<h1>Stronę wykonali:</h1>
					<p style="font-size: 30px;">uczniowie z klasy 4ti</p>
					<div style="margin-right: 30px; height: 120px;">
						<span style="float: right; font-size: 40px;">W składzie:</span>
						<h2 style="clear: both; float: right; font-size: 50px;">Kamil Różański</h2>
					</div>
					<p>
						Źródła:<br>
						<ul style="margin-left: 40px; font-size: 24px;">
							<li>pl.wikibooks.org/wiki/PHP/</li>
							<li>phpkurs.pl</li>
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
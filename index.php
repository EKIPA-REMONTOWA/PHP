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
					//Załączenie PHPem kodu z pliku html
					include(dirname(__FILE__).'/modules/header.html');
				?>
				<div class="content">
					<h1>Po prostu php</h1>
					<p style="font-size: 24px;">Strona wykonana na przedmiot witryny i aplikacje internetowe.</p>
				</div>
				<?php
					//Załączenie PHPem kodu z pliku html
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="js/main.js"></script>
</html>
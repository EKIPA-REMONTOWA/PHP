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
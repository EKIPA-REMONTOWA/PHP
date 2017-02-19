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
					<div class="logo" onmouseover="mrugnij(true)" onmouseout="mrugnij(false)">
						<div class="slonik"></div>
					</div>
				</a>
				<?php 
					include(dirname(__FILE__).'/modules/header.html');
				?>
				<div class="content">
                    <div class="content-text">
                        <h2>Oto przykładowy skrypt PHP. Po wciśnięciu przycisku program wyświetli aktualną datę i czas która jest zapisana na serwerze!</h2>
                    </div>
                    <div class="content-text">
                        <form action="program.php" method="post">
                            <input type="submit" class="button" value="Spróbuj!" name="submit">
                        </form>
                    </div>
                    <div class="content-text">
                        <h1>
                            <?php 
                                if(isset($_POST['submit'])){
                                    echo date("d/m/Y G:i:s");
                                }
                            ?>
                        </h1>
                    </div>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="main.js"></script>
</html>
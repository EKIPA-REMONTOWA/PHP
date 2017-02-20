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
					
					<?php
					
					if(!isset($_POST['submit']) and !isset($_POST['submit2']) ){
						echo '<div class="content-text"><h2>Oto przykładowy skrypt PHP. Po wciśnięciu przycisku program wyświetli aktualną datę i czas która jest zapisana na serwerze!</h2></div><div class="content-text"><form action="program.php" method="post"><input type="submit" class="button" value="Spróbuj!" name="submit"></form></div>';
					}	
						   
					?>
                    <div class="content-text">
                            <?php
						   
                                if(isset($_POST['submit'])){
                                    echo "<h1>".date("d/m/Y G:i:s")."</h1>";
                                    echo "<br/><h2>Naprawde nieźle! Spróbujmy teraz wygenerować kolejne liczby Fibonacciego. Wpisz w poniższy formularz liczbę numerów które chcesz wygenerować!<h2/>";
									echo '<br/><form action="program.php" method="post"><input type="text" name="number"><br/><br/><input type="submit" class="button" value="Spróbuj!" name="submit2"></form>';
                                }
						   		if(isset($_POST['submit2'])){
									
									$_POST['number'] = intval($_POST['number']);
									
									if($_POST['number'] > 100 or $_POST['number'] < 2 or !is_int($_POST['number'])){
										echo "<h2>Coś poszło nie tak! Spróbuj tym razem wpisać LICZBĘ z przedziału 2-100</h2>";
										echo '<br/><form action="program.php" method="post"><input type="text" name="number"><br/><br/><input type="submit" class="button" value="Spróbuj!" name="submit2"></form>';
									}
									else{
									$x = 0;    
									$y = 1; 

									echo "<h1>";
										for($i=1;$i<=$_POST['number'];$i++){    
    										$z = $x + $y;
											echo $z." ";	       
    										$x=$y;       
    										$y=$z;   
										}
										echo "</h1><h2><br/><br/>Jak widać przy odrobinie wiedzy i pomysłu można stworzyć, przy pomocy PHP, naprawde ciekawe aplikacje webowe!<h2/><br/></br> Spróbuj jeszcze raz!";
										echo '<br/><form action="program.php" method="post"><input type="text" name="number"><br/><br/><input type="submit" class="button" value="Spróbuj!" name="submit2"></form>';	
									}
								}
                            ?>
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
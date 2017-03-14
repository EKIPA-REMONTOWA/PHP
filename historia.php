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
					<h1>Historia języka PHP</h1>
					<img id="ewolucja" src="images/ewolucja.jpg" style="display: none; margin: 0 auto; padding: 30px; border-radius: 50px;">
					<ul>
						<li>
							<p>Początki - Pierwsza wersja PHP, rozpowszechniana pod nazwą PHP/FI (Personal Home Page/Forms Interpreter), została stworzona przez Rasmusa Lerdorfa w roku 1994 jako zestaw skryptów Perla służący do monitorowania internautów odwiedzających jego witrynę. <img width="300px" style="margin: 5px; float: left;" src="images/phplogo.png"> Gdy ruch stał się zbyt duży, przepisał je w języku C, dodając przy tym nowe opcje. Niedługo później ludzie zaczęli prosić go o możliwość użycia tych narzędzi na swoich stronach, zatem 8 czerwca 1995 roku autor udostępnił publicznie kod źródłowy (PHP Tools 1.0). Już kilka miesięcy później projekt przekształcił się w zalążek znanego obecnie języka programowania, gdy został połączony z innym narzędziem Rasmusa Lerdorfa – Form Interpreter, które dało drugi człon nazwy. W 1997 roku pojawiło się PHP/FI 2.0, posiadające wtedy kilka tysięcy aktywnych użytkowników na całym świecie oraz obsługujące 50 tys. domen. Co ciekawe, wersja ta spędziła większość „życia” na beta testach. Oficjalne wydanie było tylko jedno i ukazało się w listopadzie 1997 roku. </p>
						</li>
						<li>
							<p>PHP3 - W 1997 roku projektem zainteresowali się dwaj izraelscy programiści: Zeev Suraski i Andi Gutmans. Odkryli oni, że PHP/FI ma zbyt małe możliwości na potrzeby aplikacji eCommerce, którą tworzyli na uniwersytecie. Zdecydowali wtedy, że przepiszą kod PHP całkowicie od nowa, korzystając z pomocy już istniejącej społeczności PHP.<img width="400px" style="float: right; margin: 5px;" src="images/php3.png"> W czerwcu 1998 roku ogłosili PHP 3.0 jako następcę PHP/FI, którego dalszy rozwój został wtedy zatrzymany. Był to wielki krok naprzód. PHP 3.0 posiadało całkowicie nową architekturę, która znacznie zwiększała wydajność. Pojawiły się w niej zalążki programowania obiektowego, ale najważniejszą cechą aplikacji była jej modułowość. Użytkownicy mogli rozszerzać teraz funkcjonalność języka poprzez dodawanie nowych modułów.</p>
						</li>
						<li>
							<p>PHP 4 - Krótko po wydaniu PHP 3, w zimie 1998 Zeev Suraski oraz Andi Gutmans jeszcze raz zabrali się za przepisywanie kodu źródłowego PHP, korzystając z doświadczeń nabytych przy pracach nad poprzednią wersją. Za główne cele obrali poprawienie modułowości oraz wydajności złożonych aplikacji. Choć dotychczasowa wersja potrafiła sobie z nimi poradzić, nie była jednak stworzona do tego celu i przegrywała przez to z innymi rozwiązaniami.<br>W połowie roku 1999 ukazał się oficjalnie Zend Engine, nowy silnik języka skryptowego, wokół którego niedługo później zaczęto budować PHP 4. Jego nazwa to kompromisowe połączenie imion twórców projektu. Nowa, oparta na nim wersja PHP, ukazała się w maju 2000 roku. Tak jak poprzednio, był to potężny krok naprzód. Programiści mieli do dyspozycji teraz wiele nowych narzędzi, konstrukcji językowych oraz bezpieczniejszy system wejścia/wyjścia. Od strony administracyjnej pojawiło się oficjalne wsparcie dla wielu nowych serwerów. Przez cztery lata od chwili wydania ukazały się trzy kolejne edycje tej wersji oznaczone numerami: 4.1, 4.2 oraz 4.3. W każdej z nich odczuwalne było zwiększenie bezpieczeństwa, szybkości działania oraz możliwości. W 2004 roku obsługiwały one łącznie 20% wszystkich domen sieciowych.</p>
						</li>
						<li>
							<p>PHP 5 - 30 czerwca 2009 wydano PHP 5.3. Główne zmiany obejmują wprowadzenie w języku obsługi przestrzeni nazw. Pojawiły się również wyrażenia lambda i tzw. domknięcia (znane z takich języków jak JavaScript, Ruby czy Lisp). Oprócz tego dopracowano również obsługę metod statycznych i poprawiono działanie PHP pod systemem Windows wprowadzając kompilacje VC9 oraz eksperymentalne wersje binarne pod x64. Ponadto wprowadzono mysqlnd – opcjonalny, natywny zamiennik PHP dla libmysql oraz poprawiono wiele błędów.</p>
						</li>
						<li>
							<p>PHP 6 - W połowie roku 2005 zaczęły pojawiać się oficjalne sygnały, że rozpoczęto wstępne prace nad PHP 6. Obecnie publicznie dostępne są codzienne snapshoty rozwojowego repozytorium kodu źródłowego, które można ściągnąć i przetestować. Głównym celem jest dalsze dążenie do ujednolicenia projektu, wprowadzenia dalszych możliwości wymaganych przez złożone projekty (m.in. pełne wsparcie unicode czy system cache’owania kodu). Usuwane są też kolejne archaiczne rozwiązania pochodzące jeszcze z czasów PHP/FI oraz PHP3, co w przypadku najstarszych skryptów ponownie spowoduje problemy z kompatybilnością. Zmiany koncentrowały się przede wszystkim wokół wbudowania w język obsługi Unicode, dalszych usprawnień modelu obiektowego oraz wycofania obsługi wybranych, przestarzałych rozwiązań.</p>
						</li>
						<li>
							<p>PHP 7 - Bazą PHP 7 stała się eksperymentalna gałąź, oryginalnie nazwana PHPNG (PHP Next Generation), mająca na celu optymalizację wydajności PHP przez refaktoryzację Zend Engine, zachowując niemal całkowitą zgodność języka. Począwszy od 14 lipca 2014 r., główny punkt odniesienia testowania wydajności PHPNG, którym jest WordPress, wskazuje niemal 100% wzrost wydajności[21]. Zmiany wprowadzone w PHPNG powinny również ułatwiać implementowanie usprawnień wydajności w przyszłości, ponieważ bardziej zwarte struktury danych oraz inne zmiany uważane są za lepiej nadające się do pomyślnej migracji do kompilacji Just-in-time.<img src="images/php7.jpg" style="margin: 0 auto; display: block; padding: 20px;" width="400px"</p>
						</li>
					</ul>
				</div>
				<?php
					include(dirname(__FILE__).'/modules/footer.html');
				?>
			</div>
		</div>
	</body>
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function(){
			$(ewolucja).slideDown("slow");
		});
	</script>
</html>
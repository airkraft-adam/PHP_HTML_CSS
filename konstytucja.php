<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Konstytucja 3 maja</title>
		<link rel="stylesheet" href="konstytucja.css"/>
	</head>
	<body>
		<header>
			<h1>Konstytucja 3 maja</h1>
		</header>
		
		<article>
			<menu>	
			Przydatne linki:
				<span class="menu"><a href="https://dzieje.pl/aktualnosci/konstytucja-3-maja-najwazniejsza-z-konstytucji" target="_blank">Konstytucja</a></span>											
				<span class="menu"><a href="https://www.polskatradycja.pl/historia-polski/wydarzenia/konstytucja-3-maja.html" target="_blank">Polska tradycja</a></span>
				
				<span class="menu"><a href="https://muzhp.pl/pl/e/1140/uchwalenie-konstytucji-3-maja" target="_blank">Muzeum Historii Polski</a></span>						
			</menu>		
			<p>
			
				<strong>Konstytucja 3 maja</strong>, a właściwie <strong>Ustawa Rządowa z dnia 3 maja</strong>
				to uchwalona 3 maja 1791 roku ustawa regulująca ustrój prawny Rzeczypospolitej Obojga Narodów.
				Powszechnie przyjmuje się, że Konstytucja 3 maja była pierwszą w Europie i drugą na świecie
				(po konstytucji amerykańskiej z 1787 r.) nowoczesną, spisaną <a href="https://pl.wikipedia.org/wiki/Konstytucja" target="_blank">konstytucją</a>.
			</p>
			<p>
				<img src="konstytucja.jpg" /> <!-- 464 x 720 -->
				<a href="https://pl.wikipedia.org/wiki/Konstytucja_3_maja"target="_blank">Konstytucja 3 maja</a> została ustanowiona ustawą rządową przyjętą tego dnia przez
				<a href="https://pl.wikipedia.org/wiki/Sejm_Czteroletni"target="_blank">Sejm Czteroletni</a>.
				Działo się to za panowania króla <a href="https://pl.wikipedia.org/wiki/Stanis%C5%82aw_August_Poniatowski"target="_blank">Stanisława Augusta Poniatowskiego</a> a sam król był
				jednym z głównych współautorów konstytucji.
				Została ona zaprojektowana w celu zlikwidowania obecnych od dawna wad opartego na wolnej elekcji
				i demokracji szlacheckiej systemu politycznego <a href="https://pl.wikipedia.org/wiki/Rzeczpospolita_Obojga_Narod%C3%B3w"target="_blank">Rzeczypospolitej Obojga Narodów</a>.
				Konstytucja zmieniła ustrój państwa na monarchię dziedziczną, ograniczyła znacząco demokrację
				szlachecką, odbierając prawo głosu i decyzji w sprawach państwa szlachcie nieposiadającej ziemi
				(gołocie), wprowadziła częściowe zrównanie praw osobistych mieszczan i szlachty oraz stawiała
				chłopów pod ochroną państwa, w ten sposób łagodząc nadużycia pańszczyzny.
				Konstytucja formalnie zniosła <a href="https://pl.wikipedia.org/wiki/Liberum_veto"target="_blank">liberum veto</a>.
			</p>
			<p>
				Przyjęcie monarchicznej Konstytucji 3 maja spowodowało opozycję republikanów oraz sprowokowało
				wrogość Imperium Rosyjskiego, które od 1768 roku było protektorem Rzeczypospolitej i gwarantem
				nienaruszalności jej ustroju.
				W wojnie w obronie konstytucji Polska, zdradzona przez swojego pruskiego sprzymierzeńca
				<a href="https://pl.wikipedia.org/wiki/Fryderyk_II_Wielki"target="_blank">Fryderyka Wilhelma II</a>, została pokonana przez wojska rosyjskie <a href="https://pl.wikipedia.org/wiki/Katarzyna_II_Wielka"target="_blank">Katarzyny
				Wielkiej</a>, wspierające <a href="https://pl.wikipedia.org/wiki/Konfederacja_targowicka"target="_blank">konfederację targowicką<a/> – spisek części polskich magnatów
				przeciwnych zmianie ustroju Rzeczypospolitej.
				Po utracie niepodległości w 1795 roku przez 123 lata <a href="https://pl.wikipedia.org/wiki/Rozbiory_Polski"target="_blank">rozbiorów</a> przypominała o walce
				o niepodległość.
				Zdaniem głównych współautorów <a href="https://pl.wikipedia.org/wiki/Ignacy_Potocki"target="_blank">Ignacego Potockiego</a> i <a href="https://pl.wikipedia.org/wiki/Hugo_Ko%C5%82%C5%82%C4%85taj"target="_blank">Hugona Kołłątaja</a>
				była &quot;ostatnią wolą i testamentem gasnącej Ojczyzny&quot;.
			</p>
			<p>
				Konstytucja przestała w praktyce obowiązywać (straciła znaczenie) 24 lipca 1792 roku (w momencie
				przystąpienia króla Stanisława Augusta Poniatowskiego do konfederacji targowickiej) – czyli po nieco
				ponad 14 miesiącach, w ciągu których Sejm Czteroletni uchwalił szereg ustaw szczegółowych, będących
				rozwinięciem jej postanowień.
				Przestała natomiast być obowiązującym aktem prawnym (została derogowana) 23 listopada 1793 roku.
				Sejm grodzieński uznał wtedy Sejm Czteroletni za niebyły i uchylił wszystkie ustanowione na nim akty
				prawne. 
			</p>
			<div id="wejscie">			
				<?php
					$mod = filemtime("konstytucja.php");				
					$aktualizacja =date("d:F:y",$mod);
					$teraz = date("d:F:y");
					//punkt1
					if ($aktualizacja==$teraz){
						echo "ostatnia aktualizacja dok. godzina: " .date("H:i:s",$mod);}
					else{
						echo "ostatnia aktualizacja dok.: " .date("d-F-y H:i:s",$mod);
					}
					//punkt2
					$date2=strtotime(date("d-F-y H:i:s",$mod));				
					$date1=strtotime(date("d-F-y H:i:s"));
					$roznica = ($date1 - $date2);
									
					$godziny = floor(($roznica / 3600)%24);
					$minuty = floor(($roznica / 60)%60);
					$sekundy =  $roznica % 60;
					$dni = floor($roznica / 86400);
					
					if ($aktualizacja==$teraz){
						echo "<br/>od ostatniej aktualizacji mineło : " .$godziny .' godzin '.$minuty.' minut '.$sekundy.' sekund'.'<br/>' ;
						}				
					else{
						echo "<br/>od ostatniej aktualizacji mineło : ".$dni." dni";}
						
						
						
						
					//zad3
						$dzien = date('d');
						$dzien_tyg = date('w');
						$miesiac = date('n');
						$rok = date('Y');

						$miesiac_pl = array(1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');

						$dzien_tyg_pl = array(0 => 'niedziela', 'poniedziałek', 'wtorek','środa', 'czwartek','piątek','sobota' );

						echo "<br/>dzisiaj mamy : ".$dzien_tyg_pl[$dzien_tyg].", ".$dzien." ".$miesiac_pl[$miesiac]." ".$rok."r. godzina: ".date("H:i:s");
				?>
			</div>
		</article>
		<footer>
			<h4>Treść artykułu pochodzi z Wikipedii</h4>
		</footer>
	</body>
</html>

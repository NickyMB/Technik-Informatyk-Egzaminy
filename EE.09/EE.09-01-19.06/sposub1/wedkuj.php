<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="styl_1.css" rel="stylesheet" type="text/css">
<title>Wędkujemy</title>
</head>
<body>
	<div id="baner">
		<h1>Portal dla wędkarzy</h1>
	</div>
	<div id="lewy">
		<h2>Ryby drapieżne naszych wód</h2>
		<?php
			$polonczenie = mysqli_connect('localhost','root','', 'wedkowanie');
			$zapytanie = mysqli_query($polonczenie," SELECT nazwa, wystepowanie from ryby where styl_zycia = 1;");
			mysqli_close($polonczenie);
			echo("<ul>");
				while($wynik = mysqli_fetch_array($zapytanie))
				{
					echo "<li>" . $wynik["nazwa"] . "</li>";
				}
			echo("</ul>");
		?>
	</div>
	<div id="prawy">
		<img src="ryba1.jpg" alt="Sum">
		<br>
		<a href="Kwerendy.txt">Pobierz kwerendy</a>
	</div>
	<div id="stopka">
		<p>
			Stronę wykonał: 123456789
		</p>
	</div>
</body>
</html>
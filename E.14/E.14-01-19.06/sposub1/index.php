<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="styl.css" rel="stylesheet" type="text/css">
<title>Sklep papierniczy</title>
</head>
<body>
	<div id="baner">
	<h1>W naszym sklepie internetowym kupisz najtaniej</h1>
	</div>
	<div id="lewy">
		<h3>Promocja 15% obejmuje artykuły:</h3>
		<?php
			$polonczenie = mysqli_connect('localhost','root','', 'sklep');
			$zapytanie = mysqli_query($polonczenie, 'SELECT nazwa FROM towary WHERE promocja = 1');
			echo("<ul>");
				while($wynik = mysqli_fetch_array($zapytanie))
				{
					echo "<li>" . $wynik["nazwa"] . "</li>";
				}
			echo("</ul>");
			mysqli_close($polonczenie);
		?>
	</div>
	<div id="srodkowy">
		<h3>Cena wybranego artykułu w promocji</h3>
		<form action="index.php" method="post">
			<select name="lista" id="lista">
				<option id="opcja1">Gumka do mazania</option>
				<option id="opcja2">Cienkopis</option>
				<option id="opcja3">Pisaki 60 szt.</option>
				<option id="opcja4">Markery 4 szt.</option>
			</select>
			<input type="submit" id="WYBIERZ" title="WYBIERZ" value="WYBIERZ">
			<?php
				if(isset($_POST["lista"]))
				{
					$polonczenie = mysqli_connect('localhost','root','', 'sklep');
					$zapytanie = mysqli_query($polonczenie, "SELECT cena FROM towary WHERE nazwa='$_POST[lista]'");
					$wynik = mysqli_fetch_array($zapytanie);
					echo "<br>".round($wynik['cena']*0.85,2);
					mysqli_close($polonczenie);
				}
			?>
		</form>
	</div>
	<div id="prawy">
		<h3>Kontakt</h3>
		<p>
		telefon :123123123
		<br>
		 e-mail <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
		</p>
   		<img src="promocja.png" width="200" height="180" alt="promocja"/> </div>
	<div id="stopka">
		<h4>Autor strony: 12345678912</h4>
	</div>
</body>
</html>
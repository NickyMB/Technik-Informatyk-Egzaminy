<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<link href="styll.css" rel="stylesheet" type="text/css">
	<link href="dodaj.php">
	<title>Filmy</title>
</head>
<body>
	<div id="naglowek"></div>
	<div id="lewy">
		<h3>Dostępne gatunki filmu</h3>
		<ol>
			<li>Sci-Fi</li>
			<li>animacja</li>
			<li>dramat</li>
			<li>horror</li>
			<li>komedia</li>
		</ol>
		<p>
			<a href="kadr.jpg" download="kadr.jpg">Pobierz obraz</a>
		</p>
		<p>
			<a href="http://repertuar-kin.pl" target="_blank">sprawdź repertuar kin</a>
		</p>
	</div>
	<div id="prawy1">
		<h1>FILMOTEKA</h1>
	</div>
	<div id="prawy2">
		<form action="dodaj.php" method="post">
			Tytuł: <input type="text" id="tytul" name="tytul">
			<br>
			Gatunek filmu: <input type="number" id="gatuenk" name="gatuenk" min="1" max="5">
			<br>
			Rok produkcji: <input type="number" id="rok" name="rok">
			<br>
			Ocena: <input type="number" id="ocena" name="ocena" >
			<br>
			<input type="reset" value="Czyść" >
			<input type="submit" value="Dodaj">
		</form>
	</div>
	<div id="prawy3">
		<img src="kadr.jpg" alt="zdjęcia Filmowe">
	</div>
	<div id="stopka">
		Autor strony: 12345678912
	</div>
</body>
</html>
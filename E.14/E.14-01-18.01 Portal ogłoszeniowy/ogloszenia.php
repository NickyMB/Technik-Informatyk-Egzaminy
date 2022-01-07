<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styl1.css">
		<title>Portal ogłoszeniowy</title>
	</head>
	<body>
		<div id="baner">
			<h1>Portal Ogłoszeniowy</h1>
		</div>
		<div id="lewy">
			<h2>Kategorie ogłoszeń</h2>
			<ol>
				<li>Książki</li>
				<li>Muzyka</li>
				<li>Filmy</li>
			</ol>
			<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
			<table>
				<tr>
					<td>Lista ogłoszeń</td>
					<td>Cena ogłoszenia</td>
					<td>Bonus</td>
				</tr>
				<tr>
					<td>1 - 10</td><td>1 PLN</td>
					<td rowspan="3" >Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
				</tr>
				<tr>
					<td>11 - 50</td>
					<td>0,80 PLN</td>
				</tr>
				<tr>
					<td>51 i więcej</td>
					<td>0,60 PLN</td>
				</tr>
			</table>
		</div>
		<div id="prawy">
			<h2>Ogłoszenia kategorii książki</h2>
			<?php 
				$polonczenie = mysqli_connect('localhost','root','','ogloszenia');
				$zapytanie1 = mysqli_query($polonczenie,"SELECT id, tytul, tresc from ogloszenie WHERE kategoria = 1");
				$zapytanie2= mysqli_query($polonczenie,"SELECT telefon FROM uzytkownik inner JOIN ogloszenie On uzytkownik.id = ogloszenie.uzytkownik_id ");
				while ($r1 = mysqli_fetch_array($zapytanie1)) 
				{
					$r2 = mysqli_fetch_array($zapytanie2);
					echo "<h3>".$r1[0]." ".$r1[1]."</h3>";
					echo "<p>".$r1[2]."</p>";
					echo "<p>"."Telefon kontaktowy: ".$r2[0];
				}
				mysqli_close($polonczenie);
			 ?>
		</div>
		<div id="stopka">
			Portal ogłoszeniowy opracował: 0123456789
		</div>
	</body>
</html>
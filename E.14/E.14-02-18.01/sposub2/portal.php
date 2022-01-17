<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styl2.css">
		<title>Ogłoszenia drobne</title>
	</head>
	<body>
		<div id="naglowek">
			<h2>Ogłoszenia drobne</h2>
		</div>
		<div id="lewy">
			<h2>Ogłoszeniodawcy</h2>
			<?php
				$conn=new mysqli('localhost','root','','ogloszenia');
				$qr= "SELECT uzytkownik.id, uzytkownik.imie, uzytkownik.nazwisko, uzytkownik.email, ogloszenie.tytul FROM uzytkownik inner join ogloszenie ON uzytkownik.id = ogloszenie.uzytkownik_id WHERE uzytkownik.id < 4 GROUP by uzytkownik.id";
				$result = $conn->query($qr);
				while ($r=$result->fetch_array()) 
				{
					echo '<h3>'.$r[0].' '. $r[1].' '.$r[2].'</h3>';
					echo '<p>'.$r[3].'</p>';
					echo '<p>Ogłoszenie: '.$r[4];
				}
				$conn->close();
			?>
		</div>
		<div id="prawy">
			<h2>Nasze kategorie</h2>
			<ul>
				<li>Książki</li>
				<li>Muzyka</li>
				<li>Multimedia</li>
			</ul>
			<img src="ksiazki.jpg" alt="uwolnij swoją książkę"">
			<table>
				<tr>
					<td>Ile?</td>
					<td>Koszt</td>
					<td >Promocja</td>
				</tr>
				<tr>
					<td>1-40</td>
					<td>1,20 PLN</td>
					<td rowspan="2">Subskrybuj newsletter upust 0,30 PLN na ogłoszenie</td>
				</tr>
				<tr>
					<td>41 i więcej</td>
					<td>0,70 PLN</td>
			</table>
		</div>
		<div id="stopka">
			Portal ogłoszenia drobne opracował:
		</div>
	</body>
</html>
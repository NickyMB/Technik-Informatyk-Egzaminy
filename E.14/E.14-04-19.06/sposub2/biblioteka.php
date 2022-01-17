<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset='utf-8'>
		<title>Biblioteka publiczna</title>
		<link rel='Stylesheet' href='style.css'>
	</head>
	<body>
		<div id='baner'>
			<h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
		</div>
	
		<div id='lewy'>
			<h2>Dodaj czytelnika</h2>
			<form action='biblioteka.php' method='POST'>
				<label>Imię:</label><input type='text' name='imie'></br>
				<label>Nazwisko:</label><input type='text' name='nazwisko'></br>
				<label>Rok urodzenia:</label><input type='number' name='rok'></br>
				<input type='submit' value='DODAJ'>
			</form>
			<?php
				$conn=new mysqli("localhost","root","","biblioteka");
				if(isset($_POST['imie']) && isset($_POST['nazwikso']))
				{
					$imie = $_POST['imie'];
					$nazwisko = $_POST['nazwisko'];
					$rok = $_POST['rok'];
					$kod = $imie[0].$imie[1].$rok[2].$rok[3].$nazwisko[0].$nazwisko[1];
					$qr="INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$kod')";
					$conn->query($qr);
					echo "czytelnik".' '.$nazwisko.' '."został dodany do bazy danych";
				}
			?>
		</div>
		<div id='srodek'>
			<img src='biblioteka.png' alt='biblioteka'>
			<h4>ul. Czytelnicza 25 </br> 12-120 Książkowice </br> tel.: 123123123 </br> e-mail: <a href='mailto:biuro@bib.pl'>biuro@bib.pl</a></h4>
		</div>
		<div id='prawy'>
			<h3>Nasi czytelnicy</h3>
			<ul>
			<?php
				$qr='select imie,nazwisko from czytelnicy';
				$result = $conn->query($qr);
				while($r = $result->fetch_array())
				{
					echo '<li>'.$r[0].' '.$r[1].'</li>';
				}
				$conn->close();
			?>
			</ul>
		</div>
		<div id='stopka'><p>Projekt witryny: 0123456789</p></div>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Hurtownia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl1.css">
</head>
<body>
	<div id="logo"><img src="komputer.png" alt="hurtownia komputerowa"></div>
	<div id="lista">
		<ul>
			<li>Sprzęt
				<ol>
					<li>Procesory</li>
					<li>Pamięci RAM</li>
					<li>Monitory</li>
					<li>Obudowy</li>
					<li>Karty graficzne</li>
					<li>Dyski twarde</li>
				</ol>
			</li>
			<li>Oprogramowanie</li>
		</ul>
	</div>
	<div id="form">
		<h2>Hurtownia komputerowa</h2>
		<form action="sklep.php" method="POST">
			Wybierz kategorię sprzętu<input type="number" name="kat"> 
			<input type="submit" value="SPRAWDŹ">
		</form>
	</div>
	<div id="glowny">
		<h1>Podzespoły we wskazanej kategorii</h1>
		<?php
			$polonczenie = mysqli_connect('localhost', 'root', '','sklep');
			if (isset($_POST["kat"])) 
      		echo "Wybierz poprawną kategorię sprzętu";
    		else
     		{
     			$kat=$_POST['kat'];
     			$zapytanie=mysqli_query($polonczenie,"SELECT nazwa, opis, cena FROM podzespoly WHERE typy_id = $kat");
     			while ($linia=mysqli_fetch_assoc($zapytanie))
     	 		{
     				echo "<p>".$r[0]." ".$r[1]." "."CENA:".$r[2]."</p>";
     			}
     		}
		mysqli_close($polonczenie);
		 ?>
	</div>
	<div id="stopka">
		<h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
		<a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
		Partnerzy <a href="http://intel.pl" target="_blank">Intel</a><a href="http://amd.pl" target="_blank">AMD</a>
		<p>Stronę wykonał: 00000000000</p>
	</div>
</body>
</html>
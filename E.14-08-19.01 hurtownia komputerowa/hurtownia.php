<!DOCTYPE html>
<html>
<head>
	<title>Hurtownia komputerowa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl2.css">
</head>
<body>
	<div id="lista">
		<ul>
			<li>Producenci
				<ol>
					<li>Intel</li>
					<li>AMD</li>
					<li>Motorola</li>
					<li>Corsair</li>
					<li>ADATA</li>
					<li>WD</li>
					<li>Kingstone</li>
					<li>Patriot</li>
					<li>Asus</li>
				</ol>
			</li>
		</ul>
	</div>
	<div id="form">
		<h1>Dystrybucja sprzętu komputerowego</h1>
		<form action="hurtownia.php" method="post">
			<input type="number" name="prod">
			<input type="submit" value="WYŚWIETL">
		</form>
	</div>
	<div id="logo">
		<img src="sprzet.png" alt="Sprzedajemy komputery">
	</div>
	<div id="glowny">
		<h1>Podzespoły wybranego producenta</h1>
		<?php 
			$podzespoly= mysqli_connect('localhost', 'root', '','sklep');
			if (isset($_POST["prod"]))
			{
      			echo "Wybierz producenta";
			}
 			else
 			{
 				$prod=$_POST['prod'];
 				$zapytanie= mysqli_query($podzespoly,"SELECT nazwa, dostepnosc, cena FROM podzespoly WHERE producenci_id = $prod");
 				while ($r= mysqli_fetch_array($zapytanie))
 				{
 					if ($r['dostepnosc']==1)
 					{
 					echo "<p>".$r[0]." "."CENA:".$r[2]." DOSTĘPNY"."</p>";
 					}
 					else
 					{
 						echo "<p>".$r[0]." "."CENA:".$r[2]." NIEDOSTĘPNY"."</p>";
 					}
 					
 				}
 			}
		?>
	</div>
	<div id="stopka">
		<h3>Zapraszamy od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>30</sup></h3>
		Strony partnerow: <a href="http://adata.pl/" target="_blank">ADATA</a> <a href="http://patriot.pl/" target="_blank">Patriot</a>
		<a href="mailto:biuro@hurt.pl">Napisz</a>
		<p>Stronę wykonał: 00000000000</p>
	</div>
</body>
</html>
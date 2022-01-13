<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styl.css">
	<title>Rozgrywki futbolowe”</title>
</head>
<body>
	<header id="baner">
		<h2>Światowe rozgrywki piłkarskie</h2>
		<img src="obraz1.jpg" alt="boisko">
	</div>
	<section id="mecze">
			<?php
				require("connect.php");
				$qr='SELECT zespol1, zespol2, wynik, data_rozgrywki from rozgrywka WHERE zespol1 LIKE "EVG"';
				$result = $conn->query($qr);
				while($r = $result->fetch_array())
				{
					echo '<div id="mecz"><h3>'.$r[0].'-'.$r[1].'</h3>'.'<h4>'.$r[2].'</h4>'.'<p>'.'W dniu: '.$r[3].'</p>'.'</div>';
				}
				mysqli_close($conn);
			?>	
	</section>
	<div id="glowny">
		<h2>Reprezentacja Polski</h2>
	</div>
	<div id="lewy">
		<p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
		<form action="futbol.php" method="post">
			<input type="number" name="liczba" id="liczba">
			<input type="submit" value="Sprawdź" name="guzik" id="guzik">
		</form>
		<ul>
			<?php
				require("connect.php");
				if(isset($_POST['liczba']))
				{
					$liczba = $_POST['liczba'];
					$qr="SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id like $liczba";
					$result = $conn->query($qr);
					while($r = $result->fetch_array())
					{
						echo "<li>".$r[0]." ".$r[1]."</li>";
					}
					mysqli_close($conn);
				}
			?>
		</ul>
	</div>
	<div id="prawy">
		<img src="zad1.png" alt="piłkarz">
		<p>Autor:1234567890</p>
	</div>
</body>
</html>
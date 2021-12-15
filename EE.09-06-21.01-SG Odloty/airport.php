<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
	<div id="baner1"><h2>Odloty z lotniska</h2></div>
    <div id="baner2"><img src="zad6.png" alt="logotyp"></div>
    <div id="glowny">
        <table border="1">
            <tr>
                <th>LP.</th>
                <th>NUMER REJSU</th>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>STATUS</th>
            </tr>
			<?php
				$polonczenie=mysqli_connect("localhost","root","","egzamin");
				$zapytanie=mysqli_query($polonczenie,'SELECT id, nr_rejsu, czas,kierunek,status_lotu from odloty ORDER BY czas desc');
				while($r = mysqli_fetch_array($zapytanie))
				{
					echo "<tr>";
					for($i=0; $i<=4; $i++)
					{
						echo "<td>";
						echo $r[$i];
						echo "</td>";
					}
					echo "</tr>";
				}
			?>
        </table>
    </div>
    <div id="stopka1">
		<a href="kw1.jpg">Pobierz obraz</a>
	</div>
    <div id="stopka2"><p>
		<?php
			if(isset($_COOKIE["ciasteczko"]))
			{
				echo "<b>Miło nam, że nas znowu odwiedziłeś</b>";
			}
			else
			{
				$name="ciasteczko";
				$value="1";
				$expires=time()+7200;
				setcookie($name,$value,$expires);
				echo "<i>Dzień dobry! sprawdź regulamin naszej strony</i>";
			}
		?>
		</p></div>
    <div id="stopka3">Autor:000000000</div>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div id="baner1"><img src="zad5.png" alt="logo lotnisko"></div>
    <div id="baner2"><h1>Przyloty</h1></div>
    <div id="baner3">
		<h3>Przydatne linki</h3>
		<a href="zapytania.txt" target="_blank">Pobierz...</a>
    </div>
    <div id="main">
        <table border="1">
            <tr>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>NUMER REJSU</th>
                <th>STATUS</th>
            </tr>
			<?php
				require("connect.php");
				$qr='SELECT czas, kierunek, nr_rejsu, status_lotu from przyloty ORDER BY czas ASC';
				$result = $conn->query($qr);
				while($r = $result->fetch_array())
				{
					echo "<tr>";
						echo "<td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td>";
					echo "</tr>";
				}
			?>
        </table>
    </div>
    <div id="stopka1">
		<p>
		<?php
			if(isset($_COOKIE["ciasteczko"]))
			{
				echo "<i>Witamj ponowien na stronie lotniska</i>";
			}
			else
			{
				$name="ciasteczko";
				$value="1";
				$expires=time()+7200;
				setcookie($name,$value,$expires);
				echo "<b>Dzień dobry strona używa ciasteczek</b>";
			}
		?>
		</p>
	</div>
    <div id="stopka2">Autor:0132456789</div>
</body>
</html>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styl.css">
	<title>Piłka nożna</title>
</head>
<body>
	<div id="baner">
		<h2>Reprezentacja Polski w Piłce Nożnej</h2>
		<img src="obraz1.jpg" alt="reprezentacja">
	</div>
	<div id="lewy">
		<form action="liga.php" method="post">
			<select name="wybur" id="wybur">
				<option value="1" >Bramkarze</option>
				<option value="2" >Obrońcy</option>
				<option value="3" >Napastnicy</option>
				<option value="4" >Pomocnicy</option>
			</select>
			<input type="submit" value="zobacz" name="guzik" id="guzik">
		</form>
		<img src="zad2.png" alt="reprezentacja">
		<p>Autor:1234567890</p>
	</div>
	<div id="prawy">
		<ol>
			<?php
				if(isset($_POST['wybur']))
				{
					$polaczenie = mysqli_connect("localhost","root","","egzamin7");
					$wybur = $_POST['wybur'];
					$zapytanie = mysqli_query($polaczenie,"SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id like $wybur");
					while($r = mysqli_fetch_array($zapytanie))
					{
						echo "<li>".$r[0]." ".$r[1]."</li>";
					}
				}
			?>
		</ol>
	</div>
	<div id="glowny">
		<h3>Liga Mistrzów</h3>
	</div>
	<div id="liga">
			<?php
				$polaczenie = mysqli_connect("localhost","root","","egzamin7");
				$zapytanie = mysqli_query($polaczenie,'SELECT zespol, punkty, grupa from liga order by punkty desc;');
				while($r = mysqli_fetch_array($zapytanie))
				{
					echo '<div id="lig"><h2>'.$r[0].'</h2>'.'<h1>'.$r[1].'</h1>'.'<p>'.'Grupa: '.$r[2].'</p>'.'</div>';
				}
				mysqli_close($polaczenie);
			?>	
	</div>
</body>
</html>
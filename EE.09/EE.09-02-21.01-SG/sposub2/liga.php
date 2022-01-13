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
				require("connect.php");
				if(isset($_POST['wybur']))
				{
					$wybur = $_POST['wybur'];
					$qr="SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id like $wybur";
					$result = $conn->query($qr);
					while($r = $result->fetch_array())
					{
						echo "<li>".$r[0]." ".$r[1]."</li>";
					}
				}
				mysqli_close($conn);
			?>
		</ol>
	</div>
	<div id="glowny">
		<h3>Liga Mistrzów</h3>
	</div>
	<div id="liga">
		<?php
			require("connect.php");
			$qr='SELECT zespol, punkty, grupa from liga order by punkty desc;';
			$result = $conn->query($qr);
			while($r = $result->fetch_array())
			{
				echo '<div id="lig"><h2>'.$r[0].'</h2>'.'<h1>'.$r[1].'</h1>'.'<p>'.'Grupa: '.$r[2].'</p>'.'</div>';
			}
			mysqli_close($conn);
		?>	
	</div>
</body>
</html>
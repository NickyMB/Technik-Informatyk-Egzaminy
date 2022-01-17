<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styl4.css">
	<title>Restauracja Kulinaria.pl</title>
</head>
<body>
	<div class="baner">
		<h2>Restauracja Kulinaria.pl Zaprasza!</h2>
	</div>
	<div class="lewy">
		<p>
			Dania mięsne zamówisz już od  
			<?php 
				$polonczenie = mysqli_connect('localhost','root','','baza');
				$zapytanie = mysqli_query($polonczenie, "SELECT MIN(cena) FROM dania WHERE typ=2");
				while ($r = mysqli_fetch_array($zapytanie))
				{
					echo $r[0];
				}
			?>
			złotych
		</p>
		<img src="menu.jpg" alt="Pyszne spaghetti"><br>
		<a href="menu.jpg">Pobierz obraz</a>
	</div>
	<div class="center">
		<h3>Przekąski</h3>
		<?php 
			$zapytanie = mysqli_query($polonczenie, "SELECT id, nazwa, cena FROM dania WHERE typ = 3");
			while ($r = mysqli_fetch_row($zapytanie))
			{
				echo '<p>'.$r[0].' '.$r[1].' '.$r[2].'</p>';
			}
		?>
	</div>
	<div class="prawy">
		<h3>Napoje</h3>
		<?php 
			$zapytanie = mysqli_query($polonczenie, "SELECT id, nazwa, cena FROM dania WHERE typ = 4");
			while ($r = mysqli_fetch_row($zapytanie))
			{
				echo '<p>'.$r[0].' '.$r[1].' '.$r[2].'</p>';
			}
			mysqli_close($polonczenie);
		?>
	</div>
	<div class="stopka">
		Stronę internetową opracował: <i>0123456789</i>
	</div>
</body>
</html>
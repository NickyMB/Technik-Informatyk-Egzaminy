<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style4.css">
	<title>Odżywianie zwierząt</title>
</head>
<body>
	<div id="baner">
		<h2>DRAPIEŻNIKI I INNE</h2>
	</div>
	<div id="form">
		<h3>Wybierz styl życia:</h3>
		<form action="index.php" method="POST">
			<select name="list">
				<option value="1">Drapieżniki</option>
				<option value="2">Roślinożerne</option>
				<option value="3">Padlinożerne</option>
				<option value="4">Wszytkożerne</option>
			</select>
			<input type="submit" value="Zobacz">
		</form>
	</div>
	<div id="glownyL">
		<h3>Lista zwierząt</h3>
		<ul>
		<?php
			$polonczenie =mysqli_connect('localhost','root','','baza');
		 	$zapytanie= mysqli_query($polonczenie,"SELECT zwierzeta.gatunek, odzywianie.rodzaj FROM zwierzeta INNER JOIN odzywianie ON odzywianie.id = zwierzeta.Odzywianie_id");
		 	while ($r=mysqli_fetch_array($zapytanie))
		 	{
		 		echo "<li>".$r[0]." ".$r[1]."</li>";
		 	}
		?>
		</ul>
	</div>
	<div id="glownyS">
		<?php
		 	if (isset($_POST['list']))
			{	
				$list = $_POST['list'];
		 		$zapytanie= mysqli_query($polonczenie,"SELECT zwierzeta.id, zwierzeta.gatunek, zwierzeta.wystepowanie FROM zwierzeta INNER JOIN odzywianie ON odzywianie.id = zwierzeta.Odzywianie_id WHERE zwierzeta.Odzywianie_id = $list ");		 
			   	if ($list == 1)
				{
			      echo "<h3>"."Drapieżniki"."</h3>";
			    }
			    else if ($list == 2)
			    {
			      echo "<h3>"."Roślinożerne"."</h3>";
			    }
			    else if ($list == 3)
			    {
			      echo "<h3>"."Padlinożerne"."</h3>";
			    }
			    else if ($list == 4)
			    {
			      echo "<h3>"."Wszytkożerne"."</h3>";
			    }
				while ($r=mysqli_fetch_array($zapytanie))
		 		{
		 			echo $r[0].", ".$r[1].", ".$r[2]."<br>";
		 		}	    
				mysqli_close($polonczenie);
			}
		?>
	</div>
	<div id="glownyP">
		<img src="drapieznik.jpg" alt="Wilki">
	</div>
	<div id="stopka">
		<a href="https://pl.wikipedia.org" target="blank">Poczytaj o zwierzętach na Wikipedii</a>
		autor strony: 00000000000
	</div>
</body>
</html>
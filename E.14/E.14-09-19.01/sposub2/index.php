<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Dane o zwierzętach</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
	<div id="baner">
		<h1>ATLAS ZWIERZĄT</h1>
	</div>
	<div id="form">
		<h2>Gromady</h2>
		<ol>
			<li>Ryby</li>
			<li>Płazy</li>
			<li>Gady</li>
			<li>Ptaki</li>
			<li>Ssaki</li>
		</ol>
		<form action="index.php" method="POST">
			Wybierz gromadę <input type="number" name="liczba" id="liczba">
			<input type="submit" value="WYŚWIETL">
		</form>
	</div>
	<div id="glownyL">
		<img src="zwierzeta.jpg" alt="dzikie zwierzęta">
	</div>
	<div id="glownyS">
		<?php 
			$conn=new mysqli('localhost','root','','egzamin8');
			if (isset($_POST['liczba']))
			{
				$liczba = $_POST['liczba'];
			   	if ($liczba == 1)
				{
      				echo "<h2>"."RYBY"."</h2>";
    			}
    			else if ($liczba == 2)
    			{
      				echo "<h2>"."PLAZY"."</h2>";
    			}
    			else if ($liczba == 3)
    			{
     				echo "<h2>"."GADY"."</h2>";
    			}
    			else if ($liczba == 4)
    			{
     				echo "<h2>"."PTAKI"."</h2>";
    			}
   				else if ($liczba == 5)
    			{
    				echo "<h2>"."SSAKI"."</h2>";
    			}
    			$qr="SELECT gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id = $liczba";
				$result = $conn->query($qr);
				while ($r = $result->fetch_array())
   				{
    				echo "<p>".$r[0]." ".$r[1]."</p>";
    			}
			}
			$conn->close();
		?>
	</div>
	<div id="glownyP">
		<h2>Wszystkie zwierzęta w bazie</h2>
		<?php
			$polonczenie =mysqli_connect('localhost','root','','egzamin8');
			$zapytanie= mysqli_query($polonczenie,"SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM zwierzeta INNER JOIN gromady WHERE zwierzeta.Gromady_id = gromady.id");
			while ($r=mysqli_fetch_array($zapytanie))
			{
				echo $r[0]." ".$r[1].","." ".$r[2]."<br>";
			}
			mysqli_close($polonczenie);
		?>
	</div>
	<div id="stopka">
		<a href="http://atlas-zwierzat.pl" target="_blank">Poznaj inne  strony o zwierzętach</a>
		Autor Atlasu zwierząt: 00000000000
	</div>

</body>
</html>
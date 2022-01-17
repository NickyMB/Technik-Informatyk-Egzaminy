<!DOCTYPE html>
<html>
<head>
	<title>Filmoteka</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>	
 	<div id="menu">
 		<img src="klaps.png" alt="Nasze filmy">
 	</div>

 	<div id="menu">
 		<h2>BAZA FILMÓW</h2>
 	</div>

 	<div id="menu">
 		<form action="index.php" method="POST">
            <select name="gatunek">
                <option value="1">Sci-Fi</option>
                <option value="2">animacja</option>
                <option value="3">dramat</option>
                <option value="4">horror</option>
                <option value="5">komedia</option>
            </select>
            <input type="submit" name="button" value="Filmy">
        </form>
 	</div>

 	<div id="menu">
 		 <img src="gwiezdneWojny.jpg" alt="szturmowcy">
 	</div>
 		<div id="lewy">
 			<h2>Wybrano filmy:</h2>
 			<?php 
 			$conn=new mysqli('localhost', 'root', '','dane');
            if (isset($_POST['gatunek'])) 
			{
 				$gatunek= $_POST['gatunek'];
 				$qr="SELECT tytul, rok, ocena FROM filmy WHERE gatunki_id=$gatunek";
 				$result = $conn->query($qr);
 				while ($r=$result->fetch_array())
 				{
 					 echo "<p>Tytuł: ".$r[0].", Rok produkcji: ".$r[1].", Ocena: ".$r[2];
 				}
			}
 			?>
 		</div>
 		<div id="prawy">
 			<h2>Wszystkie filmy</h2>
            <?php
            	$qr="SELECT filmy.id,filmy.tytul,rezyserzy.imie,rezyserzy.nazwisko FROM filmy INNER JOIN rezyserzy on filmy.rezyserzy_id=rezyserzy.id";
            	$result=$conn->query($qr);
            	while ($r=$result->fetch_array())
            	{
            	   echo "<p>".$r['id']."."." ".$r['tytul'].","." "."reżyseria:"." ".$r['imie']." ".$r['nazwisko']."</p>";
            	}
				$conn->close();
            ?>
 		</div>
 		<div id="stopka">
 			<p>Autor: arkuszepp.pl</p>
 			<a href="kwerendy.txt">Zapytania do bazy</a>
 			<a href="http://www.filmy.pl" target="_blank">Przejdź do filmy.pl</a>
 		</div>
</body>
</html>
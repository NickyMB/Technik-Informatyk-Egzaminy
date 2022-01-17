<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="styl.css" rel="stylesheet" type="text/css">
<title>Sklep papierniczy</title>
</head>
<body>
	<div id="baner">
	<h1>W naszym sklepie internetowym kupisz najtaniej</h1>
	</div>
	<div id="lewy">
		<h3>Promocja 15% obejmuje artykuły:</h3>
		<?php
			$conn=new mysqli('localhost','root','', 'sklep');
			$qr= 'SELECT nazwa FROM towary WHERE promocja = 1';
			$result=$conn->query($qr);
			echo("<ul>");
				while($r = $result->fetch_array())
				{
					echo "<li>" . $r[0] . "</li>";
				}
			echo("</ul>");
		?>
	</div>
	<div id="srodkowy">
		<h3>Cena wybranego artykułu w promocji</h3>
		<form action="index.php" method="post">
			<select name="lista" id="lista">
				<option id="opcja1">Gumka do mazania</option>
				<option id="opcja2">Cienkopis</option>
				<option id="opcja3">Pisaki 60 szt.</option>
				<option id="opcja4">Markery 4 szt.</option>
			</select>
			<input type="submit" id="WYBIERZ" title="WYBIERZ" value="WYBIERZ">
			<?php
				if(isset($_POST["lista"]))
				{
					$qr="SELECT cena FROM towary WHERE nazwa='$_POST[lista]'";
					$result=$conn->query($qr);
					$r=$result->fetch_array();
					echo "<br>".round($r["cena"]*0.85,2);
				}
				$conn->close();
			?>
		</form>
	</div>
	<div id="prawy">
		<h3>Kontakt</h3>
		<p>
		telefon :123123123
		<br>
		 e-mail <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
		</p>
   		<img src="promocja.png" width="200" height="180" alt="promocja"/> </div>
	<div id="stopka">
		<h4>Autor strony: 12345678912</h4>
	</div>
</body>
</html>
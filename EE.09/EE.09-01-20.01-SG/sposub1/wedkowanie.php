<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami!</h2>
    </div>
    <div id="lewy">
        <img src="ryba2.jpg" alt="Szczupak">
    </div>
    <div id="prawy">
        <h3>Ryby spokojnego żeru(białe)</h3>
        <?php
            $polonczenie = mysqli_connect("localhost","root","","wedkowanie");
            $zapytanie = mysqli_query($polonczenie,"SELECT id,nazwa, wystepowanie from ryby WHERE styl_zycia = 2");
            while( $r = mysqli_fetch_array($zapytanie))
            {
                echo $r[0].". ".$r[1]." występuje w: ".$r[2]."<br>";
            }
            mysqli_close($polonczenie);
        ?>
        <ol>
            <li><a href="https://wedkuje.pl/ " target="_blank">Odwiedź  także</a></li>
            <li><a href="http://www.pzw.org.pl/ " target="_blank">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    <div id="stopka">
        Stronę wykonał: 123456789
    </div>
</body>
</html>
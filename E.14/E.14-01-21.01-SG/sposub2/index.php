<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styl_1.css">
        <title>Podzespoły komputerowe</title>
    </head>
    <body>
        <div id="logo">
            <h1>Sklep Komputerowy</h1>
        </div>
        <div id="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">Ram</a>
            <a href="grafika.html">Grafika</a>
            <a href="hdd.html">HDD</a>
        </div>
        <div id="glowny">
            <h2>Lista aktualnie dostępnych podzespołów</h2><br>
            <table border="1">
                <tr>
                    <th>NAZWA PODSESPOŁU</th>
                    <th>OPIS</th>
                    <th>CENA</th>
                </tr>
                <!--Skrypt1-->
                <?php
                $conn=new mysqli("localhost","root","","sklep");
                $qr='SELECT nazwa , opis , cena from podzespoly WHERE dostepnosc = 1 ';
                $result=$conn->query($qr);
                while($r=$result->fetch_array())
                {
                    echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
        <div id="stopka1">
            <h3>Sklep Komputerowy</h3>
            <p>ul. Legnicka 61, Wrocław</p>
            <p>Współpracujemy z hurtownią <a href=" http://www.ddata.pl/" target="_blanc">ddata</a></p>
        </div>
        <div id="stopka2">
            <p>Stronę wykonał: 134567901</p>
        </div>
        <div id="stopka3">
            <p>zadzwoń do nas: 71 506 50 60</p>
        </div>
        <div id="stopka4">
            <img src="sklep.jpg" alt="sklep komputerowy">
        </div>
    </body>
</html>
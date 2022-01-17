<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza Pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="banerL">
        <img src="logo.png" alt="meteo">
    </div>
    <div class="banerS">
        <h1>Prognoza Dla Wrocławia</h1>
    </div>
    <div class="banerP">
        <p>maj, 2019r</p>
    </div>
    <div class="glowny">
        <table >
            <tr>
                <th>DATA</th>
                <th>TEMTERATURA W NOCY</th>
                <th>TEMTERATURA W DZIEŃ</th>
                <th>OPADY[MM/H]</th>
                <th>CIŚNIENIE[hPa]</th>
            </tr>
            <?php
                $conn = new mysqli("localhost","root","","prognoza");
                $qr = "SELECT * FROM pogoda ORDER BY pogoda.data_prognozy ASC";
                $result= $conn->query($qr);
                while($r=$result->fetch_array())
                {
                    echo
                    "
                    <tr>
                        <td>$r[2]</td>
                        <td>$r[3]</td>
                        <td>$r[4]</td>
                        <td>$r[5]</td>
                        <td>$r[6]</td>
                    </tr>
                    ";
                }
                $conn->close();
            ?>
        </table>
    </div>
    <div class="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>
    <div class="prawy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="stopka">
        Stronę wykonał:0123456789
    </div>
</body>
</html>
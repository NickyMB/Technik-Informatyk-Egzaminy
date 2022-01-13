<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner-lewy">
        <p>maj, 2019 r.</p>
    </div>
    <div id="baner-srodek">
        <h2>Prognoza dla Poznania</h2>
    </div>
    <div id="baner-prawy">
        <img src="logo.png" alt="prognoza">
    </div>
    <div id="lewy">
        <a href="kwerendy.txt">Kwerendy</a>
    </div>
    <div id="prawy">
        <img src="obraz.jpg" alt="Polska,Poznań">
    </div>
    <div id="glowny">
        <table border="1">
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE[hPa]</th>
            </tr>
            <?php
                require("connect.php");
                $qr='SELECT * FROM pogoda where miasta_id = 2 order by data_prognozy desc';
                $result= $conn->query($qr);
                while($r= $result->fetch_array())
                {
                    echo "<tr>";
                    echo "<td>".$r[0]."</td>";
                    echo "<td>".$r[2]."</td>";
                    echo "<td>".$r[3]."</td>";
                    echo "<td>".$r[4]."</td>";
                    echo "<td>".$r[5]."</td>";
                    echo "<td>".$r[6]."</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
            ?>
        </table>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 0123456789</p>
    </div>
</body>
</html>
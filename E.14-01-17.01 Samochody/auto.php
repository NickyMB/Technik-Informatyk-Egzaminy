<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <div id="baner">
        <h1>SAMOCHODY</h1>
    </div>
    <div id="lewy">
        <h2>Wykaz samochodów</h2>
        <ul>
        <?php
                $polonczenie = mysqli_connect("localhost","root","","komis");
                $zapytanie = mysqli_query($polonczenie,"SELECT id , marka , model FROM samochody");
                while($r = mysqli_fetch_array($zapytanie))
                {
                   echo "<li>";
                  echo $r[0]." ".$r[1]." ".$r[2];
                  echo "</li>";
               }
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
        <?php
            $zapytanie = mysqli_query($polonczenie,"SELECT samochody_id , klient from zamowienia");
           while($r = mysqli_fetch_array($zapytanie))
            {
                echo "<li>";
                echo $r[0]." ".$r[1];
                echo "</li>";
            }
        ?>
        </ul>
    </div>
    <div id="prawy">
        <h2>Pełne danie: Fiat</h2>
        <?php
            $zapytanie = mysqli_query($polonczenie,'SELECT * from samochody WHERE marka = "fiat"');
            while($r = mysqli_fetch_array($zapytanie))
            {
                echo $r[0]." / ".$r[1]."  /".$r[2]." / ".$r[3]." / ".$r[4]." / ".$r[5]."<br>";
            }
            mysqli_close($polonczenie);
        ?>
    </div>
    <div id="stopka">
        <table>
            <tr>
                <td><a href="kwerendy.txt">Kwerendy</a></td>
                <td>Autor:000000</td>
                <td><img src="auto.png"></td>
            </tr>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl3.css">
    <title>Video On Demand</title>
</head>
<body>
    <div id="baner1">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id="baner2">
        <table border="1">
            <tr>
                <th>Kryminał</th>
                <th>Horror</th>
                <th>Przygodowy</th>
            </tr>
            <tr>
                <td>
                    20
                </td>
                <td>
                    30
                </td>
                <td>
                    20
                </td>
            </tr>
        </table>
    </div>
    <div id="Polecamy">
        <h3>Polecamy</h3>
        <!--skrypt1-->
        <?php
            $polonczenie=mysqli_connect("localhost","root","","dane3");
            $zapytanie=mysqli_query($polonczenie,"SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id=18 || id=22 || id=23|| id=25");
            while($r=mysqli_fetch_array($zapytanie))
            {
                echo "<div id='skrypt1'> 
                <h4>$r[0].$r[1]</h4>
                <img src='$r[3]' alt='film'>
                <p>$r[2]</p>
                </div>";
            }
        ?>
    </div>
    <div id="Fantastyczne">
        <h3>Filmy fantastyczne</h3>
        <!--skrypt2-->
        <?php
            $zapytanie=mysqli_query($polonczenie,"SELECT id, nazwa, zdjecie, opis FROM produkty WHERE Rodzaje_id=12");
            while($r=mysqli_fetch_array($zapytanie))
            {
                echo "<div id='skrypt1'> 
                <h4>$r[0].$r[1]</h4>
                <img src='$r[2]' alt='film'>
                <p>$r[3]</p>
                </div>";
            }
        ?>
    </div>
    <div id="stopka">
        <form action="video.php" method="post">
            Usuń film nr.:<input type="number" name="liczba" id="liczba">
            <input type="submit" value="Usuń film">
        </form>
        <?php
           if(isset($_POST["liczba"]))
           {
               $liczba=$_POST["liczba"];
               $zapytanie=mysqli_query($polonczenie,"DELETE FROM produkty WHERE id=$liczba");
           }
            mysqli_close($polonczenie);
        ?>
        Stronę wykonał:
        <a href="mailto:ja@poczta.com">1234567890</a>
    </div>
</body>
</html>
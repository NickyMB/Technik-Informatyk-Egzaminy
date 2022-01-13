<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="banerL">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div class="banerP">
        <ol>
            <li>Warzwa</li>
            <li>Owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">Soki</a></li>
        </ol>
    </div>
    <div class="glowny">
        <!--sktypt1-->
        <?php
            require("connect.php");
            $qr="SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE produkty.Rodzaje_id = 1 || produkty.Rodzaje_id = 2";
            $result = $conn -> query($qr);
            while ($r = $result->fetch_array())
            {
                echo
                "   <div class='gen'>
                        <img src='$r[4]' alt='warzywniak'>
                        <p>opis: $r[2]</p>
                        <p>na stanie: $r[1]</p>
                        <h2>$r[3]zł</h2>
                    </div>
                ";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div class="stopka">
        <form action="" method="post">
            Nazwa: <input type="text" name="nazwa" id="nazwa">
            Cena: <input type="number" name="cena" id="cena">
            <input type="submit" value="Dodaj produkt"><br>
            Stronę wykonał: 1234567890
        </form>
        <!--sktypt2-->
        <?php
            require("connect.php");
            if(isset($_POST['nazwa']) && isset($_POST['cena']))
            {
                $nazwa = $_POST['nazwa'];
                $cena = $_POST['cena'];
                $qr="INSERT INTO produkty(Rodzaje_id, Producenci_id, nazwa, ilosc, opis, cena, zdjecie) VALUES (1,4,'$nazwa',10,'',$cena,'owoce.jpg')" ;
                $conn->query($qr);
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>
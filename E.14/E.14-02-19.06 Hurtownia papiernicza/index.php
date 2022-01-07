<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Hurtownia papiernicza</title>
</head>
<body>
    <div class="baner">
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </div>
    <div class="lewy">
        <h3>Ceny wybranych artykułów w hurtowni:</h3>
        <table border="1">
            <?php
                $polonczenie = mysqli_connect("localhost","root","","sklep");
                $zapytanie = mysqli_query($polonczenie,"SELECT nazwa, cena FROM towary LIMIT 4 ");
                while ($r = mysqli_fetch_array($zapytanie))
                {
                    echo"<tr>
                            <td>$r[0]</td>
                            <td>$r[1]</td>
                        </tr>";
                }
            ?>
        </table>
    </div>
    <div class="srodek">
        <h3>Ile będą kosztować Twoje zakupy?</h3>
        <form action="" method="post">
            wybierz artykuł input
            <select name="lista" id="lista">
                <option>Zeszyt 60 kartek</option>
                <option>Zeszyt 32 kartki</option>
                <option>Cyrkiel</option>
                <option>Linijka 30 cm</option>
                <option>Ekierka</option>
                <option>Linijka 50 cm</option>
            </select>
            <br>
            liczba sztuk: <input type="number" name="liczba" class="liczba" id="liczba" min="1">
            <br>
            <input type="submit" value="oblicz">
        </form>
        <?php
            if (!empty($_POST["liczba"]))
            {
                $lista = $_POST["lista"];
                $liczba = $_POST["liczba"];
                $zapytanie = mysqli_query($polonczenie,"SELECT cena FROM towary WHERE nazwa LIKE '$lista'");
                    while($r= mysqli_fetch_array($zapytanie))
                    {
                        $suma = $r[0] * $liczba;
                        echo $suma;
                    }
            }
            mysqli_close($polonczenie);
        ?>
    </div>
    <div class="prawy">
        <img src="zakupy2.png" alt="hurtownia">
        <br>
        <h3>Kontakt</h3>
        <p>
            telefon: <br>
            111222333<br>
            e-mail: <br>
            <a href="mailto:hurt@wp.pl">hurt@wp.pl</a>
        </p>
        
    </div>
    <div class="stopka">
        <h4>Witrynę wykonał 0123456789</h4>
    </div>
</body>
</html>
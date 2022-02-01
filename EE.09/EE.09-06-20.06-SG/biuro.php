<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Wycieczki krajoznawcze</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <div class="banner">
            <h1>WITAMY W BIURZE PODRÓŻY</h1>
        </div>
        <div class="dane">
            <h3>ARCHIWUM WYCIECZEK</h3>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "egzamin4");
                $qr = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0;";
                $result = $conn->query($qr);
				while($r = $result->fetch_array())
                {
                    echo "$r[0]. $r[1], cena: $r[2]<br/>";
                }
            ?>
        </div>
        <div id="container">
            <div class="lewy">
                <h3>NAJTANIEJ...</h3>
                <table>
                    <tr>
                        <td>Włochy</td>
                        <td>od 1200 zł</td>
                    </tr>
                    <tr>
                        <td>Francja</td>
                        <td>od 1200 zł</td>
                    </tr>
                    <tr>
                        <td>Hiszpania</td>
                        <td>od 1400 zł</td>
                    </tr>
                </table>
            </div>
            <div class="srodek">
                <h3>TU BYLIŚMY</h3>
                <?php
                    $qr = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
                    $result = $conn->query($qr);
				    while($r = $result->fetch_array())
                    {
                        echo "<img src='$r[0]' alt='$r[1]'>";
                    }
                ?>
            </div>
            <div class="prawy">
                <h3>SKONTAKTUJ SIĘ</h3>
                <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
                <p>telefon: 555666777</p>
            </div>
        </div>
        <div class="stopka">
            <p>Stronę wykonał: 0123456789</p>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>Postal Społecznościowy - moje konto</h1>
    </div>
    <div class="glowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>Muzyka</li>
            <li>Film</li>
            <li>Komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            require("connect.php");
            $qr="SELECT imie, nazwisko,opis, zdjecie FROM osoby WHERE Hobby_id = 1 || Hobby_id = 2 || Hobby_id = 6";
            $result = $conn->query($qr);
            while ( $r = $result->fetch_array())
            {
                echo "
                    <div class='Zdjecie'>
                        <img src='$r[3]' alt='przyjaciel'>
                    </div>
                    <div class='opis'>
                        <h3>$r[0] $r[1]</h3>
                        <p>Ostatni wpis: $r[2]</p>
                    </div>
                    <div class='linia'>
                        <hr>
                    </div>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div class="stopka1">
        Stronę wykonał:0123456789
    </div>
    <div class="stopka2">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl4.css">
    <title>Panel Administratora</title>
</head>
<body>
    <div id="baner">
        <h3>Portal  Społecznościowy -panel administratora</h3>
    </div>
    <div id="lewy">
        <h4>Użytkownicy</h4>
        <!-- skrypt1-->
        <?php
            $polonczenie = mysqli_connect("localhost","root","","dane4");
            $zapytanie = mysqli_query($polonczenie,"SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby limit 30");
            while($r=mysqli_fetch_array($zapytanie))
            {
                $wiek = 2021-$r[3];
                echo "$r[0]. $r[1] $r[2], $wiek lat<br>";
            }
        ?>
        <a href="settings.html">Inne ustawienia</a>
    </div>
    <div id="prawy">
        <h4>Podaj id użytkownika</h4>
    <form action="users.php" method="post">
        <input type="number" name="liczba" id="liczba">
        <input type="submit" value="ZOBACZ" id="guzik" name="guzik">
        <hr>
        <!--skrypt2-->
        <?php
            if(isset($_POST["liczba"]))
            {
                $liczba = $_POST["liczba"];
                $zapytanie = mysqli_query($polonczenie,"SELECT imie, nazwisko, rok_urodzenia, zdjecie, nazwa, opis from osoby JOIN hobby ON osoby.Hobby_id = hobby.id WHERE osoby.id= $liczba");
                while($r=mysqli_fetch_array($zapytanie))
                {
                    echo
                    "
                    <h2>$liczba. $r[0] $r[1]</h2>
                    <br>
                    <img src='$r[3]' alt='$liczba'>
                    <p>Rok urodzenia: $r[2] </p>
                    <p>Opis: $r[5] </p>
                    <p>Hobby: $r[4] </p>
                    ";
                }
                mysqli_close($polonczenie);
            }   
       ?>
    </form>
    </div>
    <div id="stopka">
        Stronę wykonał: 13245674980
    </div>
</body>
</html>
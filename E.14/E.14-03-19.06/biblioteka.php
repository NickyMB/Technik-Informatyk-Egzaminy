<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka miejska</title>
</head>
<body>
    <div class="baner">
        <h3>Miejska  Biblioteka  Publiczna w Książkowicach</h3>
    </div>
    <div class="lewy">
        <h3>W  naszych  zbiorach  znajdziesz  dzieła  następujących autorów:</h3>
        <ul>
            <?php
                $polonczenie = mysqli_connect("localhost", "root", "","biblioteka");
                $zapytanie = mysqli_query($polonczenie,"SELECT imie , nazwisko FROM autorzy");
                while ($r = mysqli_fetch_array($zapytanie))
                {
                    echo "<li>".$r[0]." ".$r[1]."</li>";
                }
            ?>
        </ul>
    </div>
    <div class="srodek">
        <h3>Dodaj nowego czytelnika</h3>
        <form method="post" action="">
            imię: <input type="text" name="imie" id="imie"><br>
            nazwisko: <input type="text" name="nazwisko" id="nazwisko"><br>
            rok urodzenia: <input type="number" name="rok" id="rok"><br>
            <input type="submit" value="DODAJ">
        </form>
        <?php
            if(isset($_POST['imie']) && $_POST['nazwisko'])
            {
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $rok = $_POST['rok'];
                $kod =  strtoupper(substr($imie,0,2).substr($nazwisko,0,2)).substr($rok,-0,2);
                echo "Czytelnik $imie $nazwisko został dodany do bazy danych";
                $zapytanie = mysqli_query($polonczenie,"INSERT INTO czytelnicy( imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$kod')");
            }
            mysqli_close($polonczenie);
        ?>
    </div>
    <div class="prawy">
        <img src="biblioteka.png" alt="książki"><br>
        <h4>ul. Czytelnicza 25<br>
        12-120 Książkowice<br>
        tel.: 123123123<br>
        e-mail: <a href="mailto:biuro@biblioteka.pl">biuro@biblioteka.pl</a></h4>
    </div>
    <div class="stopka">
        <p>Projekt strony: 0123456789</p>
    </div>
</body>
</html>
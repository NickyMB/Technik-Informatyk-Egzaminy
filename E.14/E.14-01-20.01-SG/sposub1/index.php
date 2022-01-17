<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styl8.css">
        <title>Nasz sklep komputerowy</title>
    </head>

    <body>

    <header>
        <div id="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">RAM</a>
            <a href="grafika.html">Grafika</a>
        </div>

        <div id="logo">
            <h2>Podzespoły komputerowe</h2>
        </div>
    </header>
    
    <main>
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>

            <?php
                $polonczenie = mysqli_connect("localhost","root","","sklep");
                $zapytanie = mysqli_query($polonczenie,"SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena < 1000");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                    echo "<tr>";
                    echo "<td>".$wiersz['id']."</td>";
                    echo "<td>".$wiersz['nazwa']."</td>";
                    echo "<td>".$wiersz['opis']."</td>";
                    echo "<td id='align'>".$wiersz['cena']."</td>";
                    echo "</tr>";
                }

                mysqli_close($polonczenie);
            ?>

        </table>
    </main>

    <footer>
        <div id="stopka">
            <img src="scalak.jpg" alt="promocje na procesory">
        </div>
        <div id="stopka">
            <h4>Nasz Sklep Komputerowy</h4>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl" target="_blank">edata</a></p>
        </div>
        <div id="stopka">
            <p>Zadzwoń: 601 602 603</p>
        </div>
        <div id="stopka">
            <p>Stronę wykonał: PESEL</p>
        </div>
    </footer>

    </body>

</html>
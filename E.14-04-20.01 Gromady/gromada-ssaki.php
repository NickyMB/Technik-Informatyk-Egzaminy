<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style12.css">
    <title>Gromady ssaków</title>
</head>
<body>
    <div id="menu">
        <a href="gromada-ryby.php">gromada ryb</a>
        <a href="gromada-ptaki.php">gromada ptaków</a>
        <a href="gromada-ssaki.php">gromada ssaków</a>
        <a href="gromady.php">gromada kręgowców</a>
    </div>
    <div id="logo">
        <h2>GROMADY SSAKÓW</h2>
    </div>
    <div id="glownyL">
        <!--scrypt1-->
        <?php
            $polonczenie = mysqli_connect('localhost','root','','egzamin5');
            $zapytanie = mysqli_query($polonczenie,'select id, Gromady_id, gatunek, wystepowanie from zwierzeta where Gromady_id = 5');
            while ($r = mysqli_fetch_array($zapytanie))
            {
                if($r[1]==5)
                {
                    $gromada = "ssaki";
                }
                echo "<p>".$r[0]. ".".$r[2]."</p><p>Występowanie: ".$r[2].", gromada ".$r[1]." ,".$gromada."</p><hr>";
            }
        ?>
    </div>
    <div id="glownyP">
        <h1>SSAKI</h1>
        <ol>
            <!--scrypt2-->
            <?php
                $polonczenie = mysqli_connect('localhost','root','','egzamin5');
                $zapytanie = mysqli_query($polonczenie,'SELECT gatunek , obraz from zwierzeta where gromady_id = 5');
                while ($r = mysqli_fetch_array($zapytanie))
                {
                    echo "<a href='$r[1]' target='_blank'><li>$r[0]</li></a>";
                }
                mysqli_close($polonczenie);
            ?>
        </ol>
        <img src="wilk.jpg" alt="Sroka zwyczajna, gromada ptaki">  
    </div>
    <div id="stopka">
        Stronę o kręgowcach przygotował: 1234567890
    </div>
</body>
</html>
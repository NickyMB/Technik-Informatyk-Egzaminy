<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="gorny-lewy">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div class="gorny-prawy">
        <h1>KALENDARZ</h1>
        <p>miesiąc: lipiec, rok:2020</p>
    </div>
    <div class="glowny">
        <?php
            require("connect.php");
            $qr = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'lipiec'";
            $result = $conn->query($qr);
            while($r = $result->fetch_array())
            {
                echo '<div class="gen">';
                echo "<h6>$r[0], $r[1]</h6>";
                echo "<p>$r[2]</p>";
                echo '</div>';
            }
            mysqli_close($conn);
        ?>
    </div>
    <?php
        require("connect.php");
        if (isset($_POST['wydarzenie']))
        {
            $wydarzenie = $_POST['wydarzenie'];
            $qr="UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
            $conn->query($qr);
            mysqli_close($conn);
        }
    ?> 
    <div class="stopka">
        <form action="kalendarz.php" method="POST">
            <p for="wpis">dodaj wpis:<input type="text" name="wydarzenie"> <button type="submit">DODAJ</button></p>
            <p>Stronę wykonał: 0132456789</p>
        </form>
    </div>
</body>
</html>






















<!-- Jan Kupczyk -->
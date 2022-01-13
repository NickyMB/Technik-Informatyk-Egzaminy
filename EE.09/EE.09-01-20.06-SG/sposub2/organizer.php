<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styl6.css">
        <title>Organizer</title>
    </head>
    <body> 
        <div id="baner1">
            <h1>Mój organizer</h1>
        </div>
        <div id="baner2">
            <form method="POST" action="organizer.php">
                Wpis wydarzenia:
                <input type="text" name="wpis" id="wpis">
                <input type="submit" value="ZAPISZ">
            </form>
        </div>
        <div id="baner3">
            <img src="logo2.png" alt="Mój organizer">
        </div>
        <id id="glowny">
            <?php
                require("connect.php");
                if(isset($_POST['wpis']))
                {
                    $wpis = $_POST['wpis'];
                    $qr="UPDATE zadania SET wpis='$wpis' where dataZadania = '2020-08-27'";
                    $conn->query($qr);
                }
               $qr='SELECT dataZadania , miesiąc , wpis FROM zadania WHERE miesiąc LIKE "sierpień"';
               $result= $conn->query($qr);
               while($r = $result->fetch_array())
               {
                   echo
                   "
                        <div id='dzien'>
                            <h6> $r[0] , $r[1]</h6> 
                            <p> $r[2] </p>
                        </div> 
                    ";
               }
               mysqli_close($conn);
            ?>
        </id>
        <div id="stopka">
            <?php
                require("connect.php");
                $qr='SELECT miesiąc, rok FROM zadania WHERE dataZadania="2020-08-01" limit 1';
                $result=$conn->query("$qr");
                while($r = $result->fetch_array())
                {
                    echo "<h1> miesiąc: $r[0] ,rok:  .$r[1]</h1>";
                }
                mysqli_close($conn)
            ?>
            <p>Stronę wykonał: 0123456789</p>
        </div>
    </body>
</html>
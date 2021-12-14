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
    <section id="glowny">
        <!-- skrypt1-->
        <?php
            $polonczenie = mysqli_connect("localhost","root","","egzamin6");
            if(isset($_POST['wpis']))
            {
                $wpis = $_POST['wpis'];
                mysqli_query($polonczenie,"UPDATE zadania SET wpis='$wpis' where dataZadania = '2020-08-27'");
            }
           $zapytanie = mysqli_query($polonczenie,'SELECT dataZadania , miesiąc , wpis FROM zadania WHERE miesiąc LIKE "sierpień"');
           while($r = mysqli_fetch_array($zapytanie))
           {
               print
               "
                    <div id='dzien'>
                        <h6> $r[0] , $r[1]</h6> 
                        <p> $r[2] </p>
                    </div> 
                ";
           }
        ?>
    </section>
    <div id="stopka">
        <!-- skrypt2-->
        <?php
            $zapytanie = mysqli_query($polonczenie,'SELECT miesiąc, rok FROM zadania WHERE dataZadania="2020-08-01" limit 1');
            while($r = mysqli_fetch_array($zapytanie))
            {
                print "<h1> miesiąc: $r[0] ,rok:  .$r[1]</h1>";
            }
            mysqli_close($polonczenie)
        ?>
        <p>Stronę wykonał: 134567901</p>
    </div>
</body>
</html>
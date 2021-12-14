<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl3.css">
    <title>Twoje BMI</title>
</head>
<body>
    <div id="logo">
        <img src="wzor.png" alt="wzór BMI">
    </div>
    <div id="baner">
        <h1>Oblicz swoje BMI</h1>
    </div>
    <div id="glowny">
        <table>
            <tr id="wiersz">
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
           </tr>
            <tr>
                <?php
                   $polonczenie = mysqli_connect("localhost","root","","egzamin4");
                   $zapytanie = mysqli_query($polonczenie,"SELECT informacja ,bmi.wart_min , bmi.wart_max from bmi");
                    while($r = mysqli_fetch_array($zapytanie))
                    {
                        echo "<tr>";
                        echo "<td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
    </div>
    <div id="lewy">
        <h2>Podaj wagę i wzrost</h2>
        <form method="post" action="bmi.php">
            Waga: <input type="number" min="1" id="waga" name="waga"><br>
            Wzrost w cm: <input type="number" min="1" id="wzrost" name="wzrost"><br>
            <input type="submit" value="Oblicz i zapamięraj wynik">
        </form>
        <?php
            if(isset($_POST['waga']) && isset($_POST['wzrost']))
            {
                $waga= $_POST['waga'];
                $wzrost= $_POST['wzrost'];
                $data='"'.date("Y-m-d").'"';
                $suma = $waga/($wzrost*$wzrost)*10000;
                echo "twoja waga: ".$waga."; Twój wzrost: ".$wzrost."<br> BMI wynosi: ".$suma;
                $wynik = round($suma,0);
                if($wynik <=18 && $wynik >= 0)
                {
                    $i = 1;
                }
                else if($wynik <=25 && $wynik >= 19)
                {
                    $i = 2;
                }
                else if($wynik <=30 && $wynik >= 26)
                {
                    $i = 3;
                }
                else if($wynik <=100 && $wynik >= 31)
                {
                    $i = 4;
                }  
                mysqli_query($polonczenie,"INSERT INTO wynik (id, bmi_id, data_pomiaru, wynik) VALUES (null,$i,$data,$suma)");
            }
            mysqli_close($polonczenie);
        ?>
    </div>
    <div id="prawy">
        <img src="rys1.png" alt="ćwiczenia">
    </div>
    <div id="stopa">
        Autor: 1234567890
        <a href="kwerendy.txt">Zobacz kwerendy</a>
    </div>
</body>
</html>
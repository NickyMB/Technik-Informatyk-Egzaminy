<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl4.css">
    <title>Twój wskaźnik BMI</title>
</head>
<body>
    <div class="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </div>
    <div class="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </div>
    <div class="lewy">
        <img src="rys1.png" alt="zrzuć kalorie">
    </div>
    <div class="prawy">
        <h1>Podaj dane</h1><br>
        <form action="" method="post">
            Waga: <input type="number" id="Waga" name="Waga"><br>
            Wzrost: <input type="number" id="wzrost" name="wzrost"><br>
            <input type="submit" value="Licz BMI i zapisz wynik">
        </form>
        <?php
            $polonczenie=mysqli_connect("localhost","root","","BMI");
            if(!empty($_POST['Waga']) && !empty($_POST['wzrost']))
            {
                $Waga= $_POST['Waga'];
                $wzrost= $_POST['wzrost'];
                $data = date('Y-m-d');
                $bmi=$Waga/($wzrost*$wzrost)*10000;
                echo "twoja waga: ".$Waga."; Twój wzrost: ".$wzrost."<br> BMI wynosi: ". $bmi;
                if($bmi <=18)
                {
                    $i = 1;
                }
                else if($bmi <=25 && $bmi >= 19)
                {
                    $i = 2;
                }
                else if($bmi <=30 && $bmi >= 26)
                {
                    $i = 3;
                }
                else if($bmi >= 31)
                {
                    $i = 4;
                }  
                mysqli_query($polonczenie,"INSERT INTO wynik(bmi_id, data_pomiaru, wynik) VALUES ('$i','$data','$bmi')");
            }
        ?>
    </div>
    <div class="glowny">
        <table>
            <tr>
                <th>Lp.</th>
                <th>Interpretacja</th>
                <th>Zaczyna się od...</th>
            </tr>
            <?php
                $zapytanie = mysqli_query($polonczenie,"SELECT id, informacja, wart_min FROM bmi");
                while($r = mysqli_fetch_array($zapytanie))
                {
                    echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td></tr>";
                }
            ?>
        </table>
    </div>
    <div class="stopka">
        Autor: 0123456789
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </div>
</body>
</html>
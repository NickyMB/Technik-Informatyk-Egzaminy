<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="baner1">
        <h1>Nasze osiedle</h1>
    </div>
    <div class="baner2">
        <?php
            $conn=new mysqli('localhost','root','','portal');
            $qr="select count(*) from dane";
            $result=$conn->query($qr);
            while($r=$result->fetch_array())
            {
                echo "<h5>Liczba użytkowników portalu: {$r['count(*)']}</h5>";
            }
        ?>
    </div>
    <div class="lewy">
        <h3>Logowanie</h3>
        <form method="post">
            login:<br>
            <input type="text" name="login"><br>
            hasło:<br>
            <input type="password" name="haslo"><br>
            <input type="submit" value="Zaloguj" name="btn">
        </form>
    </div>
    <div class="prawy">
        <h3>Wizytówka</h3>
            <?php
                if(!empty($_POST['login']) && !empty($_POST['haslo']))
                {
                    $qr="SELECT haslo from uzytkownicy where login=\"{$_POST['login']}\"";
                    $result=$conn->query($qr);
                    if(mysqli_num_rows($result)==0)
                    {
                        echo "login nie istnieje";
                    }
                    else
                    {
                        $haslo=$_POST['haslo'];
                        $haslo=sha1($haslo);
                        $login=$_POST['login'];
                        if($result->num_rows==1)
                        {
                            while($r=$result->fetch_assoc())
                            {
                                if($haslo==$r['haslo'])
                                {
                                    $qr="select u.login, d.rok_urodz, d.przyjaciol, d.hobby, d.zdjecie from uzytkownicy u join dane d on d.id=u.id where u.login=\"{$login}\"";
                                    $result=$conn->query($qr);
                                    while($r=$result->fetch_array())
                                    {
                                        $wiek=2022-$r[1];
                                        echo "<div class='wizytowka'>";
                                        echo "<img src=\"{$r[4]}\" alt='osoba'>";
                                        echo "<h4>{$r[0]} ({$wiek})</h4>";
                                        echo "<p>hobby: {$r[3]}</p>";
                                        echo "<h1><img src='icon-on.png'>{$r[2]}</h1>";
                                        echo "<a href='dane.html'><button>Więcej informacji</button></a>";
                                        echo "</div>";
                                    }
                                }
                                else
                                echo "hasło nieprawidłowe";
                            }
                        }
                    }
                }
                $conn->close();
            ?>
    </div>
    <div class="stopka">
        Stronę wykonał: 0123456789
    </div>
</body>
</html>
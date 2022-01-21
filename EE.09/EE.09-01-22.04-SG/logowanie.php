<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div class='baner'>
        <h1>Portal społecznościowy</h1>
    </div>
    <div class='lewy'>
        <img src="obraz.jpg" alt="foksterier">
    </div>
    <div class='prawy'>
        <h2>Zapisz się</h2>
        <form method='post'>
            login:&nbsp;<input name='login'>
            <br>
            hasło:&nbsp;<input type="password" name='haslo'>
            <br>
            powtórz hasło:&nbsp;<input type='password' name='powhaslo'>
            <br>
            <button type='submit'>Zapisz</button>
        </form>
        <?php
            $conn = new mysqli('localhost', 'root', '', 'psy');
            if (!empty($_POST['login']) && !empty($_POST['haslo']) && !empty($_POST['powhaslo'])) 
            {
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];
                $powhaslo = $_POST['powhaslo'];
                $sprawdz = 0;
                $qr = 'SELECT login FROM uzytkownicy';
                $result=$conn->query($qr);
                while ($r = $result->fetch_array())
                {
                    if ($r[0] == $login)
                    {
                        echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                        $sprawdz = 1;
                        break;
                    }
                }
                if ($haslo != $powhaslo) 
                {
                    echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                    $sprawdz = 1;
                }
                if ($sprawdz == 0) 
                {
                    $szyfr = sha1($haslo);
                    $qr = "INSERT INTO uzytkownicy (login, haslo) VALUES ('" . $login . "','" . $szyfr . "')";
                    if ($conn->query($qr) === TRUE) 
                    {
                        echo "<p>Konto zostało dodane</p>";
                    }
                }
            }
            else 
            {
                echo "<p>wypełnij wszystkie pola</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class='prawy'>
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div class='stopka'>Stronę wykonał: 0123456789</div>
</body>
</html>
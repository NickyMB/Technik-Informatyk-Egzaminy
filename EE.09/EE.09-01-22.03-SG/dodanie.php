<?php
    $conn=new mysqli("localhost", "root", "", "ee09");
    $nrkaretki=$_POST["nrkaretki"];
    $ratownik1=$_POST["ratownik1"];
    $ratownik2=$_POST["ratownik2"];
    $ratownik3=$_POST["ratownik3"];
    $qr="INSERT INTO ratownicy(nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ($nrkaretki,'$ratownik1','$ratownik2','$ratownik3')";
    $result=$conn->query($qr);
    echo "Do bazy zostało wysłane zapytanie: INSERT INTO ratownicy(nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ($nrkaretki,'$ratownik1','$ratownik2','$ratownik3')";
    $conn->close();
?>
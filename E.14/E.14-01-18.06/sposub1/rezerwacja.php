<?php
    $data = $_POST['data'];
    $ile = $_POST['ile'];
    $numer = $_POST['numer'];

    $polonczenie=mysqli_connect("localhost","root","","baza");
    $zapytanie = mysqli_query($polonczenie,"INSERT INTO rezerwacje(id, nr_stolika, data_rez, liczba_osob, telefon) VALUES ('','','$data','$ile','$numer')");
    
    echo "<h1>Dodano rezerwację do bazy!</h1>";
    echo "<p>Zamówienie w dniu <strong>$data</strong> na <strong>$ile</strong> osób, telefon kontaktowy to <strong>$numer</strong></p>";

    if( empty($_POST["osobowe"]) ) 
    {
        echo "<strong>Nie wyraziłeś/aś zgody na przetwarzanie danych osobowych</strong>"; 
    }
    else
    { 
        echo "<strong>Wyraziłeś/aś zgodę na przetwarzanie danych osobowych</strong>"; 
    }
    mysqli_close($polonczenie)
?>

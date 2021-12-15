<?php
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];
    $polonczenie = mysqli_connect("localhost","root","","wedkarstwo");
    $zapytanie= mysqli_query($polonczenie,"INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES ( '2', '$lowisko', '$data', '$sedzia')");
    echo mysqli_error($polonczenie);
    mysqli_close($polonczenie);
?>
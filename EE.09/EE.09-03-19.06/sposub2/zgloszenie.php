<?php
    require("connect.php");
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];
    $qr="INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES ( '2', '$lowisko', '$data', '$sedzia')";
    $conn->query($qr);
    mysqli_close($conn);
?>
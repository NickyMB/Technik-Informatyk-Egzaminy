<?php
    require("connect.php");
    $zespol=$_POST["zespol"];
    $dyspozytor=$_POST["dyspozytor"];
    $adres='"'.$_POST["adres"].'"';
    $qr="INSERT INTO zgloszenia VALUES (null,$zespol,$dyspozytor,$adres,0,CURRENT_TIME()";
    $conn->query($qr);
    mysqli_close($conn);
?>
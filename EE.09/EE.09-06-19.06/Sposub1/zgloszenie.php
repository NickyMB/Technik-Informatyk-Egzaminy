<?php
    $polonczenie = mysqli_connect("localhost","root","","ratownictwo");
    $zespol=$_POST["zespol"];
    $dyspozytor=$_POST["dyspozytor"];
    $adres='"'.$_POST["adres"].'"';
    mysqli_query($polonczenie,"INSERT INTO zgloszenia VALUES (null,$zespol,$dyspozytor,$adres,0,CURRENT_TIME()");
    mysqli_close($polonczenie);
?>
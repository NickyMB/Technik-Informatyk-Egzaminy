<?php
	$tytul=$_POST['tytul'];
	$gatunek=$_POST['gatunek'];
	$rok=$_POST['rok'];
	$ocena=$_POST['ocena'];
	$conn=new mysqli('localhost','root','', 'dane');
	$qr="insert into filmy SET gatunki_id='$_POST[ocena]',tytul='$_POST[tytul]',rok='$_POST[rok]',ocena='$_POST[ocena]'";
	$conn->query($qr);
	$conn->close();
	if (isset($_POST[tytul]))
	{
		echo $_POST[tytul]." został dodany do bazy";
	}
?>
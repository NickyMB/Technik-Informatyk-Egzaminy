<?php ini_set( 'display_errors', 'off' );
	$tytul=$_POST['tytul'];
	$gatunek=$_POST['gatunek'];
	$rok=$_POST['rok'];
	$ocena=$_POST['ocena'];
	$polonczenie = mysqli_connect('localhost','root','', 'dane');
	$zapytanie = mysqli_query($polonczenie, "insert into filmy SET gatunki_id='$_POST[ocena]',tytul='$_POST[tytul]',rok='$_POST[rok]',ocena='$_POST[ocena]'");
	mysqli_close($polonczenie);
	if (isset($_POST[tytul]))
	{
		echo $_POST[tytul]." został dodany do bazy";
	}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Grzybobranie</title>
  <link rel="stylesheet" href="styl5.css">
</head>
<body>
  <div id="miniatura">
    <a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie"></a>
  </div>

  <div id="tytulowy">
    <h1>Idziemy na grzyby!</h1>
  </div>

  <div id="lewy">
    <!-- skrypt 1 -->
    <?php
    $polonczenie=mysqli_connect("localhost", "root", "", "dane2");
    $zapytanie = mysqli_query($polonczenie,"SELECT nazwa_pliku, potoczna FROM grzyby");
    while ($r = mysqli_fetch_array($zapytanie))
    {
      echo '<img src="' . $r[0] . '" title="' . $r[1] . '">';
    }
    ?>
  </div>
  <div id="prawy">
    <h2>Grzyby jadalne</h2>
    <!-- skrypt 2 -->
    <?php
    $zapytanie=mysqli_query($polonczenie,"SELECT nazwa, potoczna FROM `grzyby` WHERE jadalny=1");
    while($r = mysqli_fetch_array ($zapytanie)) 
    {
      echo "<p>" . $r[0] . "(" . $r[1] . ")</p>";
    }
    ?>
    <h2>Polecamy do sosów</h2>
    <!-- skrypt 3 -->
    <?php
    $zapytanie = mysqli_query($polonczenie,"SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa FROM `grzyby` INNER JOIN rodzina ON grzyby.rodzina_id=rodzina.id WHERE grzyby.potrawy_id=1");
    echo "<ol>";
    while($r =mysqli_fetch_array($zapytanie)) 
    {
      echo "<li>" . $r[0] . "(" . $r[1] . "), rodzina " . $r[2] . "</li>";
    }
    echo "</ol>";
    mysqli_close($polonczenie);
    ?>
  </div>

  <div id="stopka">
    <p>Autor: 0123456789</p>
  </div>
</body>
</html>

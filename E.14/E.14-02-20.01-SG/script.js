function oblicz()
{
    var ksztalt = document.getElementById("ksztalt").value;
    var przycisk = document.getElementById("tekst");

    if(ksztalt == 1) { przycisk.innerHTML = "Zamówiłeś żelka: miś";}
    else if(ksztalt == 2) { przycisk.innerHTML = "Zamówiłeś żelka: żabka";}
    else if(ksztalt == 3) { przycisk.innerHTML = "Zamówiłeś żelka: serce";}
    else { przycisk.innerHTML = "Zamówiłeś żelka: inny kształt";}

    var PrzyciskKolor = document.getElementById("kolor");

    var r = document.getElementById("r").value;
    var g = document.getElementById("g").value;
    var b = document.getElementById("b").value;

    PrzyciskKolor.style.backgroundColor = "rgb("+r+","+g+","+b+")";
}

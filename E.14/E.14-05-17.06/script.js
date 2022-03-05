var szeroko = document.getElementById("szerokosc");
var wysoko = document.getElementById("wysokosc");
var paragraf = document.getElementById("paragraf");
function oblicz() 
{
    var suma=2*2.7*wysoko.value+2*2.7*szeroko.value;
    var koszt = suma*8;
    paragraf.innerHTML = "powierzchnia całkowita ścian: "+suma+"<br>"+"Koszt malowania: "+koszt+"zł";
    console.log(suma);
}
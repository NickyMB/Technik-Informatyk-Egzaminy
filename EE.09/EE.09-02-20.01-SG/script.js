var dystans = document.getElementById("dystans");
var spalanie = document.getElementById("spalanie");
var wynik = document.getElementById("wynik");
function oblicz() 
{
    var suma = dystans.value*spalanie.value/100;
    console.log(suma);
    wynik.innerHTML = "Potrzebujesz : "+ suma +" Litrów paliwa";
}
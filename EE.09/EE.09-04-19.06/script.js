var wynik = document.getElementById('wynik');
var liczbaA = document.getElementById('liczbaA');
var liczbaB = document.getElementById('liczbaB');
function dodawanie()
{
    wynik.innerHTML="Wynik: "+parseInt(liczbaA.value)+parseInt(liczbaB.value);
}
function odejmowanie()
{
    wynik.innerHTML="Wynik: "+parseInt(liczbaA.value)-parseInt(liczbaB.value);
}
function mnozenie()
{
    wynik.innerHTML="Wynik: "+parseInt(liczbaA.value)*parseInt(liczbaB.value);
}
function dzielenie()
{
    wynik.innerHTML="Wynik: "+parseInt(liczbaA.value)/parseInt(liczbaB.value);
}
function potenga()
{
    wynik.innerHTML="Wynik: "+ Math.pow(parseInt(liczbaA.value),parseInt(liczbaB.value))
}
function spra(){
    var a = document.getElementsByName("a");
    var cennik = [45, 30, 20, 5];
    var suma = 0;
    a.forEach((elm, i) => {
        if(elm.checked == true) suma += cennik[i];
    });
    document.getElementById("wynik").innerHTML = "Cena zabiegów: " + suma;
}
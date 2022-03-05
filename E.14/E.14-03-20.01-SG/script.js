function oblicz() {
    let ksztalt = document.getElementById("ksztalt").value,
    przycisk = document.getElementById("tekst"),
    r = document.getElementById("czerwony").value,
    g = document.getElementById("zielony").value,
    b = document.getElementById("niebieski").value;

    if(ksztalt==1) {przycisk.innerHTML = "Twoje zamówienie to cukierek cytryna";}
    else if(ksztalt==2) {przycisk.innerHTML = "Twoje zamówienie to cukierek liść";}
    else if(ksztalt==3) {przycisk.innerHTML = "Twoje zamówienie to cukierek banan";}
    else { przycisk.innerHTML = "Twoje zamówienie to cukierek inny";}

    document.getElementById("kolor").style.backgroundColor = "rgb("+r+","+g+","+b+")";
}
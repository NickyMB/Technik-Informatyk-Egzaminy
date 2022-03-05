function order() {
    var number = document.getElementById("numer").value;
    var weight = document.getElementById("waga").value;
    var price = 0;
    if (number == 1) {
      price = weight * 5;
    }
    else if (number == 2) {
      price = weight * 7;
    }
    else if (number == 3) {
      price = weight * 6;
    }
    else {
      price = 0;
    }

    document.getElementById("wynik").innerHTML = "Koszt zamówienia wynosi: " + price + " zl";

  }
function oblicz() 
        {
            var rodzaj = document.getElementById('rodzajPaliwa').value;
            rodzaj = parseFloat(rodzaj);
            var ilosc = document.getElementById('litry').value;
            ilosc = parseFloat(ilosc);
            var koszt = 0;
            switch (rodzaj) 
            {
                case 1:
                    koszt = ilosc * 4;
                    break;
                case 2:
                    koszt = ilosc * 3.5;
                    break;
                default:
                    koszt - 0;
                    break;
            }
            document.getElementById('wynik').innerHTML = "Koszt paliwa: " + koszt + " zł";
        }
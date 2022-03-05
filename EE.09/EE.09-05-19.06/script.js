function ciag() 
        {
            var pierwszy = document.getElementById('pierwszy').value;
            pierwszy = parseInt(pierwszy);
            var r = document.getElementById('r').value;
            r = parseInt(r);
            var n = document.getElementById('n').value;
            n = parseInt(n);
            var wynik = "Ciąg artmetyczny zawiera wyrazy: ";
            wynik += pierwszy;
            for(var i = 1; i < n; i++) {
                pierwszy = pierwszy + r;
                wynik += ", " + pierwszy;
            }
            document.getElementById('wynik').innerHTML = wynik;
        }
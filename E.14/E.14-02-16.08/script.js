var szyfr
var wynik
var haslo
function sprawdzenie()
{
    haslo = document.getElementById('haslo')
    wynik = document.getElementById('wynik')
    szyfr = haslo.value
    wynik.innerHTML = " "
       if(szyfr.length == 0)
       {
            wynik.innerHTML = '<font color="red"> HASŁO JEST PUSTE </font>'
       }
       else if(szyfr.length >= 4 && szyfr.length <= 6)
       {
            for(var i = 0; i <= szyfr.length ; i++)
            {
                var a = parseFloat(szyfr.charAt(i))    
                if(Number(a))
                {
                    wynik.innerHTML = '<font color="blue"> HASŁO JEST ŚREDNIE </font>'
                    break
                }
                else
                {
                    wynik.innerHTML = '<font color="yellow"> HASŁO JEST SŁABE </font>'
                }
            }
       }
       else if(szyfr.length >= 7)
       {
            for(var i = 0; i <= szyfr.length ; i++)
            {
                var a = parseFloat(szyfr.charAt(i))   
                if(Number(a))
                {
                    wynik.innerHTML = '<font color="green"> HASŁO JEST DOBRE </font>'
                    break
                }
                else
                {
                    wynik.innerHTML = '<font color="blue"> HASŁO JEST ŚREDNIE </font>'
                }
            }
        }
       else
       {
            wynik.innerHTML = '<font color="yellow"> HASŁO JEST SŁABE </font>'
       }
}
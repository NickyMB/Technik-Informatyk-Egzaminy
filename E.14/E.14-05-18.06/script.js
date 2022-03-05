function licz() 
		{
			var liczba = document.getElementById("liczba").value;
			var wynik = document.getElementById("wynik");
			var suma;
			suma = liczba * 100;
			if (document.getElementById("check").checked) 
			{
				suma *= 1.3;
			}
			wynik.innerHTML = suma;
		}
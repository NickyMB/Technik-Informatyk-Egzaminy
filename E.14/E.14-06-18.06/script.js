function obliczanie()
		{
			var liczba = document.getElementById("num").value;
			var suma = liczba * 2;
			if (document.getElementById("check").checked == true) 
			{
				document.getElementById("wynik").innerHTML = "Dowieziemy Twoją pizzę za darmo";
			} 
			else if (document.getElementById("check").checked == false)
			{
				document.getElementById("wynik").innerHTML = "Dowóz będzie Cię kosztował " + suma + " złotych";
			}
		}
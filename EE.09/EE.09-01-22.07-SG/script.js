var licznik=0;
		function podmien()
		{
			licznik++;
			if (licznik%2!=0)
			{
				document.getElementById("ikona").src="icon-on.png";	
				console.log(licznik);
			}
			else
			{
				document.getElementById("ikona").src="icon-off.png";
				console.log(licznik);
			}
		}
		function zmienZdjecie(zdjecie)
		{
			if(zdjecie=="lanzarotte")
			{
				document.getElementById("zdjecieglowne").src="lanzarotte.jpg";
			}
			else if(zdjecie=="pekin")
			{
				document.getElementById("zdjecieglowne").src="pekin.jpg";
			}
			else if(zdjecie=="serengeti")
			{
				document.getElementById("zdjecieglowne").src="serengeti.jpg";
			}
			else if(zdjecie=="tajlandia")
			{
				document.getElementById("zdjecieglowne").src="tajlandia.jpg";
			}
			else if(zdjecie=="wenecja")
			{
				document.getElementById("zdjecieglowne").src="wenecja.jpg";
			}
		}
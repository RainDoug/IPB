// JavaScript Document

var fadetimer	= 0;
var menutitle	= 0;
var fader   	= 500;

function menuopen(id)
	{	
		menucancelfadetimer();
		
		if (menutitle) menutitle.style.visibility = 'hidden';
			menutitle = document.getElementById(id);
			menutitle.style.visibility = 'visible';
	}
		function menuclose()
			{
				if(menutitle) menutitle.style.visibility = 'hidden';
			}
		function menuclosefade()
			{
				fadetimer = window.setTimeout(menuclose, fader);
			}
		function menucancelfadetimer()
			{
				if(fadetimer)
					{
						window.clearTimeout(fadetimer);  
						fadetimer = null;
				}
}

document.onclick = menuclose;

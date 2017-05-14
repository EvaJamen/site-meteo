//FUNCTION TO HIDE AND SHOW MORE INFORMATIONS

function show_hide_div(nomdiv){
	var lediv = document.getElementById(nomdiv);
	if(lediv.style.display=="block")
		lediv.style.display="none";
	else
		lediv.style.display="block";
}console.log('ok');

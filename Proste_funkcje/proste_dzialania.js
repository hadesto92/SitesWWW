function dodawanie(){
	
	if(!Number.isNaN(parseInt(formularz.a.value)) && !Number.isNaN(parseInt(formularz.b.value))){
		var a = parseInt(formularz.a.value);
		var b = parseInt(formularz.b.value);
	
		document.getElementById("wynik").innerHTML = "Wynik wynosi: "+(a+b);
	}
	else{
		document.getElementById("wynik").innerHTML = "Proszę uzupełnić liczby";
	}
	
}
function odejmowanie(){
	
	if(!Number.isNaN(parseInt(formularz.a.value)) && !Number.isNaN(parseInt(formularz.b.value))){
		var a = parseInt(formularz.a.value);
		var b = parseInt(formularz.b.value);
		
		document.getElementById("wynik").innerHTML = "Wynik wynosi: "+(a-b);
	}
	else{
		document.getElementById("wynik").innerHTML = "Proszę uzupełnić liczby";
	}
	
}
function dzielenie(){
	
	if(!Number.isNaN(parseInt(formularz.a.value)) && !Number.isNaN(parseInt(formularz.b.value))){
		if(parseInt(formularz.b.value) == 0){
			document.getElementById("wynik").innerHTML = "Nie wolo dzielić przez zero";
		}
		else{
			var a = parseInt(formularz.a.value);
			var b = parseInt(formularz.b.value);
			
			document.getElementById("wynik").innerHTML = "Wynik wynosi: "+(a/b);
		}
	}
	else{
		document.getElementById("wynik").innerHTML = "Proszę uzupełnić liczby";
	}
	
}
function mnozenie(){
	
	if(!Number.isNaN(parseInt(formularz.a.value)) && !Number.isNaN(parseInt(formularz.b.value))){
		var a = parseInt(formularz.a.value);
		var b = parseInt(formularz.b.value);
		
		document.getElementById("wynik").innerHTML = "Wynik wynosi: "+(a*b);
	}
	else{
		document.getElementById("wynik").innerHTML = "Proszę uzupełnić liczby";
	}
	
}
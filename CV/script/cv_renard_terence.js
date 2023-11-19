// Jour, nuit, jour, nuit, ...
function Sombre() {
	divSombre1 = document.getElementById("SombreLumineux1");
	divSombre1.style.backgroundColor="#2C2C2C";
	divSombre1.style.color="#FFFFFF";
	
	divSombre2 = document.getElementById("SombreLumineux2");
	divSombre2.style.backgroundColor="#000000";
	divSombre2.style.color="#F0F0F0";

	Bricolage = document.getElementById("conteneur1");
	Bricolage.style.backgroundColor = "#181818";

	Bricolage = document.getElementById("conteneur2");
	Bricolage.style.backgroundColor = "#000000";

	Bricolage = document.getElementById("conteneur3");
	Bricolage.style.backgroundColor = "#000000";

	Bricolage = document.getElementById("conteneur4");
	Bricolage.style.backgroundColor = "#000000";

	Bricolage = document.getElementById("conteneur5");
	Bricolage.style.backgroundColor = "#000000";
	
	Bricolage = document.getElementById("conteneur6");
	Bricolage.style.backgroundColor = "#181818";

	Bricolage = document.getElementById("conteneur7");
	Bricolage.style.backgroundColor = "#181818";
	
	document.body.style.backgroundColor = "black";
}

function Lumineux() {
	divLumineux1 = document.getElementById("SombreLumineux1");
	divLumineux1.style.backgroundColor="#d5d5d5";
	divLumineux1.style.color="#000000";
	
	divLumineux2 = document.getElementById("SombreLumineux2");
	divLumineux2.style.backgroundColor="#FFFFFF";
	divLumineux2.style.color="#000000";

	Bricolage = document.getElementById("conteneur1");
	Bricolage.style.backgroundColor = "#e7e7e7";

	Bricolage = document.getElementById("conteneur2");
	Bricolage.style.backgroundColor = "#f0f0f0";

	Bricolage = document.getElementById("conteneur3");
	Bricolage.style.backgroundColor = "#f0f0f0";

	Bricolage = document.getElementById("conteneur4");
	Bricolage.style.backgroundColor = "#f0f0f0";

	Bricolage = document.getElementById("conteneur5");
	Bricolage.style.backgroundColor = "#f0f0f0";
	
	Bricolage = document.getElementById("conteneur6");
	Bricolage.style.backgroundColor = "#e7e7e7";

	Bricolage = document.getElementById("conteneur7");
	Bricolage.style.backgroundColor = "#e7e7e7";
	
	document.body.style.backgroundColor = "white";
}





/* Je mets ces codes en souvenir
sombre_fond = document.body.style.backgroundColor;
	if (sombre_fond == "black"){
		var nouvellecouleur = "white";
	}
	else {
		var nouvellecouleur = "black";
	}
	document.body.style.backgroundColor = nouvellecouleur;
	
function changeCouleur() {
	document.body.style.backgroundColor = "yellow";
}
*/
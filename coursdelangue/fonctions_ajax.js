
function hide_hidden_fields(){
	document.getElementById("informations_formations").style.display = "none";
	document.getElementByClass("overlay").style.display="none";
}

function showDescri(forma) {
    	if (forma == ""){
    		document.getElementById("informations_formations").innerHTML = "plus rien :(";
    		return;
    	}
    	else {
    		if (window.XMLHttpRequest) {
    			// code for IE7+, Firefox, Chrome, Opera, Safari
    			xmlhttp = new XMLHttpRequest();
    		}
    		else {
    			// code for IE6, IE5
    			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    		}
    		xmlhttp.onreadystatechange = function() {
    			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    				document.getElementById("informations_formations").innerHTML = "";
    				document.getElementById("informations_formations").innerHTML = xmlhttp.responseText;
    				color=document.getElementById("coltitre").style.background;
    				document.getElementById("bandeau").style.background="#FE412E";
					document.getElementById("bandeau2").style.background="#FE412E";


    			}
    		}
    		xmlhttp.open("GET","http://straformation.fr/coursdelangue/infoformations.php?d="+forma,true);
    		xmlhttp.send();
    	}
}


function displayGrey(){
	document.getElementById("gris").style.display="block";
}

function hideGrey(){
	document.getElementById("gris").style.display="none";
}
function showmachin(){
	if (document.getElementById("informations_formations").style.display != "block") {
		document.getElementById("informations_formations").style.display="block";
	}
	else{
		document.getElementById("informations_formations").style.display="none";
	}
}

function showChosenLanguage(language) {
    if(language == ""){
        document.getElementById("content_infos").innerHTML = "plus rien :(";
		document.getElementById("content_programme").innerHTML = "plus rien :(";
        return;
    }
    else{
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
			xmlhttp2= new XMLHttpRequest();
        }
        else{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			xmlhttp2= new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("content_infos").innerHTML = xmlhttp.responseText;
            }
        }
    
		xmlhttp2.onreadystatechange = function() {
            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
                document.getElementById("content_programme").innerHTML = xmlhttp2.responseText;
            }
        }
		if (language==75){
			var str="Allemand <button id='75' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Allemand'); showCart(1);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
			document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==76){
			var str="Chinois <button id='76' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Chinois'); setTimeout(function(){showCart(1);}, 100);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
            document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==74){
			var str="Anglais <button id='74' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Anglais'); showCart(1); setTimeout(function(){showCart(0);}, 3000);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
	        document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==132){
			var str="Turc <button id='132' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Turc'); setTimeout(function(){showCart(1);}, 100);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
	        document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==134){
			var str="Russe <button id='134' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Russe'); setTimeout(function(){showCart(1);}, 100);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
	        document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==77){
			var str="Espagnol <button id='77' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Espagnol'); setTimeout(function(){showCart(1);}, 100);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
	        document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==79){
			var str="Italien <button id='79' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Italien'); setTimeout(function(){showCart(1);}, 100);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
	        document.getElementById("nom_langue").innerHTML = str;
		}
		if (language==80){
			var str="Arabe <button id='80' class='button-cart' style=\"float:right;\" onclick=\"AddFormation(this.id,'Arabe'); setTimeout(function(){showCart(1);}, 100);\" value='0' role='button'>Ajouter au devis<img style='vertical-align:bottom' src='carticon.png' height='25' width='25'></button>"
	        document.getElementById("nom_langue").innerHTML = str;
		}
        xmlhttp.open("GET","http://straformation.fr/coursdelangue/getLanguageInfos.php?c="+language,true);
		xmlhttp2.open("GET","http://straformation.fr/coursdelangue/getLanguageProgramme.php?c="+language,true);
        xmlhttp.send();
		xmlhttp2.send();
		
    }
}

function AddFormation(forma_id,forma_label) {
    	if ((forma_id == "")||(forma_label == "")){
    		return;
    	}
    	else {
    		if (window.XMLHttpRequest) {
    			// code for IE7+, Firefox, Chrome, Opera, Safari
    			xmlhttp = new XMLHttpRequest();
    		}
    		else {
    			// code for IE6, IE5
    			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    		}
//    		xmlhttp.onreadystatechange = function() {
//    			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//    				document.getElementById("").innerHTML = xmlhttp.responseText;
//    			}
//    		}
    		xmlhttp.open("POST","http://straformation.fr/coursdelangue/cart.php?action=ajout&i=" + forma_id + "&l=" + forma_label +"&q=1",true);
    		xmlhttp.send();
    	}
}

function RemoveFormation(forma_id) {
	if (forma_id == ""){
		return;
	}
	else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("POST","http://straformation.fr/coursdelangue/cart.php?action=suppression&i=" + forma_id,true);
		xmlhttp.send();
	}
}

function showCart(alwaysShow){
	window2=window.parent;
	window2.scrollTo(0, 0);
	var iframe=parent.document.getElementById("iframe2");
	var oDoc = (iframe.contentWindow || iframe.contentDocument);
	if (oDoc.document) oDoc = oDoc.document;
	if (oDoc.getElementById("display_cart").style.display=="inline-block"){
		if (alwaysShow==0){
			oDoc.getElementById("display_cart").style.display="none";
		}
	}
	else {
		oDoc.getElementById("display_cart").style.display="inline-block";
	}
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			
			oDoc.getElementById("display_cart").innerHTML = "";
			oDoc.getElementById("display_cart").innerHTML = xmlhttp.responseText;
			
		}
	}
	
	xmlhttp.open("GET","http://straformation.fr/coursdelangue/cart.php",true);
	xmlhttp.send();
}

function resetCartAjax(){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.open("POST","http://straformation.fr/coursdelangue/cart.php?action=reset",true);
	xmlhttp.send();
}

function displayInfo(){
	document.getElementById("div_gen").style.display="block";
	document.getElementById("div_prog").style.display="none";
	document.getElementById("menuderoulant1").style.fontWeight="bold";
	document.getElementById("menuderoulant2").style.fontWeight="normal";
}
function displayProg(){
	document.getElementById("div_gen").style.display="none";
	document.getElementById("div_prog").style.display="block";
	document.getElementById("menuderoulant1").style.fontWeight="normal";
	document.getElementById("menuderoulant2").style.fontWeight="bold";
}
function displayPlanning(){
	document.getElementById("div_gen").style.display="none";
	document.getElementById("div_prog").style.display="none";
	document.getElementById("menuderoulant1").style.fontWeight="normal";
	document.getElementById("menuderoulant2").style.fontWeight="normal";
}
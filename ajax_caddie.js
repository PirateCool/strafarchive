/**
* @author Mahdi El Masaoudi
*			http://pages.usherbrooke.ca/mel
* @methods
* 			add(ref,label,qt,price);
*			delete(ref);
*			clear();
*			getContent();
* 
**/


/** Retourner le contenu formaté HTML de la caddie 
*
**/
var reqContent;
function getContent() {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=getContent";
	reqContent=getXMLHttpRequest();
	reqContent.open("GET", url, true);
	reqContent.onreadystatechange = callBackContent;
	reqContent.send(null);
}

var reqContent2;
function getContent2() {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=getContent2";
	reqContent2=getXMLHttpRequest();
	reqContent2.open("GET", url, true);
	reqContent2.onreadystatechange = callBackContent2;
	reqContent2.send(null);
}
/** Vider le panier
*
**/
var reqClear;
function clearAll() {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=clear";
	reqClear=getXMLHttpRequest();
	reqClear.open("GET", url, true);
	reqClear.onreadystatechange = callBackClear;
	reqClear.send(null);
}
/** Supprimer un article du panier
*	@param 
*			ref: référence de l'article
* 
**/

var reqDelete;
function deleteByRef(ref) {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=delete&ref="+ref;
	reqDelete=getXMLHttpRequest();
	reqDelete.open("GET", url, true);
	reqDelete.onreadystatechange = callBackDelete;
	reqDelete.send(null);
}

var reqDelete2;
function deleteByRef2(ref) {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=delete2&ref="+ref;
	reqDelete2=getXMLHttpRequest();
	reqDelete2.open("GET", url, true);
	reqDelete2.onreadystatechange = callBackDelete2;
	reqDelete2.send(null);
}

var reqDeleteQT;
function deleteQT(ref,qt) {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=deleteQT&ref=" +ref+"&qt="+qt;
	reqDeleteQT=getXMLHttpRequest();
	reqDeleteQT.open("GET", url, true);
	reqDeleteQT.onreadystatechange = callBackDeleteQT;
	reqDeleteQT.send(null);
}

/** ajouter un article au panier
*	@param 
*	ref : Reference de l'article
* 	label : désignation de l'article
*	qt : quantité
*	price : prix
*
**/
var reqAdd;
function add(ref,label,qt,price) {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=add&ref=" +ref+"&label="+label+"&qt="+qt+"&price="+price;
	reqAdd=getXMLHttpRequest();
	reqAdd.open("GET", url, true);
	reqAdd.onreadystatechange = callBackAdd;
	reqAdd.send(null);
}

var reqAdd2;
function add2(ref,label,qt,price) {
	var url;
	url = "http://www.straformation.fr/ajaxcaddie.php?action=add2&ref=" +ref+"&label="+label+"&qt="+qt+"&price="+price;
	reqAdd2=getXMLHttpRequest();
	reqAdd2.open("GET", url, true);
	reqAdd2.onreadystatechange = callBackAdd2;
	reqAdd2.send(null);
}

// Les callBack pour réponses ( voir plus haut) 

function callBackAdd() {
	if (reqAdd.readyState == 4) {
		if (reqAdd.status == 200) {
			document.getElementById("caddieContent").innerHTML = reqAdd.responseText;
		}
	}
}
function callBackAdd2() {
	if (reqAdd2.readyState == 4) {
		if (reqAdd2.status == 200) {
			document.getElementById("caddieContent2").innerHTML = reqAdd2.responseText;
		}
	}
}

function callBackContent() {
	if (reqContent.readyState == 4) {
		if (reqContent.status == 200) {
			document.getElementById("caddieContent").innerHTML = reqContent.responseText;
		}
	}
}
function callBackContent2() {
	if (reqContent2.readyState == 4) {
		if (reqContent2.status == 200) {
			document.getElementById("caddieContent2").innerHTML = reqContent2.responseText;
		}
	}
}


function callBackClear() {
	if (reqClear.readyState == 4) {
		if (reqClear.status == 200) {
			document.getElementById("caddieContent").innerHTML = reqClear.responseText;
		}
	}
}


function callBackDelete() {
	if (reqDelete.readyState == 4) {
		if (reqDelete.status == 200) {
			document.getElementById("caddieContent").innerHTML = reqDelete.responseText;
		}
	}
}

function callBackDelete2() {
	if (reqDelete2.readyState == 4) {
		if (reqDelete2.status == 200) {
			document.getElementById("caddieContent2").innerHTML = reqDelete2.responseText;
		}
	}
}

function callBackDeleteQT() {
	if (reqDeleteQT.readyState == 4) {
		if (reqDeleteQT.status == 200) {
			document.getElementById("caddieContent2").innerHTML = reqDeleteQT.responseText;
		}
	}
}

// fonction retournant l'objet XMLHttpRequest adéquat en fonction du navigateur

function getXMLHttpRequest()
{
var req = false;

try
{
   req=new XMLHttpRequest();
}

catch(e)
{
   try
   {
      req=new ActiveXObject("Msxml2.XMLHTTP");
   }
   catch (e)
   {
      try
      {
         req = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e)
      {
         req = false;
      }
   }
}

return req;

}

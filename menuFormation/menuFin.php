
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
<meta charset="utf-8" />
<meta property="og:site_name" content="StraFormation" />
<link rel="canonical" href="http://www.straformation.fr/" />

  <title>Votre centre de formation à Strasbourg. | StraFormation</title>


<!-- MENU GAUCHE -->
<style type="text/css">
@font-face {
    font-family: 'Open Sans';
    src: url('OpenSans-Regular-webfont.eot');
    src: url('OpenSans-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('OpenSans-Regular-webfont.woff') format('woff'),
         url('OpenSans-Regular-webfont.ttf') format('truetype'),
         url('OpenSans-Regular-webfont.svg#open_sansregular') format('svg');
    font-weight: normal;
    font-style: normal;
}   

/* Feuille de styles du menu */
/* Cadre bleu */
#around{
	width:22%;
	padding: 10px;
	margin-left: 0px;
	margin:auto;
	top:0;
	margin-top:0px;
	left:0;
	float:left;
	position:absolute;
}

/* Cadre bleu 1Menu */
#cssmenu{
/* 1Menu sans haut */
/* 1Menu fond du bas */
	position:absolute;
	font-family: Open Sans;
	border-bottom: 40em solid #fffff;
	min-height: 100%;
	height: auto !important;
	width: 104.4%;
}

/* 3 cadres */
#cssmenu > ul li a,
.descr,
.desc1,
.desc2
{
  /* Layout */
  display: block;
  margin: 0;
  border-top: 1px dotted #CBCBCB;
  border: none;
  padding: 4.1% 20px;
  /* Typography */
  font-family: Open Sans;
  color: #444444;
  text-decoration: none;
  text-transform: none;
  font-size: 1.2vw;
  /* Background & effects */
  background: white;
}

/* 2Menu */
#cssmenu > ul
{
  margin: 0;
  padding: 12px;
  margin-top:10px;
  line-height: 1;
  list-style: none;
  display: block;
  width: 100%;
  margin:auto;
  z-index:49;
  font-family: Open Sans;
}

/* Liste a puce 2Menu */
#cssmenu > ul li
{
  list-style: none;
}

#cssmenu ul ul li.has-sub {
	background-color: #f3f3f3;
	margin-top: 12px;
}

/* police du 2Menu */
#cssmenu > ul ul li a{
	font-size:20%;
	font-size:1vw;
	color:black;

}

/* couleur de selection du 2Menu */
#cssmenu ul ul li a{
background: #f3f3f3;
}

/* Cadre gris du 3Menu */
.descr
{
	margin-top: -231px;
	padding: 0px 0px 0px 0px; 
	padding-bottom: 5px white;
	max-width:600px !important;
	max-height:600px !important;
	height: 600px !important;
	width: 570px !important;
	color: white;
	text-shadow: none;
	background-color: #2a80b9;
	border-color: #FFFFFF;
    border-left: solid 1px #f3f3f3;
	border-right: solid 10px #FFFFFF;
	border-bottom: solid 1000px #FFFFFF;
	border-left:solid 15px white;
}

/* 3Menu */
#cssmenu > ul ul ul
{
  margin-top:225px;
}
  
/* le contenu du 3Menu */
/* titre 3e menu */ 
.desc0
{
	height: 0px;
	background-color: white;
	text-align: center;
	font-size: 0.8vw;
    font-family: Open Sans;
}

.desc1
{

	height: 75%;
	overflow-x:hidden;
	color: #444;
	text-shadow: none;
	text-align:center;
	background-color: white;
	border: none;
	text-align:left !important;
	font-family: Open Sans;
	font-size: 1vw;
}

.desc2
{
	height: 0px;
	margin-top: 0px;
	padding:0px;
	background-color: transparent;
	border: none;
	border-top: 0px solid white;
}

/* THE SUBMENUS 2Menu 3Menu*/
#cssmenu > ul ul
{
  position: absolute;
  left: 98%;
  top: -9999px;
  padding-left: 5px;
  opacity: 0;
  width: 100%;
}

/* The hover state of the menu/submenu links */
#cssmenu ul li a:hover
{
  color: #2a80b9;
  background-color: #FFFFFF;
  /*padding-left: 35px;*/
  border-left:solid 5px #2a80b9; 
}


#cssmenu ul ul li a:hover
{
  color: #2a80b9;
  background-color: #f3f3f3;
  border-left:solid 5px #2a80b9;
  text-transform: none;
}

#cssmenu> ul ul li:hover>ul, #cssmenu> ul li:hover>ul
{
  -webkit-transition: opacity 0.9s ease-in;
  -moz-transition: opacity 0.9s ease-in;
  -moz-animation-duration: 0s;
  -webkit-animation-duration: 0s;
}

/* Showing the submenu when the user is hovering the parent link */
#cssmenu > ul li:hover > ul
{
  top: 0px;
  opacity: 1;
    -moz-animation-duration: 1s;
    -webkit-animation-duration: 1s;
    -moz-animation-name: slideout;
    -webkit-animation-name: slideout;
}
 
@-moz-keyframes slideout {
	from {
    margin-left:-20%;
	}
	to {
    margin-left:0%;
	}
}
    
@-webkit-keyframes slideout {
    from {
    margin-left:-20%;
	} 
    to {
    margin-left:0%;
	}
}

#cssmenu > ul ul li:hover > ul 
{
  top: 0px;
  opacity: 1;
    -moz-animation-duration: 1s;
    -webkit-animation-duration: 1s;
    -moz-animation-name: slideout;
    -webkit-animation-name: slideout;
}
    
@-moz-keyframes slideout {
    from {
        margin-left:-20%;
    }
    to {
        margin-left:0%;
      }
    }
@-webkit-keyframes slideout {
    from {
      margin-left:-20%;
    }
    to {
        margin-left:0%;
    }
}
	
/* FIXME */
#cssmenu .tempfix-comp-visees {
	margin:0 !important;
	padding:0 !important;
	position: relative !important;
	top:10px !important;
	left:10px !important;
	opacity: 1 !important;
	z-index:99999999 !important;
	display: block !important;
}

::-webkit-scrollbar
{
  width: 5px; /*largeur de la scrollbar verticale*/
  height: 5px; /*hauteur de la scrollbar horizontale*/
  background-color: #444444;
}

::-webkit-scrollbar-track
{
  background-color: grey; /*couleur du fond de la scrollbar*/
}

::-webkit-scrollbar-thumb
{ /*la petite bande qui monte/descend*/
  background-color: grey;
  border-radius: 15px;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
}

/* titre 3Menu */
.title
{
	margin:5px;
	padding: 5px;
	// text-align: center;
	color: white;
	font-size: 1vw;
	font-weight: bold;
	font-family: Open Sans;
}

/* 3Menu contenu */
#duree
{
	color: #2a80b9;
	background-color: #F3F3F3;
	border-left:solid 0px #444444;
	border-bottom: solid 0px #444444;
	border-radius: 0px 5px 0px 5px;
	font-family: Open Sans;
}

#prerequis
{
	color:	#2a80b9;
	background-color: #F3F3F3;
	border-left: solid 0px #444444;
	border-bottom: solid 0px #444444;
	border-radius: 0px 5px 0px 5px;
	font-family: Open Sans;
}

#competences
{
	color:	#2a80b9;
	background-color: #F3F3F3;
	border-left: solid 0px #444444;
	border-bottom: solid 0px #444444;
	border-radius: 0px 5px 0px 5px;
	font-family: Open Sans;
}

/* button */
#cssmenu ul ul li li a {
background-color: #2a80b9;
font-weight: bold;
color: #FFFFFF;
}

#cssmenu ul ul li li a:hover{
/*background-color:#2a80b9;*/
border-left:none;
margin:0%;
pading-left:12%;
font-size: 100%;
}

#titledesc{
	padding-top:5px;
	margin-bottom:3px;
	font-family: Open Sans;
	font-size: 200%; !important
	font-size: 1.5vw;
	font-family: Open Sans;
}

.button{
border-radius: 5px 5px 5px 5px;
}

#cssmenu ul ul ul #desc {
    position: fixed;
}

#cssmenu ul ul #pat{
    height:1000px;
    background: #f3f3f3;
    border: 0px;
}
/* Fin de la feuille de styles du menu */

</style>

<!-- modal dialog -->
<style type="text/css">
.modalDialog {	
	position: fixed;
	font-family: Open Sans;
	top: -70px;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 300ms ease-in;
	-moz-transition: opacity 300ms ease-in;
	transition: opacity 300ms ease-in;
	pointer-events: none;
}

.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 100%;
	height: 100%;
	margin: 5% auto;
	border-radius: 10px;
	background-color:white;
    background: url("fondmenu.png") no-repeat;
	background-size:100%;
	overflow:scroll;
}

.close {
	
}

.close:hover { 
	
}

</style>
  
</head>

<body>

<div id="openModal" class="modalDialog">
	<div>
	<div id="pasmobile">
		<div id='around'>
			<div id='cssmenu'>
				<ul id="main-menu" class="sm sm-clean">
										<li class='has-sub'>
					<a><span><b>Marketing </b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="management/communiquer-sans-budget">Communiquer sans budget (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Communiquer sans budget</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Pouvoir se démarquer sans se ruiner.<br />
	- Apprendre à utiliser les réseaux sociaux.<br />
	- Prendre connaîssance des différents moyens pour communiquer à moindre coût.<br />
	- Apprendre les bases d'un bon référencement.<br />
	- Se familiariser avec des logiciels de graphisme.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="management/communiquer-sans-budget">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="gerer-et-administrer-une-campagne-de-communication-evenementielle-ou-une-manifestation-a-strasbourg">Communication événementielle (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Communication événementielle</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Cerner les enjeux des campagnes événementielles.<br />
	- Pouvoir gérer et organiser les campagnes de communications événementielles.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="gerer-et-administrer-une-campagne-de-communication-evenementielle-ou-une-manifestation-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="suivre-la-formation-communication-de-crise">Communication de crise (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Communication de crise</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  La poursuite de cette formation n’exige aucun prérequis, mais une expérience en préalable dans la gestion d’une situation de crise serait un avantage.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	  Cette formation en communication de crise est concentrée sur l’identification des éléments de crise et sur les méthodes concrètes à appliquer afin de surmonter une période de crise tout en gardant ses performances.
	
		- Mettre en place des outils afin de tracer les symptômes d’une crise.<br />
	
	
		- Développer une stratégie censée de prévenir l’émergence de toute situation de crise.<br />
	
	
		- Adopter des techniques pliées sur le contexte afin de gérer la communication de crise.<br />
	
	
		- Apprendre à transformer un épisode de crise dans une période de communication consolidée.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-la-formation-communication-de-crise">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-marketing-recuperer-sa-clientele">Récupérer sa clientèle perdue (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Récupérer sa clientèle perdue</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  La poursuite de cette formation ne demande pas des connaissances spécifiques en préalable.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	  Une initiation à l’analyse de ses clients antérieurs afin de comprendre la raison de leur perte, et à l’anticipation des tendances pour prévenir toute forme de crise. Nos formateurs vous aideront à:
	
		- Établir un diagnostique portant sur les causes antérieures de la perte des clients;<br />
	
	
		- Analyser méticuleusement leur tendance et les caractéristiques spécifiques de leur profil;<br />
	
	
		- S’orienter vers un changement et une optimisation de son approche sur le marché;<br />
	
	
		- Établir une méthodologie logique et des plans pointus de reconquête.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-marketing-recuperer-sa-clientele">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="le-rewriting-et-les-techniques-d-ecritures-journalistique-pour-se-former-a-strasbourg">Les techniques d'écritures journalistique et de rewriting (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Les techniques d'écritures journalistique et de rewriting</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Participer  à la rédaction de déclaration de l’entreprise.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   Connaître  les conditions d’écritures journalistiques et apprendre les notions de  bases et de précisions du métier de journaliste. <br>
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="le-rewriting-et-les-techniques-d-ecritures-journalistique-pour-se-former-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation/formation-pour-ameliorer-sa-strategie-concurrentielle">Améliorer sa stratégie concurrentielle (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Améliorer sa stratégie concurrentielle</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Cette formation vous permettra :<br>

	- <span style="background-color: rgb(246, 246, 246);"></span><span style="background-color: rgb(246, 246, 246);">D'é</span><span style="background-color: rgb(246, 246, 246);">largir votre champs d'action.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">De p</span><span style="background-color: rgb(246, 246, 246);">ouvoir faire face aux menaces du marché.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">De connaître les différents outils permettant l'avantage concurrentielle.</span><br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation/formation-pour-ameliorer-sa-strategie-concurrentielle">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-creer-sa-marque-personnelle-formation">Créer et mettre en avant sa Marque Personnelle (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Créer et mettre en avant sa Marque Personnelle</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Cette formation a pour but de vous comprendre l’importance de la construction de sa marque personnelle. Une fois les fondements de ce principe acquis, vous pourrez mettre en place votre marque personnelle, unique et vous représentant, ce qui vous permettre d’imposer votre image sur le long terme.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-creer-sa-marque-personnelle-formation">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Bureautique</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="formation-au-logiciel-open-office-a-strasbourg">Apache Open Office (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Apache Open Office</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Être à l'aise avec l'outil informatique.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>La formation Open Office vous permettra de :</b><br>

	- Maîtriser les fondements de la bureautique libre sur la dernière version de l''Apache Open Office".<br />
	- Savoir utiliser efficacement et de façon autonome les différentes fonctionalitées qu'offre Open Office.<br />
	- Se familiariser avec les six logiciels (Writer / Calc / Impress / Base / Draw / Math).<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-au-logiciel-open-office-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/stage-initiation-office-word-strasbourg">Word débutant (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Word débutant</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Base en informatique, notamment Windows.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Perfectionner les bases du traitement de texte.</b><br>

	- Écrire et mettre en forme un texte.<br />
	- Introduire un tableau dans le document.<br />
	- Être autonome dans l'utilisation de microsoft Word.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/stage-initiation-office-word-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/formation-cours-de-word-experimente-bas-rhin-alsace">Word expérimenté (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Word expérimenté</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Base  en informatique notamment Windows, ainsi que les fonctions du programme  d’initiation.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	<b>Revoir et approfondir ses connaissances perçues sur Word.<br>
	</b>
	
		- Concevoir un document, mise en forme et pagination, imprimer.<br />
	
	
		- Gérer des documents de plusieurs pages, perfectionnement de la présentation.<br />
	
	     Exploiter les fonctions avancées de Word pour une utilisation professionnelle, perfectionner son efficience et sa vivacité.<br>
	<br>
	<b>Déterminer les fonctions du publipostage et automatiser vos documents.<br>
	</b>
	
		- Créer des étiquettes et enveloppes.<br />
	
	
		- Créer un e-mailing et un fax-mailing.<br />
	
	
		- Gagner du temps pour les documents répétitifs.<br />
	
	     Exploiter  les fonctions avancées de Word pour une utilisation professionnelle  afin de perfectionner son efficience et sa rapidité.
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/formation-cours-de-word-experimente-bas-rhin-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/connaitre-les-trucs-et-astuces-de-microsoft-word">Word trucs et astuces (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Word trucs et astuces</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Connaissance de base du traitement de texte.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													- Optimiser son travail sous Word grâce aux raccourcis clavier et commandes spécifiques.<br />
- Découvrir le potentiel de création simplifié et rapide de Word.<br />													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/connaitre-les-trucs-et-astuces-de-microsoft-word">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/initiation-access-debutant-creation-base-de-donnees">Access débutant (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Access débutant</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Créer et organiser une base de données, en apprenant les fonctionnalités d'Acces.<br />
	- Pour favoriser la saisie de données, apprendre à créer un formulaire.<br />
	- Bâtir et gérer des requêtes.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/initiation-access-debutant-creation-base-de-donnees">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/comprehension-a-strasbourg-et-maitrise-de-access-experimente">Access expérimenté (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Access expérimenté</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Bases  en informatique notamment Windows ainsi qu’une connaissance du  niveau d'initiation d’Access.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	 <b>Apprenez les fonctionnalités de base et avancées de Microsoft ACCESS.<br>
	<br>
	 </b>
	
		- Faciliter la saisie des données en créant un formulaire.<br />
	
	
		- Gérer l'affichage des informations venant de la base de données (requêtes, états).<br />
	
	
		- Créer une base de données .<br />
	
	     Devenez capable d’utiliser les fonctions avancées et  les macros ACCESS en réalisant une application les mettant en œuvre.
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/comprehension-a-strasbourg-et-maitrise-de-access-experimente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/formation-excel-debutant-en-alsace">Excel débutant (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Excel débutant</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Base en informatique notamment Windows.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Apprendre les fonctions d’Excel.</b><br>

	- Créer et modifier les tableaux.<br />
	- Savoir imprimer et mettre en page les tableaux.<br />
	- Concevoir des formules de calcul.<br />
	- Organiser ses classeurs.<br />

<b>Revoir et approfondir ses connaissances.</b><br>

	- Renforcer ses acquis.<br />
	- Reproduire des graphiques et les personnaliser.<br />

    Améliorer la conception de tableaux ainsi que la création de formule de calculs.<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/formation-excel-debutant-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/cours-excel-confirme-utiliser-ses-droits-pour-se-former">Excel expérimenté (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Excel expérimenté</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	Base  en informatique notamment Windows. Ainsi que les fonctions du programme  d'initiation.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Améliorer sa maîtrise des fonctions d’Excel afin de l’utiliser au mieux dans le monde du travail.</b><br>

	- Concevoir un tableau croisé dynamique.<br />
	- Approfondir les formules de calculs afin d’automatiser les résultats.<br />
	- Exploiter la valeur cible.<br />
	- Personnaliser ses documents afin d’améliorer la qualité.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/cours-excel-confirme-utiliser-ses-droits-pour-se-former">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/excel-trucs-et-astuces-straformation-seminaire-lecons">Excel trucs et astuces (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Excel trucs et astuces</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Pratique  courante de Windows et bonne connaissance d’Excel.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Optimiser son travail sous Excel.<br />
	- Gagner du temps en manipulant rapidement grâce aux raccourcis clavier, aux commandes spécifiques.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/excel-trucs-et-astuces-straformation-seminaire-lecons">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="bureautique/apprendre-excel-calculs-et-tableaux-croises-dynamiques">Excel Calculs et tableaux croisés dynamiques (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Excel Calculs et tableaux croisés dynamiques</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Avoir  un niveau de connaissance équivalent à la formation Excel Expérimenté.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Organiser et compléter les données pour mieux les exploiter.<br />
	- Définir les données sources d'un tableau croisé dynamique.<br />
	- Construire et mettre en forme des tableaux croisés dynamiques.<br />
	- Ajouter des graphiques croisés dynamiques.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="bureautique/apprendre-excel-calculs-et-tableaux-croises-dynamiques">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/comprendre-toutes-les-fonctionnalites-de-outlook">Outlook (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Outlook</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Base en informatique, notamment Windows.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	 <b>Comprendre Outlook et ses principaux éléments.</b><br>
	
		- Les paramètres d'affichage et la barre de raccourcis.<br />
		- Découvrir la barre d'outils et la barre d'état.<br />
	
	 <br>
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/comprendre-toutes-les-fonctionnalites-de-outlook">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/cours-et-formation-au-centre-a-strasbourg-de-outlook-experimente">Outlook expérimenté (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Outlook expérimenté</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Base d’Outlook, formation initiale requise.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Utiliser les fonctions avancées d’Outlook.</b><br>

	- Paramétrer et gérer ses courriers.<br />
	- Mettre en commun des informations, déléguer le travail.<br />
	- Prévoir des réunions à distance.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/cours-et-formation-au-centre-a-strasbourg-de-outlook-experimente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/cours-pour-maitriser-publisher-a-strasbourg">Publisher (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Publisher</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	  Maîtriser les fonctionnalités du logiciel.
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/cours-pour-maitriser-publisher-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/maitrise-et-enseignement-technique-strasbourg-powerpoint">Powerpoint (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Powerpoint</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   Apprendre  les fonctions de Powerpoint afin de composer des diaporamas qui  permettront de vous consolider dans n’importe quelles prestations  orales. <br>
	     Créer des diapositives et les mettre en formes.<br>
	     Concevoir un diaporama attrayant.<br>
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/maitrise-et-enseignement-technique-strasbourg-powerpoint">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-l-essentiel-de-la-bureautique">L'essentiel de la bureautique  (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>L'essentiel de la bureautique </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b><u>Objectifs</u></b><br>
<br>
  Vous permettre d’optimiser votre temps de travail grâce à des outils de bureautique (Word, Excel, PowerPoint, Outlook) en produisant des documents, des présentations et des analyses de qualité et de façon plus rapide.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-l-essentiel-de-la-bureautique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-VBA-programmation-word-excel-access-outlook-formation-informatique">VBA : Programmation Outlook, Word, Excel et Access (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>VBA : Programmation Outlook, Word, Excel et Access</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Avoir déjà une certaine maîtrise des logiciels bureautiques</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Optimiser l’utilisation des modules de Microsoft Office en créant des application permettant d’automatiser des tâches redondantes et mettre en place des interfaces pratiques.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-VBA-programmation-word-excel-access-outlook-formation-informatique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Langues vivantes</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="langues-vivantes/apprendre-anglais">Anglais (30 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Anglais</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>30 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.<br>
 <br></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	 <b>Former les stagiaires pour chaque niveau linguistique :</b>
	
		- Syntaxe de l’anglais;<br />
	
	
		- Les fondamentaux de la grammaire anglaise;<br />
	
	
		- L’orthographie de l’anglais ;<br />
	
	 <b><br>
	 </b><b>Acquérir des compétences dans les divers champs de l’anglais :</b>
	
		- Anglais de l’entreprise ;<br />
	
	
		- Anglais de la négociation ;<br />
	
	
		- Anglais de la logistique ;<br />
	
	
		- Anglais des finances ;<br />
	
	
		- Anglais juridique ;<br />
	
	
		- TOEFL/TOEIC/CAMBRIDGE/IELTS.<br />
	
	 <b><br>
	               Intégrer les stagiaires</b> à la fois à une formation linguistique et culturelle, en les introduisant dans le paysage culturel anglophone.<br>
	 <br>
	 <b>Déroulement de la formation</b><br>
	               La formation mise en place au sein de notre institution prend en compte les techniques optimales pour garder un équilibre entre les besoins des stagiaires et le déroulement des cours :<br>
	               • Evaluer les besoins spécifiques et les attentes des stagiaires<br>
	               • Mettre en place des programmes adaptés au niveau des stagiaires<br>
	               Afin de garantir une optimisation du cours, nous réalisons un questionnaire de satisfaction à mi-parcours.
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/apprendre-anglais">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="langues-vivantes/etudier-allemand">Allemand (10 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Allemand</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>10 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	<b>Vous vous préparez pour un examen en allemand ?</b>
	<hr>
	
		- Préparation TestDAF<br />
	
	
		- Formation DSH<br />
	
	
		- Certificat B1 (Zertifikat B1-Zertifikat Deutsch)<br />
	
	
		- Certificat B2 (Zertifikat B2-Zertifikat Deutsch)<br />
	
	
		- Certificat C1 (Zertifikat C1-Zertifikat Deutsch)<br />
	
	
		- Certificat C2 (Zertifikat C2-Zertifikat Deutsch)<br />
	
	<b>Comment nous évaluons vos acquis :</b><br>
	                        • Contrôle continu en cours de formation<br>
	                        • Bilan de compétences linguistiques en fin de stage<br>
	                        • Attestation finale de niveau linguistique<br>
	 <br>
	 <br>
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/etudier-allemand">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="langues-vivantes/apprendre-le-chinois-a-strasbourg-en-alsace-en-cours-de-groupe-ou-en-individuel">Chinois (30 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Chinois</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>30 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Une bonne motivation !</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Niveau débutant (A1, A2)</b><br>
<hr>
<b>Phonétique :</b><br>
  Introduction au Pinyin (Alphabet Phonétique Chinois) et aux quatre tons du mandarin.<br>
  Les syllabes :<br>

	- Les initiales (consonnes). <br />
	- Les finales (voyelles).<br />

<b>Les tons :</b><br>

	- Le ton haut et constant<br />
	- Le ton montant<br />
	- Le ton descendant et remontant<br />
	- Le ton descendant<br />
	- Le ton léger (neutre)<br />

<b>Maîtrise du système phonologique.</b><br>
  La prononciation est en général suffisamment claire pour être comprise.<br>

	- Les combinaisons phonologiques possibles<br />
	- Les variations de tons<br />
	- Les distinctions des sons<br />
	- Les règles d'écriture phonétique<br />

  ...													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/apprendre-le-chinois-a-strasbourg-en-alsace-en-cours-de-groupe-ou-en-individuel">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="langues-vivantes/cours-espagnol">Espagnol (30 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Espagnol</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>30 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Une bonne motivation !</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Espagnol - Niveau débutant ( A1- A2)<br />
	- Espagnol - Niveau intermédiaire (B1-B2)<br />
	- Espagnol - Niveau expérimenté (C1-C2)<br />
	- L'espagnol professionnel<br />
	- Se préparer aux examens en espagnol<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/cours-espagnol">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="langues-vivantes/s-initier-au-francais">Français (100 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Français</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>100 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Une bonne motivation !</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	 <b>Niveau débutant : </b><br>
	    A1 Introductif<br>
	     A2 Intermédiaire ou de survie<br>
	<br>
	 <b>Niveau intermédiaire </b><br>
	    B1 Niveau de Seuil<br>
	     B2 avancé ou indépendant<br>
	<br>
	 <b>Niveau avancé<br>
	 </b>C1 Autonome<br>
	     C2 Maîtrise
</div>
 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/s-initier-au-francais">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="langues-vivantes/apprentissage-italien">Italien (30 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Italien</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>30 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Une bonne motivation !</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Niveau débutant en italien (A1-A2)<br />
	- Niveau intermédiaire en italien (B1-B2)<br />
	- Niveau expérimenté en italien (C1-C2)<br />
	- Se former à l’italien professionnel<br />
	- Se préparer aux examens en italien<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/apprentissage-italien">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="langues-vivantes/lire-l-arabe">Arabe (30 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Arabe</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>30 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Une bonne motivation !</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Après avoir reçu une initiation à l’écriture arabe, vous développerez les 4 compétences linguistiques indispensables dans la maîtrise de toute langue :<br>

	- Compréhension orale et écrite<br />
	- Expression orale et écrite<br />

   De plus, pour pouvoir utiliser la langue arabe dans un contexte professionnel, nous accentuons notre formation sur :<br>

	- La prononciation et l’accent.<br />
	- La maîtrise des outils linguistiques qui permettent de s'exprimer au téléphone.<br />
	- La rédaction d'emails.<br />
	- Le vocabulaire spécifique à votre domaine d'activité.<br />
	- Le contenu de notre formation dépendra donc de votre activité professionnelle, mais également et surtout de votre niveau et de vos attentes.<br />
	- A la fin de chaque formation, le stagiaire se fera évalué par le professeur et recevra une certification attestant de son niveau.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="langues-vivantes/lire-l-arabe">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-et-cours-de-langue-turc">TURC</a>								
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>TURC</h2>
												</br>
												</span>

												<span class="desc1">
												
																										
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
																										<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-et-cours-de-langue-turc">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="apprendre-le-russe">Russe (30 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Russe</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>30 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
																										<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="apprendre-le-russe">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Efficacité professionnelle</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="formation-decouverte-a-strasbourg-de-la-pnl">Découverte de la PNL (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Découverte de la PNL</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	 <span style="height: 15px;" id="tjx4g0m5i_2" class="tjx4g0m5i">Aucun.</span>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Prendre connaîssance des outils  PNL :<br>

	-  Pour adapter sa communication verbale et non verbale à chaque interlocuteur et à chaque situation.<br />
	-  Pour mieux se connaître, mieux gérer son équipe et pour pouvoir  développer son efficacité personnelle pour diriger et se diriger  soi-même.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-decouverte-a-strasbourg-de-la-pnl">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developpement-personnel/pnl-programmation-neuro-linguistique">PNL (Programmation Neuro Linguistique) (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>PNL (Programmation Neuro Linguistique)</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Savoir appliquer les outils  PNL :<br>

	-  Pour adapter sa communication verbale ainsi que non verbale à chaque interlocuteur et à chaque situation.<br />
	-  Pour mieux se connaître, mieux gérer son équipe, pouvoir développer son  efficacité personnelle, pour diriger et se diriger soi-même.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developpement-personnel/pnl-programmation-neuro-linguistique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-decouverte-gestion-du-stress-dans-son-environnement-professionnel">Formation découverte : gestion du stress au travail (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Formation découverte : gestion du stress au travail</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Détecter les situations de pression et de contrainte de son poste.<br />
	-  Prendre conscience des mécanismes inoculant le stress quotidien au travail.<br />
	-  Comprendre les répercussions du stress à la fois au niveau individuel et au niveau du fonctionnement de l’entreprise.<br />
	-  Trouver des moyens pliés sur son profil pour affranchir toute pression professionnelle.<br />
	-  Apercevoir le rapport gestion du stress au travail /  efficacité.<br />
	-  Adopter les outils adéquats pour prévenir le stress au travail.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-decouverte-gestion-du-stress-dans-son-environnement-professionnel">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="agir-sans-stress-face-a-la-pression-et-suivre-une-formation-a-strasbourg-en-alsace">Agir sans stress face à la pression (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Agir sans stress face à la pression</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Reconnaître ses sources de contraintes pour opérer efficacement.<br />
	-  Prendre de la distance face à la pression liée aux urgences et au surplus de travail.<br />
	-  Gérer son stress pour mieux répondre aux mauvais agissements.<br />
	-  Se procurer une façon de faire et des outils pour réagir au quotidien.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="agir-sans-stress-face-a-la-pression-et-suivre-une-formation-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developpement-personnel/confiance-soi-methodes-strasbourg">Confiance en soi (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Confiance en soi</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Développer ses aptitudes d’actions et canaliser ses énergies.<br />
	-  Élever ses liens aux autres personnes.<br />
	-  Gagner en aisance et accroître sa tranquillité intérieure.<br />
	-  Faire face aux situations désagréables.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developpement-personnel/confiance-soi-methodes-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-a-strasbourg-en-alsace-a-la-formation-assertivite-niveau-deux">Confiance en soi 2 (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Confiance en soi 2</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Exercer son autorité avec diplomatie.<br />
	-  Trouver de nouvelles manières d’agir, de gagner en aisance relationnelle et en confiance.<br />
	-  Bannir les réactions impropices aux relations.<br />
	-  Accroître sa confiance en soi.<br />
	-  Formuler des critiques et des demandes de façon constructive.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-a-strasbourg-en-alsace-a-la-formation-assertivite-niveau-deux">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developpement-personnel/relationnel-etat-du-moi-analyse-transactionnelle-strasbourg">L'analyse transactionnelle (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>L'analyse transactionnelle</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre et pratiquer les techniques de l’analyse transactionnelle.<br />
	-  Développer sa flexibilité comportementale.<br />
	-  Intégrer les outils de l’analyse transactionnelle dans son environnement de travail.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developpement-personnel/relationnel-etat-du-moi-analyse-transactionnelle-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developpement-personnel/arriver-a-prendre-la-parole-en-public">Réussir ses prises de paroles en public (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Réussir ses prises de paroles en public</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Prise de parole à l'improviste.<br />
	-  Surmonter son trac.<br />
	-  Maîtriser son temps de paroles.<br />
	-  Exprimer précisément ses idées.<br />
	-  Maîtriser à travers de nombreux exercices complets les tonalités de la voix, la diction et le regard.<br />
	-  Développer son charisme et savoir surprendre.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developpement-personnel/arriver-a-prendre-la-parole-en-public">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developpement-personnel/gerer-les-sensations">Conduite des sensations (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Conduite des sensations</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Assimiler les sensations vraies.<br />
	-  Se diriger à partir de leurs sensations.<br />
	-  Se manifester sur ce qui est bien ou néfaste pour eux.<br />
	-  Avouer les ressentis néfastes aux individus concernés.<br />
	-  Baser un rapport d’assurance et de sûreté adéquat à l’atmosphère.<br />
	-  Administrer l’engrenage d’un commencement d’antagonismes.<br />
	-  Avoir un meilleur contrôle de leurs conséquences sous état de choc et acquérir en confidence.<br />
	-  Étendre la connaissance ou sensation de soi.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developpement-personnel/gerer-les-sensations">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developpement-personnel/conduite-de-reunion">Conduite de réunion (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Conduite de réunion</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Parvenir à maîtriser la préparation, l'organisation et la conduite de vos réunions.<br />
	-  Identifier les types de réunions possibles et y déployer les methodes et outils correspondant.<br />
	-  Mener à bien un comité de pilotage, une réunion de lancement, d'avancement et de clôture.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developpement-personnel/conduite-de-reunion">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="cette-formation-a-strabourg-a-pour-but-de-vous-donner-les-methodes-pour-captiver-ses-interlocuteurs-lors-des-reunions">Captiver son auditoire (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Captiver son auditoire</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: center;">
	Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Assurer sa présence lors de ses présentations orales.<br />
	-  S’exposer avec hardiesse et bien-être.<br />
	-  Acquérir une légitimité.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="cette-formation-a-strabourg-a-pour-but-de-vous-donner-les-methodes-pour-captiver-ses-interlocuteurs-lors-des-reunions">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-augmenter-son-impact-personnel-et-accroitre-sa-flexibilite-relationnelle-a-strasbourg">Accroître son impact personnel et sa flexibilité relationnelle  (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Accroître son impact personnel et sa flexibilité relationnelle </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Accroître sa flexibilité relationnelle et personnelle, afin d’augmenter son impact auprès de ses interlocuteurs.<br />
	-  Apprendre l’influence constructive.<br />
	-  Augmenter son impact sur autrui.<br />
	-  Meilleur gestion de ses émotions.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-augmenter-son-impact-personnel-et-accroitre-sa-flexibilite-relationnelle-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="mieux-ecouter-pour-decoder-plus-rapidement-les-informations-importantes-formation-a-strasbourg">Mieux écouter pour mieux décoder (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Mieux écouter pour mieux décoder</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Pratiquer l’écoute active pour mieux assimiler l’information.<br />
	- Être à l'écoute afin de se faire comprendre.<br />
	- Êtreattentif à l’attitude non-verbal (gestuelle, regard, distance, posture).<br />
	-  Faire preuve d’empathie pour accroître l'efficacité des relations interpersonnelles.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="mieux-ecouter-pour-decoder-plus-rapidement-les-informations-importantes-formation-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="management/pouvoir-organiser-gerer-son-temps">Gérer son temps (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gérer son temps</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Toujours rester focalisé sur l'essentiel.<br />
	-  S’organiser et Anticiper avec la mise en place d’un système d'organisation.<br />
	-  Réfléchir sur la gestion du temps par rapport à son projet, ses priorités, ses valeurs et de son rôle.<br />
	-  Tenter d’optimiser l'utilisation des méthodes d'information et de communication.<br />
	-  Chercher continuellement à gagner du temps.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="management/pouvoir-organiser-gerer-son-temps">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="lire-rapidement-et-retenir-l-essentiel-afin-de-mieux-se-former-a-strasbourg-en-alsace">Lire plus vite et retenir l'essentiel (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Lire plus vite et retenir l'essentiel</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Accélération de sa rapidité de lecture.<br />
	-  Augmenter sa capacité de concentration.<br />
	-  Opter pour la meilleure stratégie de lecture.<br />
	-  Retrouver et comprendre aisément l’information.<br />
	-  Retenir les informations les plus utiles.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="lire-rapidement-et-retenir-l-essentiel-afin-de-mieux-se-former-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="apprendre-a-mieux-ecrire-a-strasbourg-au-centre-de-formation-straformation">Etre à l'aise à l'écrit (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Etre à l'aise à l'écrit</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Correspondre dans  l’intérêt du récepteur.<br />
	-  Assurer sa façon de faire.<br />
	-  Eprouver du plaisir à écrire dans un contexte professionnel.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="apprendre-a-mieux-ecrire-a-strasbourg-au-centre-de-formation-straformation">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="developper-sa-creativite-a-strasbourg-en-alsace-suivre-une-formation-en-developpement-personnel">Créativité  (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Créativité </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Découverte et développement de ses capacités à créer et imaginer.<br />
	-  Réfléchir différemment et lever les freins à la créativité.<br />
	-  Adopter et inciter la créativité en groupe ou seul.<br />
	-  Contrôler  le processus de créativité.<br />
	-  User de votre créativité pour résoudre les difficultés.<br />
	-  Développer sa créativité au quotidien.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="developper-sa-creativite-a-strasbourg-en-alsace-suivre-une-formation-en-developpement-personnel">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-vivre-une-bonne-retraite">Bien vivre sa retraite (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Bien vivre sa retraite</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Réfléchir à la retraite avec plus de sérénité.<br />
	-  Pouvoir avancer dans la matérialisation de son projet personnel de retraité.<br />
	-  Permettre la prévention de son vieillissement par des pistes d'actions concrètes concernant la santé.<br />
	-  Se faire une meilleure idée des dispositions légales concernant son patrimoine. <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-vivre-une-bonne-retraite">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-efficacite-professionnelle-approche-systemique">L'approche systémique (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>L'approche systémique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Maîtriser l'approche systémique.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-efficacite-professionnelle-approche-systemique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-communication-non-violente">Communication Non Violente (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Communication Non Violente</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Volonté de s’impliquer personnellement et émotionnellement dans cette formation<br>
   pour en tirer les meilleurs bénéfices.<br>
 <br>
 <u>Publics concernés</u><br>
<ul>
	<li>Professionnel : </li>
	<li>Managers </li>
	<li>Responsables de services</li>
	<li>Equipes opérationnelles</li>
	<li>Commerciaux</li>
	<li>Animateurs</li>
	<li>Consultants</li>
	<li>Formateurs </li>
	<li>Accompagnateurs de l’humain (coachs, thérapeutes, psychologues)</li>
	<li>Toute personne qui est en contact et/ou collabore régulièrement avec d’autres personnes qui désire mieux communiquer dans sa vie professionnelle </li>
</ul>
<span style="background-color: rgb(255, 255, 255);"></span></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- <span style="background-color: rgb(246, 246, 246);">Arriver à exprimer pleinement ses besoins et son ressenti sans déclencher d’hostilité</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Manifester une compréhension respectueuse à tout message reçu (même hostile) et proposer une solution </span><br />
	- <span style="background-color: rgb(246, 246, 246);">Prévenir et résoudre les conflits au travail ou dans sa vie personnelle avec une méthode de communication simple </span><br />
	- <span style="background-color: rgb(246, 246, 246);">Accroitre la qualité de la relation, la compréhension et les rapports entre vous et les autres</span><br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-communication-non-violente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Informatique - Web Marketing</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="Informatique/les-bases-en-informatique">Les bases en informatique (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Les bases en informatique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: center;">
	  L'apprenant  se familiarisera avec les ordinateurs en assimilant les bases de  l'informatique.
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/les-bases-en-informatique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/apprendre-a-maitriser-son-pc">Maîtriser son PC (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Maîtriser son PC</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Compréhension ou redécouverte du fonctionnement d’un ordinateur.<br />
	- Protéger et exploiter son poste de travail.<br />
	- Acquérir une meilleure autonomie sur l'entretien ainsi que la protection de son poste de travail.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/apprendre-a-maitriser-son-pc">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/apprendre-a-utiliser-windows-seven">Windows (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Windows</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Personnalisation et organisation de son espace de travail pour gagner en efficacité.<br />
	- Exploitation des outils Windows Live.<br />
	- Maîtrise du paramétrage du poste Windows ainsi que la configuration réseau.<br />
	- Exploitation des fonctionnalités de Windows.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/apprendre-a-utiliser-windows-seven">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-sur-mac-os-a-strasbourg">Mac OS X (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Mac OS X</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   La  formation en l’utilisation de Mac OS X est censée de vous faire  apprendre à opérer avec un système avancé lors de vos activités dans  l’environnement professionnel. De cette manière vous serez capable à  manipuler plus facilement des opérations spécialisées dans  l’environnement informatique. Parmi les objectifs inclus dans la mise en  place de cette formation, nous précisons ceux-ci:<br>
	
		- Apprendre de façon globale les fonctionnalités de Mac OS X et son contenu<br />
	
	
		- Gérer les fonctionnalités spécifiques pour chaque de vos actions<br />
	
	
		- Maîtriser à un niveau approfondi le logiciel dans l’environnement professionnel.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-sur-mac-os-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-au-systeme-d-exploitation-linux-unix">Unix / Linux (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Unix / Linux</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Le  contenu de la formation inclut tous les concepts fondamentaux  nécessaires pour opérer avec ce système: à partir de la gérance des  fichiers, jusqu’à la manipulation des outils spécifiques et des  fonctionnalités plus avancées, vous allez découvrir tous les détails et  outils afin de réussir à opérer avec ce système.<br>
 <br>

	- Comprendre le contenu général du système.<br />
	- Découvrir les fonctionnalités typiques du système.<br />
	- Apprendre les particularités d’un programme shell.<br />
	- Maîtriser les outils et leur applicabilité.<br />
	- Être guidé dans l’utilisation de Linux/Unix eu niveau du réseau local.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-au-systeme-d-exploitation-linux-unix">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/formation-visite-internet-utilisation-de-moteur-de-recherche-apprendre-a-surfer-sur-le-net-strasbourg">Internet (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Internet</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Devenir plus performant avec des méthodes améliorant la recherche sur d'Internet.<br />
	- Trouver plus rapidement l’information la plus utile et fiable.<br />
	- Connaissance des moteurs de recherche et annuaires.<br />
	- Profiter des forums, portails, blogs et listes de diffusion.<br />
	- Maîtrise de la découverte, de l’utilisation et de la gestion de l’information.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/formation-visite-internet-utilisation-de-moteur-de-recherche-apprendre-a-surfer-sur-le-net-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/formation-creer-sa-boutique-ouvrir-son-magasin-en-ligne-strasbourg">Créer sa boutique en ligne (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Créer sa boutique en ligne</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Pratique aisée de la navigation sur Internet.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Installer, mettre à jour et maintenir une e-boutique avec PrestaShop.<br />
	- Mettre en avant votre catalogue de produits et maîtriser la relation avec votre clientèle.<br />
	- Se  servir des leviers marketing pour augmenter vos ventes et mieux  référencer sur les moteurs de recherche votre boutique en ligne.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/formation-creer-sa-boutique-ouvrir-son-magasin-en-ligne-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/comment-creer-site-pro-alsace">Créer son site (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Créer son site</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Connaître l'environnement informatique, PC ou MAC.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Connaître les étapes indispensable à la création d'un site Web.<br />
	- Devenir autonome pour la création d'un site web professionnel ou personnel.<br />
	- Apprendre à gérer et administrer son site.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/comment-creer-site-pro-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="concevoir-et-gerer-les-interfaces-web-de-maniere-ergonomique">Interface web ergonomique (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Interface web ergonomique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  La  poursuite de cette formation nécessite une expérience minimale dans la  conception des pages Web et une familiarisation au Html.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	  A  l’issue de cette formation, vous maîtriserez à un niveau plus avancé le  processus de création de pages Web ergonomiques et la manipulation de  la structure d’un site que vous gérez.<br>
	
		- Se former sur les bases spécifiques de la conception des sites Web;<br />
	
	
		- Apprendre à optimiser l’interface et mettre en place des pages plus lisibles;<br />
	
	
		- Savoir comment configurer l’architecture d’un site Web (organiser l’information, la mise en page etc.)<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="concevoir-et-gerer-les-interfaces-web-de-maniere-ergonomique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-rediger-pour-le-web">Formation content manager / Rédiger pour le web  (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Formation content manager / Rédiger pour le web </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Un minimum de connaissances en informatique.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	    La  finalité envisagée par cette formation vise l’initiation non seulement  aux règles générales d’écriture d’un corpus pour un site, mais aussi aux  techniques à appliquer pour rendre son texte vendeur et concurrentiel,  de sorte que les lecteurs soient plutôt attirés par votre texte parmi  d’autres ayant le même sujet.<br>
	       C’est  un défi auquel il faut répondre avec une préparation au préalable et un  entraînement réel sur la mise en page de tel ou tel hypertexte.<br>
	       En quelques mots, la poursuite de la formation ”rédaction Web” vous dirigera  vers les objectifs ci-dessous:<br>
	
		- Se documenter sur la typologie des hypertextes.<br />
	
	
		- Se familiariser avec les requis d’un texte Web (style, contenu et nature de l’information insérée).<br />
	
	
		- S’occuper du référencement des textes pour les moteurs de recherche.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-rediger-pour-le-web">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/referencement-site-internet-bas-rhin">Référencer son site (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Référencer son site</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Connaitre la micro informatique et savoir naviguer sur internet.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Connaitre les enjeux  d’un bon référencement sur les différents moteurs de recherche.<br />
	- Améliorer sa notoriété et sa visibilité en ligne.<br />
	- Maîtrise des techniques de référencement payantes  ou des liens sponsorisés.<br />
	- Connaître et utiliser les bases indispensables au référencement naturel.<br />
	- Accroître considérablement le nombre de visiteur et  mesurer le R.S.I. (Retour Sur Investissement).<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/referencement-site-internet-bas-rhin">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-analyser-son-trafic-avec-google-analytics">Google Analytics (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Google Analytics</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Etre à l'aise avec l'outil informatique.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Savoir paramétrer Google Analytics.<br />
	- Adopter des stratégies de suivi et d’analyse avec précision du trafic des données.<br />
	- Appliquer les démarches nécessaires correspondant aux résultats de l'analyse de trafic.<br />
	- Comprendre le fonctionnement des indicateurs clés de performance.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-analyser-son-trafic-avec-google-analytics">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/apprendre-a-utiliser-le-logiciel-dreamweawer-elaborer-la-navigation-entre-les-pages-de-son-site-strasbourg">Dreamweawer (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Dreamweawer</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Maîtrise précise d’Internet la micro-informatique en tant qu'utilisateur.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Elaborer la navigation entre les pages de son site.<br />
	- Création de pages graphiques et interactives.<br />
	- Organisation et publication de sites.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/apprendre-a-utiliser-le-logiciel-dreamweawer-elaborer-la-navigation-entre-les-pages-de-son-site-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="informatique/logiciel-dreamweaver-assimilation-niveau-intermediaire-strasbourg-formation">Dreamweawer niveau 2 (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Dreamweawer niveau 2</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Avoir  suivi le stage "Dreamweaver  Niveau 1 ou avoir une pratique régulière du  logiciel Dreamweaver. <br></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Optimisation de l’emploi des feuilles de styles CSS avec Dreamweaver.<br />
	- Maximiser la maintenance de son site.<br />
	- Animation son site et le rendre dynamique.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="informatique/logiciel-dreamweaver-assimilation-niveau-intermediaire-strasbourg-formation">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-community-management-a-strasbourg-en-alsace">Community Management (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Community Management</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Connaissance  des fondamentaux média et marketing-communication. Pratique de la  communication internet.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	  Le  contenu proposé par cette formation entraînée dans le domaine des  réseaux sociaux est orienté vers la mise en place des principaux  scénarios surgis par rapport aux influences médiatiques. Savoir comment  arriver au cœur des réseaux sociaux, voilà le noyau central de cette  formation. C’est parce que les médias rendent notre voix plus forte  qu’on doit apprendre à les utiliser. En commençant par une mise en revue  d’une typologie des réseaux sociaux  jusqu’à la formation dans la  configuration de sa propre communauté, le programme proposé par notre  équipe vous guidera dans cette expérience dans le champ de la  e-communication.<br>
	
		- Se familiariser aux différents types de réseaux sociaux.<br />
	
	
		- Savoir en quoi les concepts  de Community Management et de Content Management consistent.<br />
	
	
		- Découvrir plusieurs stratégies d'influence.<br />
	
	
		- Gérer une situation de crise.<br />
	
	
		- Réussir à tracer des techniques pour délimiter ses propres communautés.<br />
	
	
		- ROI et performance des actions.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-community-management-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="Informatique/e-reputation-facebook-twitter-google-suivre-cette-formation-a-strasbourg-vous-permettra-de-maitriser-les-reseaux-sociaux">Marketing et réputation internet (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Marketing et réputation internet</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Edifier sa e-réputation.<br />
	- Pouvoir accroître son référencement naturel via les réseaux sociaux.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="Informatique/e-reputation-facebook-twitter-google-suivre-cette-formation-a-strasbourg-vous-permettra-de-maitriser-les-reseaux-sociaux">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-bmc-remedy-itsm-incident-management">BMC Remedy ITSM (Incident Management) (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>BMC Remedy ITSM (Incident Management)</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun  prérequis n’est exigé pour la poursuite de la formation BMC ITSM.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													La  formation de utilisation de l’application BMC ITSM est censée de vous  garantir un support technique au niveau de l’organisation des incidents  au sein de votre entreprise. Afin de vous transmettre les connaissances  nécessaires pour une gestion optimisée de tous les incidents, la  poursuite de cette formation se propose de vous former sur des actions  telles que:<br>

	-  Comprendre le fonctionnement de base de l’application BMC ITSM.<br />
	-  Acquérir les connaissances indispensables sur le module de la Gestion des Incidents.<br />
	-  Parcourir les modules Gestion des Problèmes, des Changements et de la Configuration.<br />
	-  Garantir  une hiérarchisation optimisée des missions et des plans d’actions au  sein de l’entreprise et par rapport aux partenaires à l’international<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-bmc-remedy-itsm-incident-management">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-mener-un-projet-informatique">Mener un projet informatique (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Mener un projet informatique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Une expérience en tant que membre d’une équipe projet est préférable</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<br>

	- Développer des compétences techniques en gestion de projet <br />
	- S’exercer à développer des relations de qualité avec les équipiers, la hiérarchie et l’ensemble des acteurs du projet<br />
	- Associer les préconisations du pôle qualité<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-mener-un-projet-informatique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-referencement-naturel-payant"> Référencement naturel/payant  (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'> Référencement naturel/payant </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Expérience dans la création et/ou la mise à jour de site internet est souhaitable<br>
    Connaissances et pratique courante d’internet</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre comment fonctionnent les moteurs de recherche<br />
	- Être capable d’utiliser le référencement naturel et payant<br />
	- Maximiser le postionnement et le référencement de son site internet<br />
	- Comprendre et maîtriser toutes les possibilités de référencemement “on” et “off-site”<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-referencement-naturel-payant">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Comptabilité - Paie</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="comptabilite-gestion/comprendre-un-compte-de-resultat">Comprendre un bilan (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Comprendre un bilan</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div>
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Déterminer et présenter un constat concis et juste.<br />
	- Pouvoir comprendre le raisonnement du compte de résultat et du bilan.<br />
	- Réussir  à analyser et expliquer  les ratios principaux.<br />
	- Déceler les indices d’altération en lecture directe.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="comptabilite-gestion/comprendre-un-compte-de-resultat">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="comptabilite-gestion/formation-en-comptabilite">Comptabilité (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Comptabilité</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre l'organisation comptable, analyser les comptes de résultats et le bilan.<br />
	- Classer se servir des documents comptable. <br />
	- Faire la comptabilité sur des opérations quotidienne.<br />
	- Maîtriser les contrôles comptables. <br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="comptabilite-gestion/formation-en-comptabilite">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="monter-la-liasse-fiscale-et-le-bilan-formation-comptabilite-a-strasbourg">Monter la liasse fiscale et le bilan (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Monter la liasse fiscale et le bilan</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Notions en comptabilité.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Savoir parer et  contourner les difficultés liées à la clôture des comptes.<br />
	- Maîtriser parfaitement le calcul de l'impôt sur les sociétés et déterminer le résultat fiscal.<br />
	- Parvenir à mettre en forme le dossier de révision comptable.<br />
	- Réussir à compléter  les documents de la liasse fiscale.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="monter-la-liasse-fiscale-et-le-bilan-formation-comptabilite-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="reussir-et-maitriser-son-business-plan-a-strasbourg-en-suivant-une-formation-en-alsace">Réussir son business plan (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Réussir son business plan</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Connaissance de base du bilan et du compte de résultat.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Savoir édifier son business plan et "commercialiser" son projet.<br />
	- Repositionner son projet dans la politique de l'entreprise.<br />
	- Préparer ou estimer des prévisions d'activité.<br />
	- Apprécier le résultat économique et financier.<br />
	- Préparer un plan de financement prévisionnel.<br />
	- Évaluer les risques du projet.<br />
	- Présenter le projet de manière déterminante.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="reussir-et-maitriser-son-business-plan-a-strasbourg-en-suivant-une-formation-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="management/mieux-comprendre-les-salaires-et-charges-strasbourg">Salaires et charges (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Salaires et charges</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Avoir une expérience en paie d'au moins 6 mois.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Maîtriser les différentes  situations de la paie.<br />
	- Connaître les fondements juridiques de la paie.<br />
	- Parvenir à gérer la prise en charge du paiement des cotisations et clôture de la DADS-U.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="management/mieux-comprendre-les-salaires-et-charges-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/utiliser-pour-comptabilite-ciel-paie-evolution">CIEL Paie Evolution (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>CIEL Paie Evolution</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Pratique de la gestion de la paye.<br>
	    Utilisation courante de l’environnement Windows<br>
</div>
<div style="text-align: center;">
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Etablir des déclarations sociales.<br />
	-  Etablir des bulletins de paye.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/utiliser-pour-comptabilite-ciel-paie-evolution">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/compte-de-resultats-connaissance-ciel-comptabilite-evolution">Ciel comptabilité évolution  (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Ciel comptabilité évolution </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Connaissance et pratique de la comptabilité.<br>
	    Utilisation courante de l’environnement Windows.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Tenir  sa comptabilité, saisie des écritures, suivi de la trésorerie jusqu’au  bilan.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/compte-de-resultats-connaissance-ciel-comptabilite-evolution">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/suivre-des-cours-sur-ciel-gestion-commercial-pro-bas-rhin">CIEL Gestion Commercial Pro (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>CIEL Gestion Commercial Pro</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Maitriser les fonctionnalités du logiciel.<br />
	-  Gestion des devis, factures, suivi clientèle et de la gestion des stocks.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/suivre-des-cours-sur-ciel-gestion-commercial-pro-bas-rhin">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/comprendre-les-fonctionnalite-de-ebp-comptabilite-pro-strasbourg">EBP Comptabilité Pro (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>EBP Comptabilité Pro</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Connaissance d'EBP comptable
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Module communication expert comptable.<br />
	-  Actualiser ses connaissances du logiciel.<br />
	-  Gestion des immobilisations.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/comprendre-les-fonctionnalite-de-ebp-comptabilite-pro-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/formation-strasbourg-ebp-gestion-commerciale-pro">EBP Gestion Commerciale Pro (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>EBP Gestion Commerciale Pro</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Bien paramétrer son logiciel et l'adapter à ses besoins.<br />
	- Créer les documents commerciaux.<br />
	- Créer les fichiers de base clients, articles, modes de règlement. <br />
	- Maîtriser le fonctionnement du stock. <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/formation-strasbourg-ebp-gestion-commerciale-pro">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/strasbourg-technique-apprendre-formation-sage-gestion-commerciale">SAGE Gestion Commerciale (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>SAGE Gestion Commerciale</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: center;">
	  Connaissance de l’environnement Windows.<br>
	   Notions sur les tâches commerciales de l’entreprise.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Maîtriser les bases du logiciel.<br />
	-  Être autonome dans la gestion d’une société.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/strasbourg-technique-apprendre-formation-sage-gestion-commerciale">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-de-gestion/strasbourg-technique-apprendre-formation-sage-gestion-commerciale">SAGE Paie (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>SAGE Paie</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Connaissance de l’environnement Windows.<br>
	    Notions sur les tâches commerciales de l’entreprise.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Maîtriser les bases du logiciel.<br />
	-  Être autonome dans la gestion d’une société.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-de-gestion/strasbourg-technique-apprendre-formation-sage-gestion-commerciale">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Fiscalité - Droit des affaires</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="suivre-une-formation-a-strasbourg-droit-du-travail-pour-les-rh">Droit du travail pour les RH (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Droit du travail pour les RH</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Avoir une maîtrise parfaite des fondamentaux du droit du travail.<br />
	-  Savoir s’organiser dans la structure juridique de la gestion du personnel.<br />
	-  Avoir les automatismes juridiques indispensables en GRH.<br />
	-  Gestion efficace d’une question légale.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-une-formation-a-strasbourg-droit-du-travail-pour-les-rh">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="aller-a-la-formation-droit-immobilier-a-strasbourg-pour-connaitre-le-contrat-de-vente">Droit immobilier : Le contrat de vente (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Droit immobilier : Le contrat de vente</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	     Aucun.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Le stagiaire aura les outils et les compétences pour exercer la profession de l'agent immobilier.<br />
	-  Être capable de gérer les règles essentielles du droit immobilier.<br />
	-  Maîtriser les termes spécifiques du contrat de vente.<br />
	-  Consolider ses connaissances en matière d’obligations<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="aller-a-la-formation-droit-immobilier-a-strasbourg-pour-connaitre-le-contrat-de-vente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="les-regles-des-transports-nationaux-internationaux-union-europeenne"> Les Règles des transports nationaux et internationaux (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'> Les Règles des transports nationaux et internationaux</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<ol>
	- Assimiler les règles de transport national et international<br />
	- Présenter les règles applicables en matière de transport de marchandises dans l’UE<br />
	- Maîtriser la pratique par une meilleure compréhension des règles de transport<br />
</ol>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="les-regles-des-transports-nationaux-internationaux-union-europeenne">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Santé - Qualité - Sécurité - Environnement</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="formation-chef-de-projet-developpement-durable">Chef de projet développement durable (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Chef de projet développement durable</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Assimiler les acquis théoriques sur la démarche de développement durable.<br />
	-   Prendre en charge l’intégration des missions de conduite de changement et de management de projet.<br />
	-   Engager l’équipe à la mise en place des bonnes pratiques pour maintenir les objectifs du développement durable.<br />
	- Contribuer à la mise en œuvre de la responsabilité sociétale de l’entreprise.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-chef-de-projet-developpement-durable">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-qualite-iso-a-strasbourg">Connaissance de la norme ISO9001 (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Connaissance de la norme ISO9001</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre les exigences du référentiel et leurs implications dans la vie courant de l’entreprise.<br />
	- Comprendre la relation client - fournisseur.<br />
	- Comprendre l’approche par processus.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-qualite-iso-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-gestes-eco-citoyens-hygiene-environnement-securite">Gestes Eco-citoyens en entreprise (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestes Eco-citoyens en entreprise</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Adopter les gestes éco-citoyens dans vie professionnelle et personnelle <br />
	- Comprendre les fondements du développement durable et les mettre en place. <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-gestes-eco-citoyens-hygiene-environnement-securite">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-produit-entretien-securite-hygiene-menage-nettoyage-bas-rhin-strasbourg-france">Utilisation des produits d'entretien en toute sécurité  (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Utilisation des produits d'entretien en toute sécurité </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Le but de cette formation est de permettre à toute personne qui exerce des activités de nettoyage de surface d’acquérir les compétences nécessaires pour pouvoir sélectionner et se servir efficacement et en sécurité des produits et du matériel d’entretien.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-produit-entretien-securite-hygiene-menage-nettoyage-bas-rhin-strasbourg-france">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Formations règlementaires</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="formation-habilitation-electrique-basse-haute-tension-securite-danger-bash-rhin-strasbourg-alsace-france">Habilitations électriques (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Habilitations électriques</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Les pré-requis diffèrent selon le niveau d'habilitation visé. <br>
<br></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Nous vous proposons d'avoir une ou plusieurs habilitations électriques : <br>

	- <b>Basse tension</b>
	
		- <i><b>Hors tension</b> </i>- pour le personnel non électricien : habilitations<b> B0, B1, B2, BC</b><br />
		- <b><i>Sous tension</i></b> - pour le personnel électricien : habilitations <b>B1T, B2T, BN</b><br />
		- <b><i>Intervention</i></b> - pour le personnel électricien : habilitations <b>BR, BC</b><br />
	
	 <br />
	- <b>Haute tension </b>
	
		- <b><i>Hors tension</i></b> - pour le personnel non électricien : habilitations <b>H0, H1, H2, HC</b><br />
		- <b><i>Sous tension</i></b> - pour le personnel électricien : habilitations <b>H1T, H2T, HN</b><br />
	
	 <br />

       Nos formateurs qualifiés et expérimentés, donnent un avis à l'employeur qui validera l'habilitation du salarié.<br>
 <br>
       Ces habilitations sont valables pendant 3 ans et une formation recyclage est alors nécessaire pour les renouveler.<br>
<br>
? <a href="http://www.straformation.fr/formation/formation-recyclage-habilitation-electrique-basse-haute-tension-danger-risque-strasbourg-bas-rhin-alsace-france">Formation Recyclage pour les habilitations électriques</a>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-habilitation-electrique-basse-haute-tension-securite-danger-bash-rhin-strasbourg-alsace-france">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="hygiene-securite/maintien-et-actualisation-des-competences-sst-strasbourg-bas-rhin">Recyclage - MAC SST (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Recyclage - MAC SST</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Avoir été habilité SST.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Etre capable de </b>:<br>

	- <span style="background-color: rgb(246, 246, 246);">Situer le sauvetage secourisme du travail dans la santé et la sécurité du travail.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Faire alerter ou alerter.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Utiliser le défibrillateur (DSA ou DAE).</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Prévenir.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Protéger.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Informer.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Secourir.</span><br />
	- <span style="background-color: rgb(246, 246, 246);">Examiner.</span><br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="hygiene-securite/maintien-et-actualisation-des-competences-sst-strasbourg-bas-rhin">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="sst-sauveteur-secouriste-du-travail-formation-securite-danger ">Sauveteur Secouriste du Travail (SST) (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Sauveteur Secouriste du Travail (SST)</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Conformément au programmes de l’INRS et grâce à nos formateurs habilités, cette formation vous permettra en tant que SST d’intervenir lors des situations d’accident au sein de l’entreprise de façon rapide et efficace en adoptant le bon comportement et en ayant les bons gestes. <br>
 <br>
     Notre formation contient une partie théorique et une partie pratique.<br>
<br>
  Cette habilitation est valable 2 ans au bout desquelles le salarié doit la renouveler pour garder le statut de SST. <br>
<br>
 ? Retrouvez notre formation recyclage :  <a href="http://www.straformation.fr/menuFormation/hygiene-securite/maintien-et-actualisation-des-competences-sst-strasbourg-bas-rhin" target="_blank">MAC SST</a> !													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="sst-sauveteur-secouriste-du-travail-formation-securite-danger ">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-caces-intra-logistique-batiment-chantier-construction-engins-strasbourg-bas-rhin-alsace">CACES toutes catégories et recyclage (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>CACES toutes catégories et recyclage</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Formation en Inter lieux modulable en fonction de la région.<br>
<br>
Formation en INTRA : <br>
 <br>
 <i>Pour des raisons d'efficacité, l'entreprise mettra à disposition ses engins afin que le stagiaire prenne ses repaires sur les outils qu'ils devra utiliser au quotidien.</i></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													L’objectif de cette formation est d’obtenir le <b><span style="color: rgb(192, 80, 77);">Certificat d’Aptitude à la Conduite En Sécurité</span></b> (CACES) qui permet la conduite d’engins. <br>
<br>
            Nos formations sont proposées dans le cadre de formation <b>intra entreprise</b>.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-caces-intra-logistique-batiment-chantier-construction-engins-strasbourg-bas-rhin-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="prevention-des-risques-lies-a-l-activite-physique-danger-securite-strasbourg-bas-rhin-alsace-france">Prévention des Risques liés à l'Activité Physique (PRAP) (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Prévention des Risques liés à l'Activité Physique (PRAP)</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Cette formation a pour but de prévenir un salarié des risques liés à l’activité physique et de le faire participer de façon efficace à l’amélioration de ses conditions de travail. <br>
  Ainsi, grâce à une meilleure organisation du travail, le salarié peut diminuer et prévenir les Troubles Musculo-Squelettiques (TMS) qui impactent fortement la santé au travail. <br>
<br>
  3 types de formation PRAP : <br>

	- PRAP IBC : Industrie, BTP, Commerce (2 jours)<br />
	- PRAP 2S : Sanitaire et Social (3 jours)<br />
	- PRAP petite enfance (2 jours) <br />

<br>
  Cette formation est à la fois pratique et théorique et est dispensée soit en intra ou en inter-entreprise. <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="prevention-des-risques-lies-a-l-activite-physique-danger-securite-strasbourg-bas-rhin-alsace-france">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-recyclage-habilitation-electrique-basse-haute-tension-danger-risque-strasbourg-bas-rhin-alsace-france">Recyclage habilitations électriques  (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Recyclage habilitations électriques </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Avoir obtenu l'habilitation depuis au moins 3 ans.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Mise à jour des connaissances du personnel (électricien et/ou non-électricien) ayant une habilitation électrique basse et/ou haute tension lui permettant de réaliser des opérations d'ordre électrique.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-recyclage-habilitation-electrique-basse-haute-tension-danger-risque-strasbourg-bas-rhin-alsace-france">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="cps-id-certificat-de-prevention-secours-intervenant-a-domicile ">Certificat de Prévention Secours - Intervenant à Domicile CPS-ID  (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Certificat de Prévention Secours - Intervenant à Domicile CPS-ID </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Cette formation a pour but de vous permettre d’identifier les risques lié à votre métier et d’avoir le comportement adéquat en cas de dysfonctionnement, d’accident ou d’incident en entreprise.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="cps-id-certificat-de-prevention-secours-intervenant-a-domicile ">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="elus-ce-droit-devoir-formation-obligatoire-economique-gestion-finance-france">Elus du CE : formation économique (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Elus du CE : formation économique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Cette formation est destinée aux membres du CE qui ont déjà une expérience à ce poste ou alors qui ont suivi une formation portant sur le fonctionnement du Comité d’Entreprise.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Étant donné que les missions et le pouvoir d’un Comité d’Entreprise (CE) peuvent fortement impacter l’activité de l’entreprise, l’Etat a rendu obligatoire la formation des membres du CE (articles L 2325-44 et R 2325-8 du code du travail) dans le but de leur donner les connaissances de base en matière de finance et de gestion et afin donc que ces derniers puissent être compétent à leur poste d’élu.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="elus-ce-droit-devoir-formation-obligatoire-economique-gestion-finance-france">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="habilitation-atex-atmosphere-explosive">Habilitations ATEX - ATmosphère EXplosive (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Habilitations ATEX - ATmosphère EXplosive</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													L’objectif de cette formation est de vous permettre d’accéder à plusieurs niveaux d’habilitation ATEX. Ces habilitations ont pour objectifs généraux de vous : <br>

	- faire connaître la réglementation portant sur les zones ATEX <br />
	- d’avoir les comportements et les attitudes professionnelles adéquates dans ces zones-là<br />
	- connaître les moyens de prévention pouvant être mis en place.<br />

<br>
<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="habilitation-atex-atmosphere-explosive">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="amiante-ss4-personnel-encadrement-de-chantier-ou-encadrement-technique">Amiante SS4 - Encadrement  (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Amiante SS4 - Encadrement </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Le stagiaire doit présenter un document attestant de son aptitude à travailler à son poste. <br>
<br></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Cette formation s’adresse à toute personne intervenant dans le cadre d’un encadrement de chantier ou d’un encadrement technique. Elle permet d’acquérir les compétences nécessaires pour toute action en cas de présence d’amiante :<br>

	- Détection de l’amiante <br />
	- Connaître les opérations à risque <br />
	- Adapter le travail en fonction du risque d’exposition <br />
	- Maîtriser les méthodes d’actions<br />
	- Mettre en place une évaluation des risques et un mode opératoire <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="amiante-ss4-personnel-encadrement-de-chantier-ou-encadrement-technique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="amiante-ss4-personnel-operateur-de-chantier">Amiante SS4 - Opérateurs  (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Amiante SS4 - Opérateurs </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Le stagiaire doit présenter un document attestant de son aptitude à travailler à son poste.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Cette formation s’adresse à toute personne intervenant en tant qu’opérateur de chantier. Elle permet d’acquérir les compétences nécessaires pour toute action en cas de présence d’amiante :<br>

	- Maîtrise de la réglementation dans le domaine.<br />
	- Identifier une situation de danger et les risques liés à l’amiante dans son activité<br />
	- Savoir agir de façon efficace pour se protéger soi-même et son entourage en ayant recours à procédures adaptées (captage des poussières, ventilation,...)<br />
	- Réaliser une évaluation des risques et mettre en place un mode opératoire<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="amiante-ss4-personnel-operateur-de-chantier">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="evrp-evaluation-des-risques-professionnels">EvRP - Évaluation des Risques Professionnels (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>EvRP - Évaluation des Risques Professionnels</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Connaître la réglementation concernant l’évaluation des risques professionnels et les recommandations de l’INRS.<br />
	- Comprendre les intérêts d’une action de prévention en termes humains, sociaux, juridiques, financiers. <br />
	- Organiser un plan d’action d’évaluation des risques professionnels. <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="evrp-evaluation-des-risques-professionnels">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="membres-du-chsct-pour-les-entreprises-de-moins-de-300-salaries">Membres du CHSCT - Entreprises < 300 salariés (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Membres du CHSCT - Entreprises < 300 salariés</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													La formation s’adresse aux membres du CHSCT des entreprises de moins de 300 salariés et aux délégués du personnel pour les établissements de moins de 50 salariés. <br>
<br>
  Elle a pour but de : <br>

	- Comprendre le rôle du Comité d’Hygiène, de Sécurité et des Conditions de Travail (CHSCT), les moyens en sa possession du comité, ainsi que ses missions <br />
	- Contribuer de façon importante à la prévention des risques au sein de l’entreprise<br />

<br>
<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="membres-du-chsct-pour-les-entreprises-de-moins-de-300-salaries">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="membres-du-chsct-entreprises-de-plus-de-300-salaries">Membres du CHSCT - Entreprises > 300 salariés (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Membres du CHSCT - Entreprises > 300 salariés</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<br>
Cette formation est destinée aux membres de CHSCT des entreprises de plus de 300 salariés.<br>
Elle a pour but de : <br>

	- Comprendre le rôle du Comité d’Hygiène, de Sécurité et des Conditions de Travail (CHSCT), les moyens en sa possession du comité, ainsi que ses missions <br />
	- Contribuer de façon importante à la prévention des risques au sein de l’entreprise<br />

<br>
<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="membres-du-chsct-entreprises-de-plus-de-300-salaries">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="epi-equipier-premiere-intervention">EPI - Équipier Première Intervention (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>EPI - Équipier Première Intervention</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Elle permettra au stagiaire de : <br>

	- Intervenir rapidement et avoir la bonne attitude face à un début d’incendie (alerter les secours, protéger les dangers,...)<br />
	- Pouvoir utiliser efficacement les moyens de lutte contre le feu les plus adéquats <br />
	- Maîtriser les consignes et les règles de sécurité et d’évacuation en général et celles propres à l’entreprise <br />

<br>
La formation EPI est dispensée de préférence en INTRA, dans les locaux de l’entreprise pour permettre une meilleur adaptation à l’environnement de travail des stagiaires.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="epi-equipier-premiere-intervention">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="feebat-renove-mention-rge">FeeBat RENOVE "Devenir responsable technique en rénovation énergétique des logements" (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>FeeBat RENOVE "Devenir responsable technique en rénovation énergétique des logements"</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Avoir des compétences en études thermique du bâtiment.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre et maîtriser la dépense énergétique lors d’un chantier sur un bâtiment et cela dans le cadre du Plan de Révovation Energétique de l’Habitat (PREH),<br />
	- Être force de propositions économiques, environnementales et techniques en terme d’économie d’énergie en respectant les besoins de chaque acteur du projet. <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="feebat-renove-mention-rge">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="fef">CACES R372 (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>CACES R372</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
																										<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="fef">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-amiante-ss3">Amiante SS3 (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Amiante SS3</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
																										<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-amiante-ss3">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Ressources humaines</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="management/ressources-humaines-reussir-un-recrutement">Formation réussir un recrutement (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Formation réussir un recrutement</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div>
	 <span style="color: rgb(0, 0, 0);">Aucun </span>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Faire passer un entretien de recrutement organisé et adapté.<br />
	- Description structurée du poste, des compétences et des évolutions de l'emploi.<br />
	- Acquérir des méthodes pour conduire à bien un entretien d’embauche.<br />
	- Comprendre et maîtriser des techniques de recrutement afin de maximiser ses ressources internes et d’attirer de nouvelles compétences.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="management/ressources-humaines-reussir-un-recrutement">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-de-tuteur-en-entreprise">Tuteur en entreprise (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Tuteur en entreprise</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Afin  de faciliter le déroulement de la formation et l’approfondissement des  connaissances dans le domaine, il est conseillé d’avoir déjà une  certaine connaissance sur le fonctionnement d’une entreprise. En même  temps, il est indispensable de présenter une envie de partager ses  compétences, afin de garantir une mission de tutorat réussie.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- La découverte de votre position au niveau de l’entreprise. <br />
	- Les stratégies de transmission efficace de vos compétences. <br />
	- L’optimisation de la politique d’alternance dans votre environnement professionnel.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-de-tuteur-en-entreprise">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-gpec-a-strasbourg">Gestion Prévisionnelle des Emplois et des Compétences (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestion Prévisionnelle des Emplois et des Compétences</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	    La  formation GPEC est construite dans le sens de l’initiation par rapport  aux exigences du processus de recrutement, de gérance des ressources et  de coordination des emplois. La finalité envisagée lors de cette  formation consiste à la transmission des acquis indispensables dans le  contexte de l’opérationnalisation des méthodes de travail et de  l’allocation des ressources disponibles. L’optimisation des activités  déroulées au sein de DRH, le renforcement des projets GPEC et du  processus de recrutement, voilà une série d’objectifs visés par la GPEC.<br>
	       En  glissant du général vers le plus particulier, la formation GPEC se  propose de vous initier au niveau des suivants savoir-faire :
	
		- Acquérir une méthode afin de mener un projet GPEC.<br />
	
	
		- Bâtir des cartes métiers et un référentiel de compétences.<br />
	
	
		- Comprendre le rôle du travail en équipe dans la démarche GPEC.<br />
	
	
		- Projeter des plans d'actions RH pour réduire l'écart de compétences.<br />
	
	
		- S'entraîner à présenter le projet GPEC à l'ensemble des acteurs.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-gpec-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="les-fondamentaux-du-droit-du-travail-et-la-fonction-rh-niveau-deux-pour-se-former-a-strasbourg">Droit du travail pour les RH niveau 2 (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Droit du travail pour les RH niveau 2</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Avoir  des bases en droit du travail ou avoir auparavant suivi la formation  « Formation droit du travail pour les RH – Niveau1 ».
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Consolider les relations avec l’inspection du travail.<br />
	-  Repérer les points de vigilance dans la vie d’un contrat de travail.<br />
	-  Gérer de façon efficace la fin d’un contrat de travail pour motif individuel.<br />
	-  Avoir une maîtrise parfaite du cadre juridique des négociations.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="les-fondamentaux-du-droit-du-travail-et-la-fonction-rh-niveau-deux-pour-se-former-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="travailleur-de-nuit-risques-et-prevention">Travail de nuit : risques et prévention (1 jour)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Travail de nuit : risques et prévention</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>1 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<br>
<ol>
	- Évaluer les effets du travail de nuit <br />
	- Comprendre le fonctionnement de son organisme et ses besoins d’endormissement pour pouvoir adopter le bon ryhtme de travail. <br />
</ol>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="travailleur-de-nuit-risques-et-prevention">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>La formation professionnelle </b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="suivre-une-formation-pedagogique-pour-devenir-formateur-en-alsace">Formation de formateur (6 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Formation de formateur</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>6 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	     Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Il s’agit de savoir mettre en place une formation : conception, préparation, animation, évaluation.<br />
	- De savoir dynamiser un groupe, en suscitant et maintenant l’intérêt des stagiaires.<br />
	- D’utiliser la pédagogie adaptée pour s’assurer de l’appropriation des informations.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-une-formation-pedagogique-pour-devenir-formateur-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Gestion - Finance - Trésorerie</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="formation-pour-creer-son-entreprise">Créer son entreprise (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Créer son entreprise</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun pré-requis n’est exigé pour pouvoir accéder à la poursuite de la formation.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Créer son activité.<br />
	- Le cadre juridique, fiscal et social.<br />
	- Concevoir le business plan.<br />
	- Lancer son activité.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-pour-creer-son-entreprise">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="comptabilite-gestion/gestion-de-tresorerie">Gestion de trésorerie (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestion de trésorerie</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun pré-requis n’est nécessaire pour cette formation.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Construire des calculs de trésorerie.<br />
	- Prendre des décisions de placement.<br />
	- Assimiler les altérations de trésorerie.<br />
	- Gérer les flux en espèces.<br />
	- Surveiller les données financières.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="comptabilite-gestion/gestion-de-tresorerie">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="comptabilite-gestion/gestion-financiere">Gestion financière (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestion financière</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Connaissances en comptabilité générale.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Le raisonnement à adopter pour assurer un diagnostic rapide.<br />
	- Utiliser des outils permettant l'analyse financière.<br />
	- Avoir une logique claire dans son analyse.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="comptabilite-gestion/gestion-financiere">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="comptabilite-gestion/gestion-previsionnelle">Gestion prévisionnelle (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestion prévisionnelle</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Évaluation et simulation des risques.<br />
	- Maîtrise des critères de rentabilité des projets marchands et non marchands.<br />
	- Présentation de son projet de manière à être convaincant.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="comptabilite-gestion/gestion-previsionnelle">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="management/comment-ameliorer-le-recouvrement-et-eviter-les-impayes">Améliorer le recouvrement et éviter les impayés (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Améliorer le recouvrement et éviter les impayés</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	  Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Parvenir à optimiser la gestion des comptes clients.<br />
	- Eviter définitivement les impayés.<br />
	- Réusisir à améliorer le recouvrement des créances clients.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="management/comment-ameliorer-le-recouvrement-et-eviter-les-impayes">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-a-strasbourg-sur-les-tableaux-de-bord-et-savoir-suivre-les-budget">Suivre les budgets et tenir les tableaux de bord (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Suivre les budgets et tenir les tableaux de bord</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div>
	   Cette formation ne nécessite pas de pré requis.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Utiliser les indicateurs clés pour concevoir un tableau de bord.<br />
	- Mettre en place un budget en ayant une connaissance parfaite des principaux postes.<br />
	- Présenter et commenter les résultats.<br />
	- Tirer profits de l’ensemble des possibilités qu’offre Excel.<br />
	- Mesurer la pertinence des tableaux déjà mis en place.<br />
	- Noter toutes les questions importantes auxquels le manager devra répondre.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-a-strasbourg-sur-les-tableaux-de-bord-et-savoir-suivre-les-budget">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="suivre-la-formation-en-gestion-financiere-et-apprendre-la-finance-niveau-debutant-a-strasbourg-en-alsace">Finance pour non-financiers (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Finance pour non-financiers</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre le raisonnement de la construction du bilan et du compte de résultat.<br />
	-  Maîtriser l’ensemble des processus financiers de l’entreprise.<br />
	-  À partir d’une analyse financière complète, évaluer la santé financière de l’organisme.<br />
	-  Comprendre le fonctionnement des tableaux de flux.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-la-formation-en-gestion-financiere-et-apprendre-la-finance-niveau-debutant-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Assistanat - Accueil - Secteur public</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="se-former-pour-pour-le-metier-d-assistant-ou-assistante-de-direction-a-strasbourg-en-alsace">Assistant(e) de direction (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Assistant(e) de direction</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Une  expérience de 2 à 3 ans est nécessaire pour profiter pleinement des  acquis de cette formation.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Centrer sa fonction d’assistant(e) de direction  sur l’organisation.<br />
	- Rendre optimale la gestion de l’information orale et écrite.<br />
	- Développer son sens relationnel.<br />
	- Mettre en place des échanges professionnels mutuellement optimaux.<br />
	- Gérer son temps de travail en se concentrant sur les priorités.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-pour-pour-le-metier-d-assistant-ou-assistante-de-direction-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="l-assistant-de-communication-et-sa-formation-a-strasbourg-en-alsace">Assistant(e) de communication  (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Assistant(e) de communication </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun  prérequis n’est nécessaire pour cette formation.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Participer à la mise en œuvre des plans de communication.<br />
	- Comprendre de manière efficace les enjeux de la politique de communication de l’entreprise.<br />
	- Identification de différentes professions de la communication.<br />
	- Savoir gérer les différents outils de la communication.<br />
	- Acquisition  des méthodes et des outils pour améliorer ses compétences professionnelles.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="l-assistant-de-communication-et-sa-formation-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="suivre-la-formation-pour-apprendre-le-metier-de-assistant-ou-assistante-drh-a-strasbourg">Assistant(e) de DRH (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Assistant(e) de DRH</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Notre formation permet :</b><br>

	- De détenir le savoir-faire juridique nécessaire et une recherche optimale de l’information.<br />
	- D’identifier les missions et les rôles des principaux partenaires internes et externes.<br />
	- Gérer la formation et participer au recrutement.<br />
	- Améliorer ses méthodes ainsi qu'assurer la gestion du service au quotidien via une utilisation optimale du temps à disposition.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-la-formation-pour-apprendre-le-metier-de-assistant-ou-assistante-drh-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="repondre-a-des-marches-publics">Marchés publics (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Marchés publics</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													A la fin de la formation vous serez capable de maîtriser les différents aspects techniques et financiers des marchés publics pour pouvoir y répondre de façon efficace et optimiser ainsi vos chances de les emporter.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="repondre-a-des-marches-publics">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Commercial - Vente </b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="commercial-vente/rediger-ecrire-un-courrier-professionnel-dans-le-bas-rhin">Améliorer ses écrits professionnel (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Améliorer ses écrits professionnel</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Savoir rédiger ses courriers aisément qu'ils soient sur format papier ou électronique.<br />
	- Satisfaire son lecteur.<br />
	- Être précis et concis dans ses écrits.<br />
	- Accroître la qualité et la vitesse de rédaction de vos messages professionnels.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="commercial-vente/rediger-ecrire-un-courrier-professionnel-dans-le-bas-rhin">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-rediger-un-argumentaire-de-vente">Rédiger l'argumentaire de vente (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Rédiger l'argumentaire de vente</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Formuler un argumentaire précis et documenté de l’offre de votre entreprise en  incluant le catalogue des services proposés et des produits disponibles.<br />
	- Construire une méthodologie pointue et logiquement structurée afin de réussir son argumentaire.<br />
	- Orienter les cibles de son argumentaire vers les attentes de ses clients potentiels.<br />
	- Tester cet argumentaire en pratique afin de le valider et le consolider.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-rediger-un-argumentaire-de-vente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-pour-mieux-communiquer-par-telephone-a-strasbourg">Mieux communiquer par téléphone (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Mieux communiquer par téléphone</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Améliorer la qualité de l’échange téléphonique.<br />
	- Développement de son aisance au téléphone.<br />
	- Adopter les bons réflexes.<br />
	- Savoir gérer les situations délicates.<br />
	- Gagner de l’efficacité et du temps.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-pour-mieux-communiquer-par-telephone-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="commercial-vente/accueil-physique-et-telephonique">Accueil physique et téléphonique (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Accueil physique et téléphonique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Vous comprendrez la notion de "service qualité".<br />
	- Vous valoriserez  le personnel dans son poste.<br />
	- Vous développerez l'image d'accueil et de service de l'entreprise.<br />
	- Vous découvrirez et comprendrez les attitudes qui  amélioreront la relation avec le client dans le but de dynamiser l'image de l'entreprise.<br />
	- Vous prendrez en charge de manière efficace les clients en développant vos compétences techniques et relationnelles nécessaires.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="commercial-vente/accueil-physique-et-telephonique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-accueil-client-dans-la-surface-de-vente">Accueil client dans la surface de vente (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Accueil client dans la surface de vente</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Afin de poursuivre cette formation aucune condition initiale n’est requise par avance. Tout public recevant l’accueil de leur client sur la surface de vente.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	    Les objectifs sont orientés vers l’entraînement pratique à l’accueil du client, quel que soit son profil. En ce sens, nos formateurs vous transmettront les techniques à aborder afin de créer un climat de confiance.
	
		- S’informer par avance sur le profil du client s’il s’agit d’un entretien.<br />
	
	
		- Essayer de cibler les expectantes du client pour savoir répondre à ses besoins.<br />
	
	
		- S’entraîner à la communication ouverte sur les ventes.<br />
	
	
		- User d’un langage approprié et surtout professionnel.<br />
	
	
		- Découvrir les stratégies appropriées pour garantir un accueil professionnel du client.<br />
	
	
		- Favoriser par son comportement et professionnalisme un climat de confiance.<br />
	
	
		- Maintenir la confiance du client.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-accueil-client-dans-la-surface-de-vente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="suivre-la-formation-pratique-a-la-vente-a-strasbourg-en-alsace">Vente et relation client (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Vente et relation client</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Avoir déjà fait de la vente en face à face.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													


	- Incorporer les besoins du client à sa démarche commerciale.<br />
	- Développer des méthodes de vente complète et concrète afin de parfaire ses entretiens.<br />
	- Assimiler les sept habitudes indispensables pour réussir une vente.<br />
	- Gagner en confiance et en aisance à tous les moments de l’entretien.<br />
	- Conclure positivement en répondant aux objections.<br />
	- Mettre en place les bonnes bases  pour une relation durable avec le client.<br />

 <br>
 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-la-formation-pratique-a-la-vente-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="vente-et-negociation-pour-cadres-non-commerciaux-et-enfin-mieux-se-former-a-strasbourg">Vente en face à face (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Vente en face à face</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Adopter une attitude commerciale avec les clients.<br />
	- Améliorer son écoute afin de mieux comprendre les attentes du client.<br />
	- Construire un partenariat « gagnant-gagnant » en trouvant des intérêts communs.<br />
	- Savoir collaborer avec les différents commerciaux dans l’intérêt de l’entreprise et des clients.<br />
	- Optimiser son efficacité personnelle dans la relation établie avec les clients et cela même pendant les moments difficiles.<br />
	- Etre plus à son aise face à un client.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="vente-et-negociation-pour-cadres-non-commerciaux-et-enfin-mieux-se-former-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="commercial-vente/prospection-telephonique-formation-phoning-strasbourg">Phoning / prise de RDV et vente par téléphone (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Phoning / prise de RDV et vente par téléphone</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	     Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	     S'approprier les différents outils du contact déterminant et de la prise de rendez-vous par téléphone.   Procédé de préparation des appels et de leur suivi.   Améliorer et étayer son attitude envers l'interlocteur.   Réussir à gérer et mener l'entretien téléphonique   Parvenir à assumer les différents objectifs ( appels de présentation clients, offres promotionnelles, produits variés,  prospection commerciale, manifestation, etc...).
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="commercial-vente/prospection-telephonique-formation-phoning-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="commercial-vente/apprendre-a-bien-negocier-une-vente-a-strasbourg">L'art de la négociation (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>L'art de la négociation</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Découvrir les fondements de toute négociation.<br />
	- Élaborer ses négociations avec efficience.<br />
	- Définir la stratégie de négociation.<br />
	- Identifier son « profil » de négociateur.<br />
	- Identifier les aptitudes du négociateur.<br />
	- Optimiser ses performances en négociation.<br />
	- Choisir la bonne attitude pour accéder à son but tout en préservant la valeur de la liaison.<br />
	- Acquérir les outils et techniques importantes de la négociation et les maîtriser quotidiennement.<br />
	- Amener ses négociations avec aise et aborder à une conclusion.<br />
	- Déterminer ses forces et ses faiblesses en condition de négociation.<br />
	- Choisir la bonne attitude pour accéder à son but tout en préservant la valeur de la liaison.<br />
	- Davantage mener les tensions et les embûches de la négociation et fuir les conditions pénibles.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="commercial-vente/apprendre-a-bien-negocier-une-vente-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-aux-metiers-de-la-vente-a-strasbourg-en-alsace">la Prospection commerciale de A à Z (6 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>la Prospection commerciale de A à Z</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>6 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div>
	      Connaître les principes de bases de la vente.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- L'organisation de la prospection.<br />
	- Le respect de l'argumentaire.<br />
	- Le traitement des objections.<br />
	- La prise de RDV.<br />
	- Maîtriser son temps et gérer mieux son secteur de vente.<br />
	- Optimiser ses méthodes de ventes, du premier contact à la fidélisation.<br />
	- S'imposer lors d'une négociation.<br />
	- Avoir une attitude favorisant la réussite et apprendre à mieux se connaître.<br />
	- Conclure sa vente à temps.<br />

<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-aux-metiers-de-la-vente-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-a-la-negociation-d-achats-a-strasbourg-dans-le-bas-rhin">Négociation à l'achat (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Négociation à l'achat</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Préparer sa négociation d'achats.<br />
	- Conduire l'entretien.<br />
	- Découverte des outils pratiques à l'achat utilisés dans les entreprises au quotidien.<br />
	- Apprendre les méthodes des professionnels de l'achat.<br />
	- Réduire les coûts liés à l'achat.<br />
	- Adopter un comportement efficace.<br />
	- Répondre aux besoins des clients internes.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-a-la-negociation-d-achats-a-strasbourg-dans-le-bas-rhin">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-negociation-a-l-achat-niveau-deux-a-strasbourg-en-alsace">Négociation à l'achat niveau 2 (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Négociation à l'achat niveau 2</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Maîtriser la méthode ou avoir déjà suivi la formation négociation à l'achat 1.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Mettre à profit ses connaissances personnelles de négociateur d'achats afin de :<br />
	- Savoir influencer l'interlocuteur.<br />
	- Pour mieux collaborer, créer la complicité avec vos clients.<br />
	- Utiliser différents registres de communication.<br />
	- Adopter le relationnel adéquat pour mieux convaincre vos fournisseurs.<br />
	- Gérer les situations qui ont un enjeu.<br />
	- Atteindre vos objectifs.<br />
	- Respecter les valeurs de l'entreprise dans un contexte d'achats responsables.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-negociation-a-l-achat-niveau-deux-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="se-former-a-strasbourg-pour-repondre-aux-clients-difficiles.">Clients difficiles, résoudre tous les conflits (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Clients difficiles, résoudre tous les conflits</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Pour pouvoir suivre cette formation, il faut connaître au préalable les techniques de vente.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Dans les situations de face à face et téléphoniques, savoir adopter les attitudes et les comportements les mieux adaptés à chaque échange.<br />
	- Mettre un terme de façon subtile aux comportements conflictuels de certains.<br />
	- Développer l’art de faire passer un message difficile sans être passif (ve) et surtout sans être agressif (ve).<br />
	- Savoir être diplomate en cas de désaccords.<br />
	- Faire face aux conflits et résoudre les problèmes liés de façon constructive.<br />
	- Développer son charisme et la confiance en soi.<br />
	- Conserver la rentabilité et l’image de son entreprise en ayant des automatismes pour affirmer la confiance en soi.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="se-former-a-strasbourg-pour-repondre-aux-clients-difficiles.">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formez-votre-voix-pour-ameliorer-vos-resultats-commerciaux-a-strasbourg">Former sa voix pour mieux vendre (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Former sa voix pour mieux vendre</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   La poursuite de cette formation n'exige aucune préparation antérieure dans le domaine.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Éprouver son esprit assertif.<br />
	- Contrôler le stress et gérer ses réactions sous la pression.<br />
	- Parvenir à des ventes réussies.<br />
	- Maîtriser les techniques verbales d'un vendeur professionnel.<br />
	- S'imposer de façon diplomate pour désamorcer des tensions.<br />
	- Améliorer la communication non-verbale.<br />
	- Savoir écouter les autres et rester empathique.<br />
	- Comprendre l'influence portée par sa tonalité.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formez-votre-voix-pour-ameliorer-vos-resultats-commerciaux-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-televendeur-industries-alimentaire-divers">Télévendeur : Industries alimentaires diverses (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Télévendeur : Industries alimentaires diverses</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Promotion des produits et des nouveautés de l'entreprise <br />
	- Prise des commandes et des requêtes des clients <br />
	- Assurer le SAV à distance et faciliter la livraison<br />
	- Développement de la fidélisation des clients <br />
	- Communication en interne pour transmettre les bonnes informations <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-televendeur-industries-alimentaire-divers">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-rediger-mailing-emailing-formation-marketing">Rédiger des mailings et E-Mailings</a>								
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Rédiger des mailings et E-Mailings</h2>
												</br>
												</span>

												<span class="desc1">
												
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Maîtriser les techniques de rédaction pour des campagnes de mailings et d’e-mailing performantes. <br>
  Optimiser l’impact des envois													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-rediger-mailing-emailing-formation-marketing">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Management d'équipe - Projet - Production</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="formation-mobilite-internationale-a-straformation">Formation gérer la mobilité internationale (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Formation gérer la mobilité internationale</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	                                                 Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- <span style="font-family: Arial; color: rgb(0, 0, 0); background-color: rgb(184, 204, 228);">Maîtriser les normes des contrats de travail à mobilité internationale.</span><br />
	- <span style="font-family: Arial; color: rgb(0, 0, 0);">Connaître les exigences par rapport à la couverture sociale des employés avant leur départ.</span><br />
	- <span style="font-family: Arial; color: rgb(0, 0, 0);">Se familiariser aux règles des conventions fiscales pour mener à fin les procédures de mobilité internationale.</span><br />
	- <span style="font-family: Arial; color: rgb(0, 0, 0);">Acquérir un aperçu sur les autres législations des pays de destination/d’origine des employeurs.</span><br />
	- <span style="font-family: Arial; color: rgb(0, 0, 0);">Consolider ses compétences d’administrer des actions intégrées à des projets de taille internationale.</span><br />
	- <span style="font-family: Arial; color: rgb(0, 0, 0);">Donner des solutions fiables aux collaborateurs internationaux.</span><br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-mobilite-internationale-a-straformation">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="accompagnement-des-equipes-et-des-hommes-au-changement-et-se-former-a-strasbourg">Accompagner les équipes au changement (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Accompagner les équipes au changement</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Étudier d’un angle moral la situation dans l’entreprise.<br />
	- Assurer le suivi du projet de changement.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="accompagnement-des-equipes-et-des-hommes-au-changement-et-se-former-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-pour-deleguer-en-confiance">Déléguer en confiance (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Déléguer en confiance</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	<span style="color: rgb(0, 0, 0);">La  formation à la délégation en confiance n’exige aucun prérequis. Par  contre, il serait préférable que les candidats possèdent un esprit  communicatif très bien développé.</span>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<span style="color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">Le  point cible de cette formation est focalisé vers l’entraînement des  employés et des responsables  aux méthodes efficaces pour mener à bien  leurs missions en tant que délégués de leur entreprise. A la fin de la  formation, vous serez capables de :<br>
</span> </span>

	- <span style="color: rgb(0, 0, 0);">Pousser les autres à adhérer au projet de l’entreprise;</span><br />
	- <span style="color: rgb(0, 0, 0);">Encourager la mobilisation des autres acteurs autour des plans d’action de l’entreprise;</span><br />
	- <span style="color: rgb(0, 0, 0);">Imposer son esprit de leader du projet et de l’équipe.</span><br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-pour-deleguer-en-confiance">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="managent/apprendre-a-gerer-les-conflits-alsace">Gestion des conflits (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestion des conflits</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Déterminer  les processus de l’antagonisme afin d’adopter les agissements les plus  adéquats afin de les administrer, qu'ils soient collectifs ou  organisationnels.<br />
	- Déterminer et constater plusieurs astuces d’administration des antagonismes.<br />
	- Perfectionner son mode de communication pour anticiper ou répondre aux conflits.<br />
	- Reconnaître son champ de manoeuvre pour gérer les conflits.<br />
	- Identifier et pouvoir analyser les raisons du conflit afin de pouvoir sortir du conflit.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="managent/apprendre-a-gerer-les-conflits-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="management/strasbourg-tout-pour-apprendre-a-diriger-et-animer-une-equipe">Diriger et animer une équipe (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Diriger et animer une équipe</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Savoir prendre du recul afin d' évoluer ses pratiques managériales.<br />
	- Savoir sur quoi repose l'efficacité du management.<br />
	- Manager  selon le contexte de son entreprise.<br />
	- Obtenir les différents outils et méthodes afin de manager son équipe au quotidien.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="management/strasbourg-tout-pour-apprendre-a-diriger-et-animer-une-equipe">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-a-strasbourg-manager-commercial-pour-animer-la-force-de-vente">Manager commercial animer la force de vente (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Manager commercial animer la force de vente</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Au moins un an de manager est requis.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Améliorer son efficacité et ses compétences de tous les jours, en travaillant les fondamentaux.<br />
	- Savoir motiver tous les commerciaux pour booster ses ventes.<br />
	- Bâtir et forger l’esprit d’équipe.<br />
	- Conduire et animer des réunions stimulantes.<br />
	- Savoir gérer les situations  difficiles en management.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-a-strasbourg-manager-commercial-pour-animer-la-force-de-vente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-management-a-strasbourg-en-alsace-pour-comprendre-le-management-transversal">Management transversal (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Management transversal</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Connaître les conditions pour la mise en place d’un management transversal efficace.<br />
	- Savoir rassembler les acteurs concernés.<br />
	- Manager et impliquer sans lien hiérarchique en augmentant son pouvoir de persuasion.<br />
	- En situation fonctionnelle, mettre en place les conditions de la coopération.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-management-a-strasbourg-en-alsace-pour-comprendre-le-management-transversal">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-leadership-a-strasbourg-manager-efficacement-son-personnel">Manager efficacement (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Manager efficacement</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Avoir  une responsabilité d’encadrement ou vouloir se préparer à en avoir une.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<b>Développer les compétences clé, que sont :</b><br>
       1. Communication.<br>
       2. Service client.<br>
       3. Développement des employés.<br>
       4. Leadership.<br>
       5. Gestion du changement.<br>
       6. Négociation.<br>
       7. Résolution des problèmes.<br>
       8. Augmentation de la productivité.<br>
       9. Pensée stratégique.<br>
       10. Développement de l'esprit d'équipe.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-leadership-a-strasbourg-manager-efficacement-son-personnel">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="suivre-une-formation-management-de-chef-des-ventes-a-strasbourg-en-alsace">Chef des ventes (5 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Chef des ventes</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>5 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Un minimum d’expérience en tant que manager.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Savoir ce que désir la  direction commerciale et l’équipe de vente.<br />
	- Délimiter sa responsabilité et son champ d’action en tant que chef des ventes.<br />
	- Déjouer les pièges les plus courants.<br />
	- Mettre en place des plans d’actions commerciales garantissant des résultats.<br />
	- Connaître  les méthodes, les outils et les techniques pouvant aider à parfaire ses  missions de manager : piloter, accompagner, motiver et animer son  équipe.<br />
	- S’approprier une aptitude favorisant l’engagement maximal de ses commerciaux.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-une-formation-management-de-chef-des-ventes-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="suivre-la-formation-chef-de-produit-en-alsace-a-strasbourg">Chef de produit  (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Chef de produit </h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Occuper  depuis peu, ou prendre un poste de chef de produit ou chef de marché.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													- Assimiler les différentes méthodes et les divers principes du métier de " chef de produit".<br />
- Développement et gestion de  son  portefeuille de marque et de produits.<br />
- Tenter d'augmenter les ventes de son offre en interne et en externe.<br />
<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="suivre-la-formation-chef-de-produit-en-alsace-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="comptabilite-gestion/savoir-gerer-un-projet">Gestion de projet (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Gestion de projet</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Être en charge de la conduite d’un projet en entreprise, membre d’une équipe projet, ou simplement impliqué dans la réalisation d’un projet.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Organiser, conduire son projet et respecter les objectifs, budgets et échéances.													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="comptabilite-gestion/savoir-gerer-un-projet">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-audit-interne-systeme-management-strasbourg">Audit interne des systèmes de management (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Audit interne des systèmes de management</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Connaissance  d’un référentiels Qualité ou Sécurité ou Environnement.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Etre capable de piloter et de réaliser l’ensemble des activités relatives à l’audit interne du système de management.<br />
	- Etre  capable de réaliser l’audit interne d’un processus ou d’une partie de  l’organisation de l’entité pour mettre en évidence des écarts.<br />
	- Recevoir un diplôme d’auditeur interne.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-audit-interne-systeme-management-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-qualite-les-methodes-de-resolution-des-problemes-en-alsace">Les méthodes de résolution des problèmes (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Les méthodes de résolution des problèmes</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Etre  capable de mettre en œuvre une démarche d’analyse d’un problème afin de  déterminer ses causes racines et de l’éradiquer définitivement<br />
	- Utilisation d’outils de type QRQC/8D, 5 Pourquoi, QQOQCP<br />
	- Travail en groupe autonome<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-qualite-les-methodes-de-resolution-des-problemes-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="manager-par-processus-et-suivre-une-formation-a-strasbourg-en-alsace">Manager par les processus (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Manager par les processus</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun,  mais une connaissance des organisations serait un plus.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Etre  capable de comprendre le rôle de l’approche processus, pouvoir réaliser  une cartographie, rédiger les fiches processus, identifier les  indicateurs de performance pertinents.<br />
	- Etre capable de revoir son processus pour préparer la revue de Direction.<br />
	- Pouvoir mesurer la maturité des processus et définir les axes de progrès.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="manager-par-processus-et-suivre-une-formation-a-strasbourg-en-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-gestion-documentaire-strasbourg">Efficacité de la gestion documentaire (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Efficacité de la gestion documentaire</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Aucun,  mais avoir déjà rédigé une procédure ou une instruction serait un plus.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Être capable de comprendre les exigences de la gestion documentaire des référentiels Qualité Sécurité Environnement.<br />
	-  Savoir identifier les documents qui doivent être gérés.<br />
	-  Pouvoir mettre en place une organisation documentaire satisfaisant aux exigences.<br />
	-  Savoir écrire une procédure, une instruction.<br />
	-  Comprendre la différence entre document et enregistrement.<br />
	-  Être capable de piloter un plan de progrès lean documentaire.<br />

 <br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-gestion-documentaire-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="analyse-fonctionnelle-et-cahier-des-charges-fonctionnel-cdcf-af-formation-sur-strasbourg">Cahier des charges fonctionnel et analyse fonctionnelle (d'un projet) (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Cahier des charges fonctionnel et analyse fonctionnelle (d'un projet)</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	    Aucun
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Traduire le besoin de manière fonctionnelle.<br />
	-  Ecrire un Cahier des charges Fonctionnel (CdCF) spécial client.<br />
	-  Augmenter les marges de manœuvre en termes de négociation de l’acheteur.<br />
	-  Conduire un groupe d’expression des attentes des clients.<br />
	-  Accroître son potentiel d’innovation.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="analyse-fonctionnelle-et-cahier-des-charges-fonctionnel-cdcf-af-formation-sur-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-pour-developper-son-leadership">Développer son leadership (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Développer son leadership</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Le but de cette formation est de permettre au stagiaire d’avoir de nouvelles aptitudes en tant que manager, d’améliorer ses compétences relationnelles et d’animer une équipe. <br>
 <br>
 Le manager parviendra à la fin de la formation à :<br>

	- Exploiter ses points forts en tant que leader.<br />
	- Avoir des relations de qualité avec les membres de son équipe et ses supérieurs hiérarchiques.<br />
	- Résoudre les problèmes de manière plus affirmée.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-pour-developper-son-leadership">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-savoir-communiquer-dans-les-projets-informatique">Savoir communiquer dans un projet informatique (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Savoir communiquer dans un projet informatique</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													C’est pour palier à ces difficultés que nous proposons cette formations qui permettra au stagiaire de : <br>

	- Communiquer plus aisément avec l’ensemble des acteurs du projet <br />
	- Affirmer son rôle afin de contrer toute dérive <br />
	- Utiliser différentes méthodes de communication <br />
	- Adapter sa méthode de communication aux différentes phases du projet<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-savoir-communiquer-dans-les-projets-informatique">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="elus-du-ce-droits-devoirs-moyens-entreprise-representant-personnel-delegue-france">Elus du CE : rôle et missions (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Elus du CE : rôle et missions</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Comprendre le rôle et les missions du Comité d’Entreprise, les liens qu’il peut y avoir avec d’autres instances. <br />
	- Être au clair sur les obligations et les droits des élus. <br />

<br>
<br>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="elus-du-ce-droits-devoirs-moyens-entreprise-representant-personnel-delegue-france">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="secretaire-du-ce-france-alsace-bash-rhin-strasbourg">Etre secrétaire du CE (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Etre secrétaire du CE</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													Le but de cette formation est de : <br>

	- Définir le rôle du secrétaire (H/F) ainsi que ses droits et ses devoirs <br />
	- Permettre à l’élu de se professionnaliser en améliorant ses compétences juridiques et en lui donnant les bases nécessaires pour animer le comité <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="secretaire-du-ce-france-alsace-bash-rhin-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="tresorier-du-ce-france-alsace-bas-rhin-strasbourg">Etre trésorier du CE (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Etre trésorier du CE</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center>Aucun.</center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Maîtriser le rôle du Trésorier et de Trésorier adjoint du CE, ainsi que les moyens à sa disposition pour remplir sa fonction. <br />
	- Assumer les responsabilités liés au poste et savoir se protéger son travail. <br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="tresorier-du-ce-france-alsace-bas-rhin-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Infographie - PAO - CAO</b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/retoucher-sur-photoshop-les-outils-pour-modifier-une-image-formation-strasbourg">Photoshop (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Photoshop</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div>
	   Maîtriser la micro-informatique et la bureautique.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- S'approprier   les bases nécessaires de Photoshop dans le but de pouvoir tout  reprendre pour  recadrer, redimensionner, retoucher les couleurs et les  imperfections de vos photos.<br />
	-  Réussir à utiliser  les principaux détourages d'images avec le logiciel Photshop.<br />
	-  Parvenir à mettre en pratique Préparer les visuels pour le web ou l'impression.<br />
	-  Corriger,  simplifier, modifier,  transformer, améliorer, retoucher et parvenir à  enrichir les différentes images numériques obtenues avec Photoshop.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/retoucher-sur-photoshop-les-outils-pour-modifier-une-image-formation-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/suivre-une-formation-photoshop-experimente">Photoshop expérimenté (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Photoshop expérimenté</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Avoir une très bonne pratique du logiciel.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Créer des images pour l'imprimeur et pour le Web.<br />
	-  Acquérir des trucs et astuces "pro".<br />
	-  Acquérir une méthode rationnelle.<br />
	-  Gagner du temps en utilisant les outils appropriés.<br />
	-  Faire des retouches.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/suivre-une-formation-photoshop-experimente">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/creer-des-presentations-avec-outils-indisign">InDesign (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>InDesign</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Connaissances de base de Windows et de Word.
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Maîtriser  InDesign afin de créer des présentations et des documents de qualité.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/creer-des-presentations-avec-outils-indisign">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/creer-des-illustrations-vectorielles-avec-illustrator-strasbourg">Illustrator (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Illustrator</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   La  formation Illustrator n’exige pas des connaissances approfondies dans  le domaine. Cependant, il est recommandé d’avoir déjà une aisance avec  les outils informatiques et les notions de base sur les opérations  graphiques.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   La  formation Illustrator vous propose des solutions spécifiques dans le  but d’optimiser la projection des images de haute qualité. Suite à cette  formation, vous serez capables de manipuler toutes les fonctions  contenues par Illustrator et vous pourrez mettre en œuvre des projets  graphiques réussis et de qualité.<br>
	
		- S’intégrer à une formation opérationnelle, supposant une implication directe des participants.<br />
		- Apprendre à opérer avec toutes les fonctionnalités mises à votre disposition par les options d’Illustrator.<br />
		- Réussir à gérer les principales fonctions permettant la création des images de qualité.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/creer-des-illustrations-vectorielles-avec-illustrator-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciels-specifiques/concevoir-des-paysages-dessiner-avec-skecthup-strasbourg">Google SketchUp (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Google SketchUp</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Maitrise  correcte de l'outil informatique d'une manière générale (fichiers,  répertoires, installation de programmes, recherches sur Internet,...).
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   La  formation en Google SketchUP est organisée dans le but de vous  transmettre une aisance par rapport à l’utilisation de la 3D et la  manipulation des outils nécessaires pour l’optimisation de vos projets  3D. Nos formateurs feront de leur mieux de sorte qu’à la fin de cette  formation vous serez capables de:<br>
	
		- Créer des textes et des différents objets 3D;<br />
		- Modéliser des surfaces;<br />
		- Importer et exporter des objets;<br />
		- Connaître toutes les commandes spécifiques 3D.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciels-specifiques/concevoir-des-paysages-dessiner-avec-skecthup-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="logiciciels-specifiques/autocad-apprentissage-du-dessin-alsace">Autocad (4 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Autocad</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>4 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Afin  de suivre la formation en AutoCAD, un niveau minime de familiarisation  avec les outils informatiques est nécessaire. <br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   L’initiation  à l’emploi d’AutoCAD a comme principal but la transmission des acquis  fondamentaux vous permettant de travailler avec un outil de conception  moderne. Cette formation en AutoCAD est censée de vous garantir une  maîtrise parfaite de tous les objets du logiciel (faces 3D, arcs  elliptiques, repères multiples etc.)<br>
	
		- Se familiariser avec la terminologie du logiciel.<br />
		- Découvrir toutes les options de configuration et de paramétrage.<br />
		- Maîtriser les différentes commandes d’AutoCAD (telles que la visualisation  et l’affichage)<br />
		- Mettre en place des dessins et des projets techniques compétitifs par l’usage de cette version performante d’AutoCAD.<br />
		- Apprendre à importer des modèles de telle ou telle application, voire Solidworks, Rhinoceros®.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="logiciciels-specifiques/autocad-apprentissage-du-dessin-alsace">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
																<li class="has-sub">
								
																	<a href="formation-final-cut-pro-a-strasbourg-montage-video">Final Cut Pro (3 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Final Cut Pro</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>3 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   La  poursuite de la formation sur Final Cut Pro exige de bonnes  connaissances d'un système d'exploitation sur Mac. Une expérience du Web  est aussi requise.<br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													<div style="text-align: justify;">
	   Dans  un premier plan, vous apprendrez des notions de base comprenant les  fonctionnalités numériques du logiciel, les spécificités du montage, les  fonctions audio-vidéo aussi que les effets spéciaux.<br>
	
		- Configurer le logiciel selon vos besoins.<br />
		- Maîtriser les fonctions de montage, les particularités audio et les effets spéciaux.<br />
		- Adapter ses projets en fonction des caractéristiques techniques du logiciel.<br />
	
</div>													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="formation-final-cut-pro-a-strasbourg-montage-video">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
										<li class='has-sub'>
					<a><span><b>Transport - Logistique </b></span></a>
						<ul>
							<div id="pat">
																<li class="has-sub">
								
																	<a href="la-maitrise-des-transports-et-la-reglementation-douaniaire-et-se-former-a-strasbourg">Maîtrise du transport et réglementation douanière (2 jours)</a>
								
									<ul>
										<li id='desc'>
											<span class="descr">
												<span class="desc0">
												<h2 id='titledesc'>Maîtrise du transport et réglementation douanière</h2>
												</br>
												</span>

												<span class="desc1">
												
																										<h2 id="duree" class="title">Durée</h2>
													<br>
													<center>2 jours ( modulable en fonction de vos besoins)</center>
													<br><br>
																										
																										<h2 id="prerequis" class="title">Pré-requis</h2>
													<br>
													 <center><div style="text-align: justify;">
	   Pour  pouvoir suivre cette formation, une expérience dans l’import export est  indispensable. <br>
</div></center>
													<br/><br>
																										<h2 id="competences" class="title">Compétences visées</h2>
													<data class="tempfix-comp-visees">
															
													
	- Analyse, sélection et mise en place des différentes opérations de dédouanement.<br />
	-  Rédaction des documents administratifs.<br />
	-  Négociation mutuellement avantageuses avec les transitaires.<br />
	-  Identification des documents indispensables aux activités d’importation et d’exportation.<br />
	-  Le programme de formation.<br />
	-  Maitriser le traitement douanier et l’organisation des échanges internationaux.<br />
													<br/> <br/> <br/>
													</data>
													<center>
													<table>
														<tr>
															<td>
									<a href="la-maitrise-des-transports-et-la-reglementation-douaniaire-et-se-former-a-strasbourg">En savoir plus...</a>
															<td><td><td><a href="http://www.straformation.fr/demande-de-devis-straformation" target="_blank" class="button">Obtenir un devis</a>
													</table>
													</center>
												</span>
											</span>
										</li>
									</ul>
								</li>
															</div>
						</ul>
					</li>
									</ul>
			</div>
		</div>

	</div>
			<!-- FIN DU MENU -->  
	</div>
</div>
<br>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript">


$(document).ready(function(){
  $("has-sub").hover(function(){
    $("has-sub").setAttribute("style","background: blue !important");
    },function(){
    $("has-sub").setAttribute("style","blackground: red !important");
  });
});

</script>
</html>
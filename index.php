<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mon Test d'intégration</title>
<style type="text/css">
body{
	background-color: #f5cf91;
}
#header{
	height: 150px;
	background-image: url('images/header.jpg');
}
#header h1{
	font-family: 'The Girl Next Door', cursive;
	color: greenyellow;
	margin: 0;
	padding: 0 0 0 25px;
	font-size: 4em;
	text-shadow: 2px 2px 14px red;
}
#contenant, #contenant2{
	padding: 0 250px;
	position: relative;
	text-align: justify;
}
#contenant2{
	background-color: #f7f7a7;
	clear: both; 
}
nav {
	background-color: #c64d04;
	border: white double 1px;
	color : white;
	width: 200px;
	left:8px;
	top: 0px;
	position: absolute;
	z-index: 5;
}
nav a{
	color : white;
}
#up{
	position: absolute;
	left: 35px;
	top: 0;
	margin: 20px
}
</style>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/fixto.min.js"></script>
<script type="text/javascript" src="js/jquery.jscroll.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>
<script type="text/javascript">
$(function(){
	$('nav').fixTo('#contenant');
	$('#up').fixTo('#contenant2');
	$('.scroll').jscroll({
	    loadingHtml: '<img src="images/loading.gif" alt="Chargement" >Chargement...',
	});

});
</script>
</head>
<body>
	<div id="header"><h1>Menu fixto + jscroll : infinite scrolling</h1></div>
	<div id="contenant">
		<nav>
			<ul>
				<li><a href="#">Top</a></li>
				<li><a href="#tag1">Menu fixto</a></li>
				<li><a href="#tag2">Infinite scrolling</a></li>
				<li><a>menu 3</a></li>
			</ul>
		</nav>
		<h1>Site de présentation</h1>
		<p><a id="tag1"></a>A savoir que j'ai utilisé pour ce site une police d'ecriture en ligne proposé par google via le site : <a href="https://www.google.com/fonts#QuickUsePlace:quickUse/Family:" target="_blank">Site de google fonts</a> lien direct vers la police utilisé pour le titre du site ;)</p>
		<p>Les choses essentiels pour bien commencer un site sont : 
			<ul>
			  <li>Coder en HTML 5</li>
			  <li>Introduire les CSS avec un reset pour uniformiser les apparences sous tous les navigateurs</li>
			  <li>Utiliser une apparence en responsive theme pour rendre compatible avec tous les devices</li>
			  <li>Valoriser le contenu pour aider au référencement</li>
			</ul>
		</p>
		<p>Quid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est
			enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.</p>
		<p>Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere
			tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro
			acciverat, ad Italiam properare blande hortaretur et verecunde.</p>
		<p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.</p>
		<p>Ipsam vero urbem Byzantiorum fuisse refertissimam atque ornatissimam signis quis ignorat? Quae illi, exhausti sumptibus bellisque maximis, cum omnis Mithridaticos impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore
			repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa et reliqua urbis ornanemta sanctissime custodita tenuerunt.</p>
		<p>Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere
			tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro
			acciverat, ad Italiam properare blande hortaretur et verecunde.</p>
	</div>
	<div id="contenant2">
		<div id="up"><a href="#"><img src="images/arrow_up.png" alt="Retour au menu" title="Retour au menu" /></a></div>
		<a id="tag2"></a>
		<h1>Chargement automatique ou adieu les pagination</h1>
		<div class="scroll">
		    <?php include_once 'page.php';?>
		</div>
	</div>
</body>
</html>
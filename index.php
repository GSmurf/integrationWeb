<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mon Test d'intégration</title>
<style type="text/css">
#header{
	height: 150px;
	background-image: url('images/header.jpg');
}
#header h1{
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
	background-color: yellow;
	clear: both; 
}
nav {
	background-color: pink;
	width: 240px;
	left:8px;
	top: 0px;
	position: absolute;
	z-index: 5;
}
</style>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/fixto.min.js"></script>
<script type="text/javascript" src="js/jquery.jscroll.min.js"></script>

<script type="text/javascript">
$(function(){
	$('nav').fixTo('#contenant');
	$('.scroll').jscroll({
	    loadingHtml: '<img src="images/loading.gif" alt="Chargement" >Chargement...',
	});

});
</script>
</head>
<body>
	<div id="header"><h1>Titre de mon site</h1></div>
	<div id="contenant">
		<nav>
			<ul>
				<li>menu 1</li>
				<li>menu 2</li>
				<li>menu 3</li>
				<li>menu 4</li>
				<li>menu 5</li>
				<li>menu 6</li>
			</ul>
		</nav>
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
		<p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.</p>
		<p>Ipsam vero urbem Byzantiorum fuisse refertissimam atque ornatissimam signis quis ignorat? Quae illi, exhausti sumptibus bellisque maximis, cum omnis Mithridaticos impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore
			repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa et reliqua urbis ornanemta sanctissime custodita tenuerunt.</p>
		<p>Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere
			tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro
			acciverat, ad Italiam properare blande hortaretur et verecunde.</p>
		<p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.</p>
		<p>Ipsam vero urbem Byzantiorum fuisse refertissimam atque ornatissimam signis quis ignorat? Quae illi, exhausti sumptibus bellisque maximis, cum omnis Mithridaticos impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore
			repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa et reliqua urbis ornanemta sanctissime custodita tenuerunt.</p>
	</div>
	<div id="contenant2">
		<div class="scroll">
		    <?php include_once('page.php'); ?>
		</div>
	</div>
</body>
</html>
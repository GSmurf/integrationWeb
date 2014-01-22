<?php 
$page =  $_GET['page'];
$nextPage = $page + 1;

if ($page < 20) {
	?>
	<h3>Page <?= $page; ?></h3>
	<p>Ceci est mon test de chargement. automatique et je peux faire ça jusqu'au bout du monde. Maintenant c'est toi qui gère !</p>
	<p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>
	<a href="page.php?page=<?= $nextPage; ?>">next page</a>
	<?php
}else{
	?>
	<h3>Fin des résultats</h3>
	<p>Voilà c'est la fin !!! Mais avouez que l'on s'est bien amusé ;) ???</p>
	<?php
}
?>
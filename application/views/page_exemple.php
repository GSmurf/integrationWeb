<?php
define('NB_LIMITE_PAGINATION', 5);
$page =  (isset($_GET['page']))?$_GET['page']:1;
$nextPage = $page + 1;

if ($page <= NB_LIMITE_PAGINATION) {
	?>
	<h2>Pagination n°<?= $page; ?></h2>
	<p>Ceci est mon test de chargement. automatique et je peux faire ça jusqu'au bout du monde. Maintenant c'est toi qui gère !</p>
	<a href="<?= $nextLink;?>" target="_blank">Test de lien utilisé pour la prochaine pagination</a>.
	
	<p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>
	<p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>
	<p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>
	<a href="<?= $nextLink;?>">next page</a>
	<?php
}else{
	?>
	<h3>Fin des résultats</h3>
	<p>Voilà c'est la fin !!! Mais avouez que l'on s'est bien amusé ;) ???</p>
	<?php
}
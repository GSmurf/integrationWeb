<?php $this->load->helper('url');?>
<nav>
	<ul>
		<li><a href="<?= base_url();?>">Accueil</a></li>
		<li><a href="#tag1">Menu fixto</a></li>
		<li><a href="#tag2">Infinite scrolling</a></li>
		<li><a href="welcome/test">Page test</a></li>
		<li><a href="test">Lien test</a></li>
		<li><a href="<?= site_url("welcome/index");?>">Site_url !!!</a></li>
		<li><a href="pageExemple">Page <?= $page;?></a></li>
		<li><a href="page">Lien 2 vers un test</a></li>
		<li><a href="<?= site_url("lien_erreur_404");?>">404</a></li>
	</ul>
</nav>
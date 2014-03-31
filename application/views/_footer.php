</div>
<?php if ($pagination){?>
<div id="contenant2">
	<div id="up"><a href="#"><img src="/interfacePagination/images/arrow_up.png" alt="Retour au menu" title="Retour au menu" /></a></div>
	<a id="tag2"></a>
	<h1>Chargement automatique ou adieu les pagination</h1>
	<div class="scroll">
	    <?php include_once 'page.php';?>
	</div>
</div>
<?php }?>
<div id="footer">Page générée en <strong>{elapsed_time}</strong> secondes</div>
</body>
</html>
<?php 
include_once 'application/views/_header.php';
$this->load->library('table');
?>
<link href="/interfacePagination/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet"/>
<link href="/interfacePagination/css/jquery.appendGrid-1.3.4.min.css" rel="stylesheet"/>
<script type="text/javascript" src="/interfacePagination/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="/interfacePagination/js/jquery.appendGrid-1.3.4.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#tblAppendGrid').appendGrid({
            caption: 'Les traitements',
            columns: [
                      { name: 'NUM', display: 'Id'},
                      { name: 'CODE', display: 'Code', ctrlCss: { width: '200px'}, displayCss: { 'color': '#ff6666'} },
                      { name: 'AFFAIRE', display: 'Affaire' },
                      { name: 'TYPE', display: 'Type' },
                      { name: 'VISIBLE', display: 'Visible', ctrlAttr: { maxlength: 1 } },
                      { name: 'FREQUENCE', display: 'Frequence' },
                      { name: 'ORDRE', display: 'Ordre' },
                      { name: 'UPDATE_AT', display: 'Mise à jour', type: 'ui-datepicker', uiOption: { dateFormat: 'dd/mm/yy'} },
                      { name: 'CONFIG_FILE', display: 'Config_file', ctrlCss: { width: '150px', 'font-style': 'italic'} }
                  ],
                  initData: <?= $traitementsJson;?>,
				  hideRowNumColumn: true,
				  hideButtons: {
				      remove: true,
// 				      removeLast: true
				  },
				  customFooterButtons: [
				       { uiButton: { icons: { primary: 'ui-icon-arrowthickstop-1-s' }, label: 'Sauvegarder les données' }, 
					     btnAttr: { title: 'Download Data' }, 
					     click: function (evt) {sauvegardeDesDonnees();} 
					   }
				  ]
              });
        // Handle `Serialize` button click
        $('.btnSerialize').button().click(function () {
            alert('Extraction des données !!\n' + $(document.forms[0]).serialize());
        });


        function sauvegardeDesDonnees(){
        	$.ajax({
			  type: "POST",
			  url: "<?= site_url("welcome/saveData");?>",
			  data: $(document.forms[0]).serialize()
			})
			  .done(function( msg ) {
// 			    alert( "Data Saved: " + msg );
			  });
        }
    });
</script>

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
<p>Variable du nombre de page pour la pagination infinie, mais finie : <?= $page;?></p>
<p>
<h2>AppendGrid module</h2>
<p>L'idée de ce test est d'afficher dans un tableau modifiable les données d'une base de données pour pouvoir les mettre à jour aisément, script utilisé <a href="http://appendgrid.apphb.com">appendGrid</a>.</p>
<form id="frmMain" name="frmMain" action="/Demo/Basic" method="post">
<!--   <button type="button" class="btnSerialize ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Demo: jQuery Serialize</span></button> -->
  <table id="tblAppendGrid"></table>
</form>  
</p>
<?php include_once 'application/views/_footer.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mon Test d'intégration</title>
<script type="text/javascript" src="/interfacePagination/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/interfacePagination/js/fixto.min.js"></script>
<script type="text/javascript" src="/interfacePagination/js/jquery.jscroll.min.js"></script>
<script type="text/javascript">
$(function(){
	$('nav').fixTo('#contenant');
	$('#up').fixTo('#contenant2');
	$('.scroll').jscroll({
	    loadingHtml: '<img src="/interfacePagination/images/loading.gif" alt="Chargement" >Chargement...',
	});

});
</script>
<link rel="stylesheet" href="/interfacePagination/css/knacss.css" media="all">
<link rel="stylesheet" href="/interfacePagination/css/main.css" media="all">
<link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="header"><h1>Menu fixto + jscroll : infinite scrolling</h1></div>
	<div id="contenant">
		<?php include_once 'application/views/_menu.php';?>
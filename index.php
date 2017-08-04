<?php
	$view = empty($_GET['view']) ? 'main' : $_GET['view'];

	include($_SERVER['DOCUMENT_ROOT'].'/fooddelivery_web/header.php');
	include($_SERVER['DOCUMENT_ROOT'].'/fooddelivery_web/pages/'.$view.'.php');
	include($_SERVER['DOCUMENT_ROOT'].'/fooddelivery_web/pages/footer.php');
?>
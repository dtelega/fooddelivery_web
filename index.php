
<?php

	$view = empty($_GET['view']) ? 'main' : $_GET['view'];

	include($_SERVER['DOCUMENT_ROOT'].'/food/header.php');

	include($_SERVER['DOCUMENT_ROOT'].
		'/food/pages/'.$view.'.php');

	include($_SERVER['DOCUMENT_ROOT'].'/food/pages/footer.php');
?>
	
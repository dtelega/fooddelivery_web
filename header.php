<!DOCTYPE html>
<html lang="ukr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
    	<?php
    		$view = empty($_GET['view']) ? 'main' : $_GET['view'];
    		if ($view === "main")
    			echo "Головна";
    		else if ($view === "offer")
    			echo "Акції";
    		else if ($view === "menu")
    			echo "Меню";
    		else if ($view === "about-us")
    			echo "Про нас";
    		else if ($view === "blog")
    			echo "Блог";
    		else if ($view === "contacts")
    			echo "Контакти";
    	?>
    </title>

	<link type="image/gif" rel="shortcut icon" href="icon.gif" />

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300|Open+Sans|Roboto:500" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/font-awesome.min.css">

  </head>
  <body>

	<nav id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="?view=main"><img  class="logo" src="img/logo-food.png" alt="Логотип"></a>
				</div>
				<div class="col-md-6 horizontal-menu">
					<ul>
						<li><a href="?view=offer" method="GET"
						style="<?php 
							$view = empty($_GET['view']) ? 'main' : $_GET['view'];
							if ($view === "offer")
								echo "background-color:#e2b282;";
						?>"
						>Акції</a></li>
						<li><a href="?view=menu" style="<?php 
							$view = empty($_GET['view']) ? 'main' : $_GET['view'];
							if ($view === "menu")
								echo "background-color:#e2b282;";
						?>">Меню</a></li>
						<li class="has-submenu">
							<a href="?view=about-us" style="<?php 
							$view = empty($_GET['view']) ? 'main' : $_GET['view'];
							if ($view === "about-us")
								echo "background-color:#e2b282;";
						?>">Про нас</a>
							<ul class="submenu dropdown-menu">
								<li><a href="?view=about-us">Доставка</a></li>
								<li><a href="?view=about-us">Обслуговування клієнтів</a></li>
								<li><a href="?view=about-us">Типографіка</a></li>
							</ul>
						</li>
						<li><a href="?view=blog" style="<?php 
							$view = empty($_GET['view']) ? 'main' : $_GET['view'];
							if ($view === "blog")
								echo "background-color:#e2b282;";
						?>">Блог</a></li>
						<li><a href="?view=contacts" style="<?php 
							$view = empty($_GET['view']) ? 'main' : $_GET['view'];
							if ($view === "contacts")
								echo "background-color:#e2b282;";
						?>">Контакти</a></li>
					</ul>
				</div>
				<div class="col-md-3 text-right">
					<a href="#"><img class="shopping-cart" src="img/shopping-cart.png" alt="cart"></a>					
					<img class="cart-items-count" src="img/ajax-loader.gif" alt="loader">
				</div>
			</div>
		</div>
	</nav>
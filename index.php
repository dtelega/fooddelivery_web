<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food delivery</title>

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
					<a href="#"><img  class="logo" src="img/logo-food.png" alt="Логотип"></a>
				</div>
				<div class="col-md-6 horizontal-menu">
					<ul>
						<li><a href="#">Акції</a></li>
						<li><a href="#">Меню</a></li>
						<li class="has-submenu">
							<a href="#">Про нас</a>
							<ul class="submenu dropdown-menu">
								<li><a href="#">Доставка</a></li>
								<li><a href="#">Обслуговування клієнтів</a></li>
								<li><a href="#">Типографіка</a></li>
							</ul>
						</li>
						<li><a href="#">Блог</a></li>
						<li><a href="#">Контакти</a></li>
					</ul>
				</div>
				<div class="col-md-3 text-right">
					<a href="#"><img class="shopping-cart" src="img/shopping-cart.png" alt="cart"></a>					
					<img class="cart-items-count" src="img/ajax-loader.gif" alt="loader">
				</div>
			</div>
		</div>
	</nav>

<?php
	include($_SERVER['DOCUMENT_ROOT'].'/food/pages/contacts.php');
?>
	
	<section id="footer">
		<div class="container">
			<h3>Зворотній зв'язок</h3>
			<p class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.0225653423336!2d-1.262141902761599!3d51.75091093509969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6be768d09f66dc4a!2sOxford+Castle!5e0!3m2!1suk!2sua!4v1490784809529" width="100%" height="300" frameborder="0" allowfullcreen="allowfullcreen"></iframe>
			</p>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p class="phone"><strong>800 </strong>312 39 91</p>
					<p class="phone"><strong>800 </strong>221 23 56</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
					<a href="#" class="social"><img src="img/social/fb.png" alt="facebook"></a>
					<a href="#" class="social"><img src="img/social/instgr.png" alt="instagram"></a>
					<a href="#" class="social"><img src="img/social/ytb.png" alt="youtube"></a>
					<a href="#" class="social"><img src="img/social/ggpls.png" alt="googleplus"></a>
					<a href="#" class="social"><img src="img/social/twt.png" alt="twitter"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h3>Що це?</h3>
				<p>Це приклад шаблону готового інтернет-магазину, який ви можете придбати на сайті Site-Express.</p>
				<p>Дій швидко — <a href="#">Site-Express</a></p>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h3>Корисні посилання</h3>
				<p>Ви можете дізнатися, як створити свій сайт на основі шаблону, перейшовши по одному з посилань, розташованих нижче.</p>
				<ul class="more">
					<li><a href="#">Про проект</a></li>
					<li><a href="#">Шаблони</a></li>
					<li><a href="#">Ціни</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Замовити сайт</a></li>
				</ul>
				</div>
			</div>
		</div>
	</section>

	
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  <link rel="stylesheet" href="css/animate.css">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
    <script type="text/javascript">

		$(function() {

		 $(window).scroll(function() {

		 if($(this).scrollTop() != 0) {
		 	$('#toTop').fadeIn();	 
		 }
		 else {
			 $('#toTop').fadeOut();
		 }});
		 $('#toTop').click(function() {
		 	$('body,html').animate({scrollTop:0},800);
		 });
		});
	</script>
	<div id="toTop"><i class="fa fa-arrow-up fa-5x" aria-hidden="true"></i></div>
  </body>
</html>
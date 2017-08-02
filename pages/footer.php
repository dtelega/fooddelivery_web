<section id="footer">
		<div class="container">
			<h3 class="wow fadeInUp">Зворотній зв'язок</h3>
			<p class="map wow fadeIn" data-wow-delay="0.2s">
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
				<h3 class="wow fadeIn">Що це?</h3>
				<p>Це приклад шаблону готового інтернет-магазину, який ви можете придбати на сайті Site-Express.</p>
				<p>Дій швидко — <a href="#">Site-Express</a></p>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h3 class="wow fadeIn">Корисні посилання</h3>
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
<?php
	//include("../include/connexion_bdd.php");
	include("../include/header.php");
?>
	<div class="main">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="../image/ressource/logo.png" alt="" /></a>
					<p>Numéro 1 de l'achat des DVD en ligne</p>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Rechercher.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Rechercher..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>FAST AND FURIOUS 7</h1>
				<p class="age"><a href="#">All Age</a></p>
				<p class="review">Avec				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; Vin Diesel, Paul Walker, Jason Statham</p>
				<p class="review reviewgo">Genre	&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; Action</p>
				<p class="review">Sortie 			&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 1 Avril 2015</p>
				<p class="special">Dominic Toretto et sa « famille » doivent faire face à un mystérieux agresseur, Deckard Shaw, bien décidé à se venger de la mort de son frère, Owen Shaw, qui a été tué par la bande de Dominic.</p>
				<a class="video" href="https://www.youtube.com/watch?v=Skpu5HaVkOc"><i class="video1"></i>Bande annonce</a>
				<a class="book" href="#"><i class="book1"></i>Commander</a>
			</div>
		</div>
		<div class="news">
			<div class="content-grid">
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum2.jpg" title="allbum-name" /></a>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum3.jpg" title="allbum-name" /></a>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
					</div>
					<div class="content-grid last-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum4.jpg" title="allbum-name" /></a>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum5.jpg" title="allbum-name" /></a>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
					</div>
					</div>

			<div class="col-md-6 news-right-grid">
				<h3>Événement</h3>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<a class="more" href="#">MORE</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="more-reviews">
			 <ul id="flexiselDemo2">
			<li><img src="../image/ressource/m1.jpg" alt=""/></li>
			<li><img src="../image/ressource/m2.jpg" alt=""/></li>
			<li><img src="../image/ressource/m3.jpg" alt=""/></li>
			<li><img src="../image/ressource/m4.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="../opensource/js/jquery.flexisel.js"></script>	
		</div>	
		<?php include("../include/footer.php"); ?>
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>
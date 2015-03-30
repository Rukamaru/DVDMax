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
			<div class="error-404 text-center">
				<h2>404</h2>
				<p>Sorry this was unexpected</p>
				<a class="b-home" href="index.html">Back to Home</a>
			</div>	
	<?php include("../include/footer.php"); ?>
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>
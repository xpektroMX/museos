<div class="seccion-menu-desktop">
	<div class="container">
		<div class="barra-01 row">
			<div class="col l6 s12 izquierda">
				<a href="index.php"><img src="img/logo-01.jpg">
				<h1>MUSEO DE ARTE MODERNO</h1></a>
			</div>
			<div class="col l3 s12 centro">
				<a href="#"><?php echo file_get_contents("img/icon-fb.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-tw.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-ig.svg"); ?></a>
			</div>
			<div class="col l3 s12 derecha">
				<a href="#">INICIAR SESIÓN <?php echo file_get_contents("img/icon-user.svg"); ?></a>
				<a href="#" class="idioma">ES</a>
				<a href="#" class="idioma">EN</a>
			</div>
		</div>

		<div class="barra-02 row">
			<div class="col l9 s12 izquierda">
				<ul>
					<li><a href="coleccion.php">Colección</a></li>
					<li><a href="exposicion.php">Exposiciones</a></li>
					<li><a href="exposicion.php">Visita</a></li>
					<li><a href="exposicion.php">Museo</a></li>
					<li><a href="exposicion.php">Educación</a></li>
				</ul>
			</div>
			<div class="col l3 s12 derecha">
				<form>
					<input type="text" name="buscar">
					<?php echo file_get_contents("img/icon-search.svg"); ?>
				</form>
			</div>
		</div>
		
	</div>
	</div>

	<div class="seccion-menu-mobile">
	<div class="">
		<div class="barra-m-01">
			<a href="index.php"><img src="img/logo-01.jpg"></a><br>
			<h1>MUSEO DE ARTE MODERNO</h1>
		</div>
		<div class="barra-m-02">
			<div class="boton-menu">
				<div class="linea"></div>
				<div class="linea"></div>
				<div class="linea"></div>
			</div>
		</div>
		<div class="contenedor-mobile">
			<a href="coleccion.php">Colección</a>
			<a href="exposicion.php">Exposiciones</a>
			<a href="exposicion.php">Visita</a>
			<a href="exposicion.php">Museo</a>
			<a href="exposicion.php">Educación</a>
		</div>
	</div>
	</div>
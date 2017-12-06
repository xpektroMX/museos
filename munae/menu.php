<!-- MENU !-->
	<!-- DESKTOP !-->
		<div class="seccion-menu-desktop">
		<!-- BARRA 01 !-->
			<div class="barra-01">
				<a href="#"><?php echo file_get_contents("img/icon-fb.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-tw.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-ig.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-mail.svg"); ?></a>
				<a href="#" class="link">INGRESAR <?php echo file_get_contents("img/icon-user.svg"); ?></a>
				<a href="#" class="link">IDIOMA</a>
			</div>
		<!-- BARRA 02 !-->
			<div class="barra-02 row">
				<div class="col l3 s12 izquierda">
					<a href="index.php"><img src="img/logo-01.jpg" alt="Logo MUNAE"></a>
				</div>
				<div class="col l6 s12 centro">
					<ul>
						<li><a href="coleccion.php">COLECCIÓN</a></li>
						<li><a href="exposicion.php">EXPOSICIONES</a></li>
						<li><a href="exposicion.php">VISITA</a></li>
						<li><a href="exposicion.php">EL MUSEO</a></li>
						<li><a href="exposicion.php">APRENDIZAJE</a></li>
					</ul>
				</div>
				<div class="col l3 s12 derecha">
					<form>
						<input type="text" name="buscar"><?php echo file_get_contents("img/icon-search.svg"); ?>
					</form>
				</div>
			</div>
		</div>

	<!-- MOBILE !-->
		<div class="seccion-menu-mobile">
			<div class="barra-01">
				<a href="#"><?php echo file_get_contents("img/icon-fb.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-tw.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-ig.svg"); ?></a>
				<a href="#"><?php echo file_get_contents("img/icon-mail.svg"); ?></a>
			</div>
			<div class="barra-02">
				<a href="#" >INGRESAR <?php echo file_get_contents("img/icon-user.svg"); ?></a>
				<a href="#" >IDIOMA</a>
			</div>
			<div class="barra-03">
				<a href="index.php"><img src="img/logo-01.jpg" alt="Logo MUNAE"></a>
			</div>
			<div class="barra-04">
				<div class="abrir-menu">
					<div class="linea"></div>
					<div class="linea"></div>
					<div class="linea"></div>
				</div>
			</div>
			<div class="barra-05">
				<ul>
					<li><a href="exposicion.php">COLECCIÓN</a></li>
					<li><a href="exposicion.php">EXPOSICIONES</a></li>
					<li><a href="exposicion.php">VISITA</a></li>
					<li><a href="exposicion.php">EL MUSEO</a></li>
					<li><a href="exposicion.php">APRENDIZAJE</a></li>
				</ul>
			</div>
		</div>
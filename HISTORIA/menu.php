
	<div class="caja-desktop">
	<div class="seccion-menu-desktop">
	<div class="container row">
		<div class="col l2 s12 izquierda borde alto">
			<a href="index.php"><img src="img/logo-01.jpg"></a>
		</div>
		<div class="col l5 s12 centro borde">
			<div class="row altura borde-abajo" style="width: 100%; margin: auto; padding: 10px 0px;">
				<div class="col l12 s12">
					<a href="#"><?php echo file_get_contents("img/icon-search.svg"); ?></a>
					<input type="text" name="buscar">
				</div>
			</div>

			<div class="row altura "  style="width: 100%; margin: auto; padding: 10px 0px;">
				<div class="col l6 s12">
					<ul>
						<li class="trigger"><a href="coleccion.php">Colección</a>
							<ul class="submenu">
								<li><a href="coleccion.php">Piezas destacadas</a></li>
								<li><a href="coleccion.php">Curadurías</a></li>
								<li><a href="coleccion.php">Préstamos</a></li>
							</ul>
						</li>
					</ul>
					
				</div>
				<div class="col l6 s12">
					<ul>
						<li class="trigger"><a href="exposicion.php">Visita</a></li>
					</ul>
				</div>
			</div>

		</div>
		<div class="col l5 s12 derecha borde">
			
			<div class="row altura borde-abajo" style="width: 100%; margin: auto; padding: 10px 0px;">
				<div class="col l6 s12">
					<a href="#"><?php echo file_get_contents("img/icon-fb.svg"); ?></a>
					<a href="#"><?php echo file_get_contents("img/icon-tw.svg"); ?></a>
					<a href="#"><?php echo file_get_contents("img/icon-ig.svg"); ?></a>
				</div>
				<div class="col l6 s12">
					<a href="#"><?php echo file_get_contents("img/icon-user.svg"); ?></a>
					<a href="#">Iniciar Sesión</a>
				</div>
			</div>

			<div class="row altura" style="width: 100%; margin: auto; padding: 10px 0px;">
				<div class="col l6 s12">
					<ul>
						<li class="trigger"><a href="exposicion.php">El Museo</a></li>
					</ul>
				</div>
				<div class="col l6 s12">
					<ul>
						<li class="trigger"><a href="exposicion.php">Educación</a></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
	</div>
	</div>


	<div class="seccion-menu-mobile">
		<div class="barra-01">
			<a href="index.php"><img src="img/logo-01.jpg"></a>
		</div>
		<div class="barra-02">
			<a href="#"><?php echo file_get_contents("img/icon-search.svg"); ?></a>
			<input type="text" name="buscar">
		</div>
		<div class="barra-03">
			<div class="boton-menu">
				<div class="linea"></div>
				<div class="linea"></div>
				<div class="linea"></div>
			</div>
		</div>
		<div class="contenedor-mobile">
			<ul>
				<li><a href="coleccion.php">Colección</a></li>
				<li><a href="#">Visita</a></li>
				<li><a href="#">El Museo</a></li>
				<li><a href="#">Educación</a></li>
			</ul>
		</div>
	</div>
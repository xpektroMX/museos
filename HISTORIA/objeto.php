<!DOCTYPE html>
<html>
<!-- HEAD !-->
<?php include('head.php'); ?>
<body>

	<script src="lib/gral.js"></script>
	<script src="lib/objetos.js"></script>


	<script>
		$(document).ready(function() {
			pintaObj(<?php echo $_REQUEST['id'];?>);
		});
	</script>

<!-- MENU !-->
<?php include('menu.php'); ?>


<!-- OBJETO !-->
	<div class="seccion-objeto">
	<div class="container row">
		<div class="col l7 s12 izquierda">
			<div class="imagen">
				<img src="" id="nl_objeto_imagen">
			</div>
			<div class="herramientas">
				 <div class="herramienta"><a href="#"><?php echo file_get_contents("img/icon-search.svg"); ?></a></div>
				 <div class="herramienta"><a href="#"><?php echo file_get_contents("img/icon-heart.svg"); ?></a></div>
				 <div class="herramienta"><a href="#"><?php echo file_get_contents("img/icon-share.svg"); ?></a></div>
				 <div class="herramienta"><a href="#"><?php echo file_get_contents("img/icon-download.svg"); ?></a></div>
			</div>
			<div class="separador"></div>
			<h4 id="nl_objeto_cont_name"><span id="nl_objeto_name"></span></h4>
		</div>
		<div class="col l3 s12 centro">
			<div class="caja-detalles">
				<h5>Detalles</h5>
				<div id="nl_objeto_cont_tipoBic" class="detalle">
					<h6>Tipo de objeto</h6>
					<p><span id="nl_objeto_tipoBic"></span></p>
				</div>
				<div id="nl_objeto_cont_creadorInstitucion" class="detalle">
					<h6>Autoría</h6>
					<p><span id="nl_objeto_creadorInstitucion"></span></p>
				</div>
				<div id="nl_objeto_cont_creadorGrupo" class="detalle">
					<h6>Autores</h6>
					<p><span id="nl_objeto_creadorGrupo"></span></p>
				</div>
				<div id="nl_objeto_cont_creadorPersona" class="detalle">
					<h6>Autor</h6>
					<p><span id="nl_objeto_creadorPersona"></span></p>
				</div>
				<div id="nl_objeto_cont_fechaValor" class="detalle">
					<h6>Año</h6>
					<p><span id="nl_objeto_fechaValor"></span></p>
				</div>
				<div id="nl_objeto_cont_fechaPeriodo" class="detalle">
					<h6>Período</h6>
					<p><span id="nl_objeto_fechaPeriodo"></p>
				</div>
				<div id="nl_objeto_cont_fechaRango" class="detalle">
					<h6>Rango de creación</h6>
					<p><span id="nl_objeto_fechaRango"></span></p>
				</div>
				<div class="detalle" id="nl_objeto_cont_dimensionesTexto">
					<h6>Dimensiones</h6>
					<p id="nl_objeto_dimensionesTexto"></p>
				</div>
				<div id="nl_objeto_cont_permisosDigital" class="detalle">
					<h6>Derechos digitales</h6>
					<p><span id="nl_objeto_permisosDigital"></span></p>
				</div>
				<div id="nl_objeto_cont_bicPermisos" class="detalle">
					<h6>Derechos del objeto</h6>
					<p><span id="nl_objeto_bicPermisos"></span></p>
				</div>
				<div class="detalle" id="nl_objeto_cont_description">
					<h6>Descripción</h6>
					<p id="nl_objeto_description"></p>
				</div>
				<a href="#mas-info">Más información</a>
			</div>
		</div>
		<div class="col l2 s12 derecha">
			<div class="caja-autor">
				<div class="imagen"><img src="img/objeto-02.jpg"></div>
				<h3>Autor lorem</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget turpis et purus fermentum varius.
				</p>
				<a href="#">Ficha de autor</a>
			</div>
		</div>
	</div>
	</div>

<!-- RELACIONADOS !-->
	<div class="seccion-relacionados">
	<div class="container row">
		<div class="col l3 s12 izquierda">
			<h3>Objetos Relacionados</h3>
			<div class="imagen" style="background-image: url('img/relacionados-01.jpg');"></div>
			<div class="imagen" style="background-image: url('img/relacionados-02.jpg');"></div>
			<div class="imagen" style="background-image: url('img/relacionados-03.jpg');"></div>
		</div>
		<div id="mas-info" class="col l9 s12 derecha">
			<div class="texto">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum dapibus mi condimentum lacinia. Fusce quis leo pretium, consectetur felis ac, commodo arcu. Cras ut volutpat velit. Integer fermentum enim a dignissim varius. Nunc ultricies nisl non commodo maximus. Donec volutpat felis condimentum metus facilisis pulvinar. Aliquam eu feugiat enim. Donec convallis vel justo quis sagittis. Praesent commodo, odio et efficitur lacinia, metus nibh elementum metus, id ornare augue dolor id est. Quisque egestas nisl augue, ac fermentum augue mattis vel. Proin a consectetur justo. Ut pulvinar nunc non dolor ullamcorper porta. Maecenas eget est nunc. Donec feugiat dui justo. Proin sit amet ultricies ante.
				</p>
				<p>
					Duis ac interdum nunc, eget semper leo. Aenean ultrices dolor quis blandit pellentesque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed massa sed urna vulputate convallis. Vivamus sapien risus, imperdiet quis ornare a, scelerisque eu lacus. Etiam tincidunt semper varius. Nam sodales velit nisl, et vehicula magna rhoncus in. Pellentesque tellus metus, venenatis sit amet cursus ut, rutrum a libero. Etiam vel convallis nunc. Sed sed elit non odio condimentum tristique. Vivamus sit amet odio placerat, sollicitudin diam euismod, sollicitudin risus.
				</p>
			</div>
			<h4>Ficha Técnica ▼</h4>

			<h5>Lorem Ipsum</h5>
			<h6>Lorem Ipsum</h6>
			<div class="separador"></div>

			<h5>Lorem Ipsum</h5>
			<h6>Lorem Ipsum</h6>
			<div class="separador"></div>

			<h5>Lorem Ipsum</h5>
			<h6>Lorem Ipsum</h6>
			<div class="separador"></div>

			<h5>Lorem Ipsum</h5>
			<h6>Lorem Ipsum</h6>
			<div class="separador"></div>

			<h4 id="nl_objeto_cont_multimedia">Multimedia</h4>

			<div class="multimedia" style="background-image: url('img/multimedia-01.jpg');"><span id="nl_objeto_multimedia"></span></div>


		</div>
	</div>
	</div>


<!-- FOOTER !-->
<?php include('footer.php'); ?>

<script type="text/javascript">
	

</script>


</body>
</html>


















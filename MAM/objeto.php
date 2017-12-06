<!DOCTYPE html>
<html>
<!-- HEAD !-->
<?php include('head.php'); ?>
	<script src="lib/gral.js"></script>
	<script src="lib/objetos.js"></script>

	<script>
		$(document).ready(function() {
			pintaObj(<?php echo $_REQUEST['id'];?>);
		});
	</script>
<body>

<!-- MENÚ !-->
<?php include('menu.php'); ?>

<!-- OBJETO !-->
	<div class="seccion-objeto">
	<div class="container">
		<div class="imagen-principal"><img src="" id="nl_objeto_imagen"></div>
		<div class="caja-herramientas">
			<a href="#"><?php echo file_get_contents("img/icon-heart.svg"); ?></a>
			<a href="#"><?php echo file_get_contents("img/icon-share.svg"); ?></a>
			<a href="#"><?php echo file_get_contents("img/icon-download.svg"); ?></a>
		</div>
		<div class="caja-titulo">
			<h2><span id="nl_objeto_name"></span></h2>
			<h3 id="nl_objeto_cont_creadorInstitucion"><span id="nl_objeto_creadorInstitucion"></span></h3>
			<h3 id="nl_objeto_cont_creadorGrupo"><span id="nl_objeto_creadorGrupo"></span></h3>
			<h3 id="nl_objeto_cont_creadorPersona"><span id="nl_objeto_creadorPersona"></span></h3>
			<p id="nl_objeto_cont_tipoBic"><span id="nl_objeto_tipoBic"></span></p>
			<div id="nl_objeto_cont_dimensionesTexto">
				<p id="nl_objeto_dimensionesTexto"></p>
			</div>

		</div>
		<div class="caja-ficha">
			<h3>FICHA TÉCNICA</h3>
			<div class="row">
				<div class="col l3 s12 izquierda">
					<h3>APOYA ESTA OBRA</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae euismod quam. Nam at posuere lectus, quis sodales ligula. Praesent pharetra faucibus purus eget ornare. Maecenas ut lobortis mi, ac iaculis enim. 
					</p>
				</div>
				<div class="col l6 s12 centro">
					<p id="nl_objeto_description">
					</p>
					<h4>MULTIMEDIA</h4>
					<div class="row row-multimedia">
						<div class="col l4 s12">
							<div class="imagen" style="background-image: url('img/multimedia-01.jpg');"></div>
							<h5>Lorem ipsum</h5>
							<h6>Lorem ipsum dolot sit amet</h6>
						</div>
						<div class="col l4 s12">
							<div class="imagen"  style="background-image: url('img/multimedia-02.jpg');"></div>
							<h5>Lorem ipsum</h5>
							<h6>Lorem ipsum dolot sit amet</h6>
						</div>
						<div class="col l4 s12">
							<div class="imagen" style="background-image: url('img/multimedia-03.jpg');"></div>
							<h5>Lorem ipsum</h5>
							<h6>Lorem ipsum dolot sit amet</h6>
						</div>
					</div>
					<h4>OBRAS RELACIONADAS</h4>
					<div class="row row-relacionadas">
						<div class="col l4 s12">
							<div class="imagen" style="background-image: url('img/relacionadas-01.jpg');"></div>
						</div>
						<div class="col l4 s12">
							<div class="imagen" style="background-image: url('img/relacionadas-02.jpg');"></div>
						</div>
						<div class="col l4 s12">
							<div class="imagen" style="background-image: url('img/relacionadas-03.jpg');"></div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 derecha">
					<div class="imagen" style="background-image: url('img/autor-01.jpg');"></div>
					<h3>Kahlo, Frida</h3>
					<h4>México, 1907 - 1954</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae euismod quam. Nam at posuere lectus, quis sodales ligula. Praesent pharetra faucibus purus eget ornare. Maecenas ut lobortis mi, ac iaculis enim. 
					</p>
					<h5>VER FICHA DE AUTOR</h5>
					<h6>CATEGORÍAS</h6>
					<p class="etiqueta">Etiqueta</p>
					<div class="separador"></div>
					<p class="etiqueta">Etiqueta</p>
					<div class="separador"></div>
					<p class="etiqueta">Etiqueta</p>
					<div class="separador"></div>
					<p class="etiqueta">Etiqueta</p>
				</div>
			</div>
		</div>
	</div>
	</div>


<!-- FOOTER !-->
<?php include('footer.php'); ?>

	
<script type="text/javascript">
	
	
</script>





</body>
</html>

























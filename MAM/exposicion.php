<!DOCTYPE html>
<html>
<!-- HEAD !-->
<?php include('head.php'); ?>
<body>

<!-- MENÚ !-->
<?php include('menu.php'); ?>


<!-- HEADER !-->
	<div class="seccion-header">
	<div class="container ">
		<div class="imagen" style="background-image: url('img/header-01.jpg');"></div>
		<div class="row" style="margin: 0">
			<div class="col l8 s12">
				<div class="caja-header-info" id="caja-header-info-01">
					<h3>Exposición Temporal 01</h3>
					<h4>NICOLÁS DE CRÉCY, BITÁCORA MEXICANA</h4>
					<h5>Del 1 de Octubre al 25 de Noviembre</h5>
				</div>
			</div>
			<div class="col l4 s12">
				<div class="caja-numeros">
					<span class="numero">1</span> / 4<br>
					<button class="boton-atras">←</button><button class="boton-adelante">→</button>
				</div>
			</div>
		</div>
	</div>
	</div>


<!-- ACTIVIDADES !-->
	<div class="seccion-actividades">
	<div class="container">
		<div class="heading-actividades">
				<h3>EXPOSICIONES</h3>
		</div>
		<div class="row grid-actividades" style="margin: 0">
			<div class="col l4 s12 " style="background-color: #111;">
				<div class="imagen" style="background-image: url('img/actividades-01.jpg');"></div>
				<h4>LOREM IPSUM</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula ex, suscipit quis arcu eget, placerat semper magna. Nullam commodo arcu arcu, ac imperdiet augue efficitur at.  
				</p>
			</div>
			<div class="col l4 s12 " style="background-color: #333;">
				<div class="imagen" style="background-image: url('img/actividades-02.jpg');"></div>
				<h4>SIT AMET</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula ex, suscipit quis arcu eget, placerat semper magna. Nullam commodo arcu arcu, ac imperdiet augue efficitur at.  
				</p>
			</div>
			<div class="col l4 s12" style="background-color: #111;">
				<div class="imagen" style="background-image: url('img/actividades-01.jpg');"></div>
				<h4>NULLAM COMMODO</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula ex, suscipit quis arcu eget, placerat semper magna. Nullam commodo arcu arcu, ac imperdiet augue efficitur at.  
				</p>
			</div>
		</div>
	</div>
	</div>

<!-- INFORMACIÓN !-->
	<div class="seccion-informacion">
	<div class="container " >
		<h3>INFORMACIÓN PRÁCTICA</h3>
		<div class="row row-informacion">
			<div class="col l3 s12">
				<h4>UBICACIÓN</h4>
				<p>
					Paseo de la Reforma y Gandhi s/n<br>
					Bosque de Chapultepec, Ciudad de México
				</p>
			</div>
			<div class="col l3 s12">
				<h4>HORARIO</h4>
				<p>
					Martes a Domingo de 10 a 17:30 hrs
				</p>
			</div>
			<div class="col l3 s12">
				<h4>ADMISIÓN</h4>
				<p>
					$60.00<br>
					Entrada gratuita: con credencial de profesor, estudiante e INAPAM<br>
					Domingo: Entrada libre general
				</p>
			</div>
			<div class="col l3 s12">
				<h4>CONTACTO</h4>
				<p>
					$60.00<br>
					Entrada gratuita: con credencial de profesor, estudiante e INAPAM<br>
					Domingo: Entrada libre general
				</p>
			</div>
		</div>
		<h3>+</h3>
	</div>
	</div>

<!-- REGISTRO !-->
	<div class="seccion-registro">
	<div class="container">
		<div class="row row-registro">
			<div class="col l3 s12 caja-registro">
				<div class="imagen"></div>
			</div>
			<div class="col l6 s12 caja-registro">
				<h3>Crea tus colecciones</h3>
				<h4>Regístrate en Mi Museo</h4>
				<h5>Correo electrónico</h5>
				<div class="separador"></div>
				<h5>Inicia con: <img src="img/icon-fb.jpg"><img src="img/icon-fb.jpg"></h5>
				<div class="separador"></div>
				<p>
					Al crear una cuenta acepta las <a href="#">condiciones de uso</a> y <a href="#">la política de privacidad</a>
				</p>
			</div>
			<div class="col l3 s12 caja-registro" style="background-color: black; ">
				<div class="caja-redes">
					<a href="#"><?php echo file_get_contents("img/icon-fb.svg"); ?></a>
					<a href="#"><?php echo file_get_contents("img/icon-tw.svg"); ?></a>
					<a href="#"><?php echo file_get_contents("img/icon-ig.svg"); ?></a>
				</div>
				<a href="#" class="link">Directorio</a>
				<a href="#" class="link">Mapa de Sitio</a>
				<a href="#" class="link">Términos y Condiciones</a>
				<a href="#" class="link">Política de Privacidad</a>
			</div>
		</div>
		
	</div>
	</div>

<!-- LOGOS !-->
	<div class="seccion-logos">
	<div class="container">
		<img src="img/logo-gob-01.jpg" class="logo1">
		<img src="img/logo-gob-02.jpg" class="logo2">
		<img src="img/logo-gob-03.jpg" class="logo3">
	</div>
	</div>

<!-- FOOTER !-->
<?php include('footer.php'); ?>

	
<script type="text/javascript">
	
	
</script>





</body>
</html>

























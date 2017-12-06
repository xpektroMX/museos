<!DOCTYPE html>
<html>
<!-- HEAD !-->
<?php include('head.php'); ?>
<link rel="stylesheet" href="css/estilo-objeto.css">

<script src="lib/gral.js"></script>
<script src="lib/objetos.js"></script>


<script>
	$(document).ready(function() {
		pintaObj(<?php echo $_REQUEST['id'];?>);
	});
</script>

<body>

<!-- MENU !-->
<?php include('menu.php'); ?>

<!-- OBJETO !-->
	<div class="seccion-objeto">
	<div class="row">
		<div class="col l8 s12 izquierda">
			<div class="imagen"><img src="" class="materialboxed" id="nl_objeto_imagen"/ ></div>
			<div class="iconos">
				<a href="#" class="icono"><img src="img/objeto-icon-01.jpg"></a>
				<a href="#" class="icono"><img src="img/objeto-icon-02.jpg"></a>
				<a href="#" class="icono"><img src="img/objeto-icon-03.jpg"></a>
			</div>
			<div class="separador"></div>
			<div class="caja-info">
				<h3 id="nl_objeto_cont_name"><span id="nl_objeto_name"></span></h3>
				<h4 id="nl_objeto_cont_tipoBic"><span id="nl_objeto_tipoBic"></span></h4>
			</div>
		</div>
		<div class="col l4 s12 derecha">
			<h3>FICHA TÉCNICA</h3>
			
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
			<div class="separador"></div>
			<a href="#mas-info">MÁS INFORMACIÓN +</a>
			<button>APOYA ESTA OBRA</button>
		</div>
	</div>
	</div>


	<div class="seccion-relacionados">
	<div class="">
		<h3>Objetos Relacionados</h3>
		<button>←</button>
		<button>→</button>
		<div class="row">
			<div class="col l3 s3 caja-relacionados">
				<img src="img/grid-coleccion-07.jpg">
			</div>
			<div class="col l3 s3 caja-relacionados">
				<img src="img/grid-coleccion-05.jpg">
			</div>
			<div class="col l3 s3 caja-relacionados">
				<img src="img/grid-coleccion-06.jpg">
			</div>
			<div class="col l3 s3 caja-relacionados">
				<img src="img/grid-coleccion-02.jpg">
			</div>
		</div>
		<div class="caja-tags" style="margin-top: -10px">
			<h3>Palabras Clave</h3>
			<span>LOREM</span><span>IPSUM</span><span>LOREM</span><span>IPSUM</span><span>LOREM</span>
		</div>
	</div>
	</div>


<!-- FOOTER !-->
	<div class="seccion-footer">
	<div class="container row">
		<div class="col l7 s12 izquierda">
			<a href="#">Directorio</a>
			<a href="#">Términos y condiciones</a>
			<a href="#">Política de Privacidad</a>
			<a href="#">Mapa de Sitio</a>
		</div>
		<div class="col l5 s12 derecha">
			Secretaria de Cultura 2017. Todos los derechos reservados.
		</div>
	</div>
	</div>

<!-- FOOTER !-->
<?php include('footer.php'); ?>

<script type="text/javascript">
	
	

</script>


</body>
</html>
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
<?php include('menu2.php'); ?>

<!-- SECCION OBJETO !-->
	<div class="seccion-objeto">
	<div class="container row">
		<div class="col l7 s12 izquierda">
			<div class="caja-imagen">
				<img src="" id="nl_objeto_imagen">
			</div>
			<div class="caja-herramientas">
				<a href="#">Apoya esta obra</a>
				<img src="img/objeto-icono-01.jpg">
				<img src="img/objeto-icono-02.jpg">
				<img src="img/objeto-icono-03.jpg">
				<img src="img/objeto-icono-04.jpg">
				<img src="img/objeto-icono-05.jpg">
				<img src="img/objeto-icono-06.jpg">
			</div>
		</div>
		<div class="col l5 s12 derecha">
			<h2 id="nl_objeto_cont_name"><span id="nl_objeto_name"></span></h2>
			<h3 id="nl_objeto_cont_creadorInstitucion"><span id="nl_objeto_creadorInstitucion"></span></h3>
			<h3 id="nl_objeto_cont_creadorGrupo"><span id="nl_objeto_creadorGrupo"></span></h3>
			<h3 id="nl_objeto_cont_creadorPersona"><span id="nl_objeto_creadorPersona"></span></h3>
			<div class="separador"></div>
			<h4>FICHA TÉCNICA</h5>
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
			<div id="nl_objeto_cont_description">
				<p id="nl_objeto_description"></p>
			</div>

			<div class="separador"></div>
			<a href="#mas-info">MÁS INFORMACIÓN +</a>
		</div>
	</div>
	</div>

<!-- AUTOR !-->
	<div class="seccion-autor">
	<div class="container row">
		<div class="col l7 s12 izquierda">
			<h3>AUTOR IPSUM DOLOR SIT AMET</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
			</p>
			<a href="#">Ver ficha de autor</a>
			<div class="separador"></div>
		</div>
		<div class="col l5 s12 derecha">
			<img src="img/autor.jpg">
		</div>
	</div>
	</div>

<!-- MULTIMEDIA !-->
	<div class="seccion-multimedia">
	<div class="container ">
		<h3>MULTIMEDIA</h3>
		<div class="separador"></div>
		<button>←</button>
		<button>→</button>

		<div class="row">
			<div class="col l4 s12 marco">
			<div id="nl_objeto_cont_multimedia" class="caja-multimedia">
				<div class="imagen"><img src="img/multimedia-01.jpg"><span id="nl_objeto_multimedia"></span></div>
				<h3>Lorem ipsum dolor sit amet</h3>
				<h4>Lorem ipsum</h4>
			</div>
			</div>
		</div>
	</div>
	</div>

<!-- OBRAS RELACIONADAS !-->
	<div class="seccion-relacionadas">
	<div class="container row">
		<div class="col l3 s12 izquierda">
			<h3>OBRAS RELACIONADAS</h3>
			<div class="separador"></div>
			<div class="caja-botones">
				<button>←</button>
				<button>→</button>
			</div>
		</div>
		<div class="col l3 s12">
			<div class="imagen" style="background-image: url('img/relacionadas-01.jpg');"></div>
			<h4>Lorem ipsum</h4>
			<h5>Lorem ipsum dolor sit amet</h5>
		</div>
		<div class="col l3 s12">
			<div class="imagen" style="background-image: url('img/relacionadas-02.jpg');"></div>
			<h4>Lorem ipsum</h4>
			<h5>Lorem ipsum dolor sit amet</h5>
		</div>
		<div class="col l3 s12" >
			<div class="imagen" style="background-image: url('img/relacionadas-03.jpg');"></div>
			<h4>Lorem ipsum</h4>
			<h5>Lorem ipsum dolor sit amet</h5>
		</div>
	</div>
	</div>

<!-- PALABRAS CLAVE !-->
	<div class="seccion-palabras">
	<div class="container row">
		<div class="col l3 s12 izquierda">
			<h4>PALABRAS CLAVE</h4>
		</div>
		<div class="col l9 s12 derecha">
			<span>sed</span>
			<span>diam</span>
			<span>nomummy</span>
			<span>nibh</span>
			<span>euismod</span>
			<span>tincidunt</span>
			<span>ut</span>
			<span>más></span>
		</div>
	</div>
	</div>

<!-- MAS INFO !-->
	<div id="mas-info" class="seccion-masinfo">
	<div class="container">
		 <h3>Más información</h3>
		 <div class="separador"></div>
		 <div class="texto">
		 	<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
				Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
				Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.

		 	</p>
		 </div>
		 <h3>Ficha técnica</h3>
		 <div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>

		<h4>Lorem ipsum dolor sit amet</h4>
		<h5>Duis autem vei eum</h5>
		<div class="separador"></div>


	</div>
	</div>


<!-- LOGOS GOBIERNO !-->
	<div class="seccion-logos">
	<div class="container row">
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













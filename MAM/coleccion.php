<!DOCTYPE html>
<html>
<!-- HEAD !-->
<?php include('head.php'); ?>
<body>

<!-- MENÚ !-->
<?php 
	include('menu.php');
	include 'nl/coleccion.php';
 ?>

<!-- TITULO COLECCION !-->
	<div class="seccion-titulo">
	<div class="container">
		<h2>COLECCIÓN</h2>
	</div>
	</div>

<!-- CONTENIDO COLECCION !-->
	<div class="seccion-coleccion">
	<div class="container row" >
		<div class="col l3 s12 izquierda">
			<h3>FILTROS AVANZADOS</h3>
			<h4>Filtro 1         +</h4>
			<div class="separador"></div>
			<h4>Filtro 2       +</h4>
			<div class="separador"></div>
			<h4>Filtro 3       +</h4>
			<div class="separador"></div>
			<h4>Filtro 4         +</h4>
			<div class="separador"></div>
			<h5>ELIMINAR FILTROS</h5>
		</div>
		<div class="col l9 s12 derecha">
			<div class="row row-filtros">
				<div class="col l7 s12">
					<form>
						<input type="text" name="buscar" placeholder="Buscar">
					</form>
				</div>
				<div class="col l5 s12">
					Ordenar por: año ▼ <img src="img/icono-filtro-01.jpg"><img src="img/icono-filtro-02.jpg">
				</div>
			</div>

			<div class="padding-coleccion">
				<div class="container" id="nl_contenedor_coleccion"></div>
			</div>


			<div class="caja-paginas">
				<button>←</button>
				<button>1</button>
				<button>2</button>
				<button>3</button>
				<button>4</button>
				<button>5</button>
				<button>→</button>
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

























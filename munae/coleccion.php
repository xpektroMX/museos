<!DOCTYPE html>

<html>
<!-- HEAD !-->
<?php include('head.php'); ?>
<link rel="stylesheet" href="css/estilo-coleccion.css">


<body>

<!-- MENU !-->
<?php 
include('menu.php'); 
include 'nl/coleccion.php';
?>




<!-- COLECCION !-->
	<div class="seccion-coleccion">
	<div class="container row">
		<h2>COLECCIÓN</h2>
		<form>
			<?php echo file_get_contents("img/icon-search.svg"); ?><input type="text" name="buscar">
		</form>
	</div>
	</div>

	<div class="marco">
		<div class="container row">
			<div class="col l8 s12 izquierda">
				<ul >
					<li class="filtro-padre">
						FILTRAR
					</li>
				</ul>
				<ul >
					<li class="filtro-padre">
						FILTRO 1
						<ul class="filtro-hijo">
							<li>OPCIÓN 1</li>
							<li>OPCIÓN 2</li>
							<li>OPCIÓN 3</li>
						</ul>
					</li>
				</ul>
				<ul >
					<li class="filtro-padre">
						FILTRO 2
						<ul class="filtro-hijo">
							<li>OPCIÓN 1</li>
							<li>OPCIÓN 2</li>
							<li>OPCIÓN 3</li>
						</ul>
					</li>
				</ul>
				<ul >
					<li class="filtro-padre">
						FILTRO 3
						<ul class="filtro-hijo">
							<li>OPCIÓN 1</li>
							<li>OPCIÓN 2</li>
							<li>OPCIÓN 3</li>
						</ul>
					</li>
				</ul>
				<ul >
					<li class="filtro-padre">
						FILTRO 4
						<ul class="filtro-hijo">
							<li>OPCIÓN 1</li>
							<li>OPCIÓN 2</li>
							<li>OPCIÓN 3</li>
						</ul>
					</li>
				</ul>
				<ul >
					<li class="filtro-padre">
						ELIMINAR SELECCIÓN
					</li>
				</ul>
			</div>

			<div class="col l4 s12 derecha ">
				100 RESULTADOS <img src="img/ordenar-02.jpg"><img src="img/ordenar-01.jpg">
			</div>
			

		</div>
	</div>

	<div class="seccion-coleccion" >
		<div class="container" id="nl_contenedor_coleccion"></div>
	</div>

	<div class="paginacion">
	<div class="container">
		<button>←</button>
		<button>1</button>
		<button>2</button>
		<button>3</button>
		<button>→</button>
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
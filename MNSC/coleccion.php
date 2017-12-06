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


<!-- HEADER !-->
	<div class="seccion-header coleccion" >
		<h2>COLECCIÓN</h2>
		<h3>100 RESULTADOS</h3>
		<div class="container buscador">
			<div class="row">
				<div class="col l3 s12 izquierda">
					FILTROS 
				</div>
				<div class="col l6 s12 centro">
					<form>
						<?php echo file_get_contents("img/icon-search.svg"); ?>
						<input type="text" name="search">
					</form>
				</div>
				<div class="col l3 s12 derecha">
					<img src="img/coleccion-icono-01.jpg">
					<img src="img/coleccion-icono-02.jpg">
				</div>
			</div>
		</div>
	</div>

<!-- TEXTO !-->
	<div class="seccion-texto">
	<div class="container ">
		<p>
		El acervo de arte europeo, de los siglos XIV a principios del XX, que resguarda el Museo Nacional de San Carlos desde 1968, constituye uno de los más importantes de Latinoamérica. Tiene su origen en la colección que comenzó a formarse a finales del siglo XVIII en la Real Academia de las Tres Nobles Artes de San Carlos de la Nueva España y que a principios del siglo XIX se incrementó con obras de los propios maestros y con las realizadas por alumnos durante sus viajes de estudio a Italia: así como las que se presentaban para obtener el grado de académicos; en este periodo se incorporaron además piezas provenientes de coleccionistas particulares, de la Academia de San Lucas en Roma y de conventos clausurados.
		</p>
		<p>
		En la primera década del siglo XX el gobierno mexicano hizo una importante donación de obras pictóricas adquiridas durante la Exposición Española de Arte e Industria, que se llevó a cabo en las fiestas del Centenario de la Independencia de México. En los años veinte se integra la Colección Pani y en los años treinta la Secretaria de Hacienda dona importantes piezas de los siglos XIV al XVII. Las últimas adquisiciones importantes por el número y calidad, se dio en las décadas de los setenta y ochenta, gracias al interés del Instituto Nacional de Bellas Artes y de coleccionistas nacionales y extranjeros.
		</p>
	</div>
	</div>

<!-- TEMAS GRID !-->
	<div class="seccion-temas">
		<div class="container ">
			<h2>OBRAS</h2>
			<div class="separador"></div>
			<div class="container" id="nl_contenedor_coleccion"></div>
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













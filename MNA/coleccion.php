<!DOCTYPE html>
  <html>
    <!-- HEAD !-->
        <?php include('head.php'); ?>
    <link rel="stylesheet" href="css/tema-coleccion.css" />
        <body>    
    	    
	<!-- SCRIPTS !-->
	<?php include('scripts.php'); ?> 



 <!-- MENÚ !-->
 <?php 
 include('menu.php');
 include 'nl/coleccion.php';
 ?>

	     </header>
	    
	    
	<!-- TITULO COLECCION !-->
		<div class="seccion-titulo">
		<div class="container">
			<h2>COLECCIÓN</h2>
		</div>
		</div>
	
	<!-- CONTENIDO COLECCION !-->
		<div class="seccion-colec">
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
						Ordenar por: año ▼ <img src="images/icono-filtro-01.jpg"><img src="images/icono-filtro-02.jpg">
					</div>
				</div>
	
				<div class="padding-coleccion">
					<div class="container" id="nl_contenedor_coleccion"></div>



	
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
	
	 		
	 	<!-- DATOS/REGISTRO -->
	 	<div id="seccion-registro">
	 		
	 		<div class="container logo">
	 		<div class="row">
	 				<img class="responsive-img" src="images/logos-gob.png" alt="" />
	 		</div>
	 		<div class="row">
	 		<div class="col l12 s12">
	 		<p>Términos y condiciones | Política de Privacidad | Mapa de sitio | Secretaría de Cultura 2017. Todos los derechos reservados</p>
	 		</div>
	 		</div>
	 		</div>
	 	</div>
	 		
      
    </body>
    
  </html>
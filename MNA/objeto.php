<!DOCTYPE html>
  <html>
    <!-- HEAD !-->
        <?php include('head.php'); ?>
          <link rel="stylesheet" href="css/tema-objeto.css" />

          <!-- SCRIPTS !-->
          <?php include('scripts.php'); ?> 


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
	     </header>
	    
	    <!-- separador !-->
	    	<div class="seccion-titulo">
	    	<div class="container">
	    		<h2></h2>
	    	</div>
	    	</div>
	    
	<div id="seccion-obj-imagen" class="fluid">
	  <div class="container">
		<div class="row">
			<div class="col l12 s12 center">
				<img src="" alt="" id="nl_objeto_imagen" />
				<div class="caja-ficha-01">
					<h3 id="nl_objeto_name"><span id="nl_objeto_name"></span></h3>
					<h4><span id="nl_objeto_fechaPeriodo"></span></h4>
					<div class="caja-herramientas">
						<a href="#"><img src="images/icon-heart.svg"></a>
						<a href="#"><img src="images/icon-share.svg"></a>
						<a href="#"><img src="images/icon-download.svg"></a>
					</div>
				</div>
			</div>
		</div>
	  </div>	
	</div>
	
	<div id="seccion-breadcumb">
		<div class="container">
			<div class="row">
				<div class="col l12 s12">
					<a href="#!" class="breadcrumb"><i class="material-icons tiny">home</i></a>
					<a href="#!" class="breadcrumb">Arqueología</a>
					<a href="#!" class="breadcrumb">Mexica</a>
					<a href="#!" class="breadcrumb">Ocelotl</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="seccion-obj-info">
		<div class="container">
			<div class="row">
				<div class="col l6 s12 izquierda valign-wrapper">
					<div class="texto-info">
						<h4>Descripción</h4>
						<div class="divider"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum molestie mauris vitae dignissim. Duis varius libero eget elementum maximus. Nam fringilla, massa a tristique aliquam, mi sem mattis ex, sed hendrerit justo metus ut lorem. Cras in nunc sed risus venenatis pretium ut vitae lectus. Quisque rutrum velit at ligula porttitor, non luctus justo gravida. Nulla sed libero in elit iaculis placerat. Proin dictum odio mauris, vel sodales dolor mollis vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						<div class="divider"></div>
						<p>Arqlgo. Lorem Ipsum Dolor<br />Curador-investigador</p>
						<div class="divider"></div>
						<span class="ver-mas">Ver más <i class="material-icons tiny">expand_more</i></span>
					</div>					
				</div>
				<div class="col l6 s12 derecha valign-wrapper">
					<div class="texto-info">
						<h4>Ficha técnica</h4>
						<div class="divider"></div>
						<div id="nl_objeto_cont_idno">
						<h5>ID:</h5>
						<p><span id="nl_objeto_idno"></span></p></div>
						<div id="nl_objeto_cont_tipoBic">
						<h5>Tipo de objeto:</h5>
						<p><span id="nl_objeto_tipoBic"></span></p></div>
						<div id="nl_objeto_cont_dimensionTexto">
						<h5>Dimensiones:</h5>
						<p id="nl_objeto_dimensionTexto"></p>
						</div>
						<div id="nl_objeto_cont_tagparacoleccion">
						<h5>Sala en el museo:</h5>
						<p><span id="nl_objeto_tagparacoleccion"></span></p></div>
						<div class="divider"></div>
						
						<span class="ver-mas">Ver más <i class="material-icons tiny">expand_more</i></span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="multimedia">
		<div class="container">
			<div class="row">
				<div class="col l12 s12">
					<h4>Multimedia</h4>
				</div>
				<div class="col l12 s12 center">
					<span id=""></span>
					<h5>Lorem ipsum dolor sit amet</h5>
					<p>Lorem ipsum</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="obras-relacionadas">
		<div class="container">
			<div class="row">
				<div class="col l3 s12 controles">
				<h4>Obras relacionadas</h4>
				</div>
				<div class="col l3 s12 imagenrel">
				<img class="imagen" src="images/objeto-rel01.jpg" alt="" />
				<h5>-</h5>
				<p>Posclásico tardío (1250-1521 d.C.)</p>
				</div>
				<div class="col l3 s12 imagenrel">
				<img class="imagen" src="images/objeto-rel02.png" alt="" />
				<h5>Piedra del ExArzobispado</h5>
				<p>Posclásico tardío (1250-1521 d.C.)</p>
				</div>
				<div class="col l3 s12 imagenrel">
				<img class="imagen" src="images/objeto-rel03.jpg" alt="" />
				<h5>Mono de obsidiana</h5>
				<p>Posclásico tardío (1250-1521 d.C.)</p>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="palabras-clave" class="fluid">
		<div class="container">
			<div class="row">
				<div class="col l3 s12">
				<h4>Palabras clave</h4>
				</div>
				<div class="col l9 s12">
				<p><span class="palabra">sed</span><span class="palabra">class</span><span class="palabra">numen</span><span class="palabra">udon</span><span class="palabra">amortia</span><span class="palabra">red</span><span class="palabra">espárago</span><span class="palabra">agua</span></p>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="mas-info">
		<div class="container">
			<div class="row">
				<div class="col l12 s12">
					<h3>Más información <i class="material-icons tiny">expand_more</i></h3>
				</div>
				<div class="row">
					<div class="col l12 s12 izquierda valign-wrapper">
						<div class="texto-info">
							<h4>Descripción</h4>
							<div class="divider"></div>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
							Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
							Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo </p>
							
						</div>					
					</div>
					<div class="col l6 s12 derecha valign-wrapper">
						
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
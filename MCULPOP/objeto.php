<!DOCTYPE html>
<html lang="es">
<!-- HEAD !-->
<?php include('head.php'); ?>

<script src="lib/gral.js"></script>
<script src="lib/objetos.js"></script>


<script>
    $(document).ready(function() {
        pintaObj(<?php echo $_REQUEST['id'];?>);
    });
</script>


<body id="vista">
<!-- MENU !-->
<?php include('menu.php'); ?>

    <main>
        <section class="row fichaTec graybg" >
            <article >
                <div class="container ">
                    <div class="row valign-wrapper hide-on-small-only">
                        <div class="col s12 m7">
                            <figure>
                                 <img class="materialboxed" width="100%" src="" id="nl_objeto_imagen">
                            </figure>
                        </div>
                        <div class="col s12 m5 ">
                            <div class="row cardInfo">
                                <div id="nl_objeto_cont_name" class="spaceD">
                                    <h5><small>Título</small></h5>
                                    <h4><span id="nl_objeto_name"></span></h4>
                                </div>
                                <div id="nl_objeto_cont_creadorInstitucion" class="spaceD">
                                	<h5>Autoría</h5>
                                	<h4><span id="nl_objeto_creadorInstitucion"></span></h4>
                                </div>
                                <div id="nl_objeto_cont_creadorGrupo" class="spaceD">
                                	<h5>Autores</h5>
                                	<h4><span id="nl_objeto_creadorGrupo"></span></h4>
                                </div>
                                <div id="nl_objeto_cont_creadorPersona" class="spaceD">
                                	<h5>Autor</h5>
                                	<h4><span id="nl_objeto_creadorPersona"></span></h4>
                                </div>
                                <div id="nl_objeto_cont_fechaValor" class="spaceD">
                                	<h5>Año</h5>
                                	<h4><span id="nl_objeto_fechaValor"></span></h4>
                                </div>
                                <div id="nl_objeto_cont_fechaPeriodo" class="spaceD">
                                	<h5>Período</h5>
                                	<h4><span id="nl_objeto_fechaPeriodo"></h4>
                                </div>
                                <div id="nl_objeto_cont_fechaRango" class="spaceD">
                                	<h5>Rango de creación</h5>
                                	<h4><span id="nl_objeto_fechaRango"></span></h4>
                                </div>
                                <div class="spaceD" id="nl_objeto_cont_dimensionesTexto">
                                	<h5>Dimensiones</h5>
                                    <p id="nl_objeto_dimensionesTexto"></p>
                                </div>
                                <div id="nl_objeto_cont_permisosDigital" class="spaceD">
                                	<h5>Derechos digitales</h5>
                                	<p><span id="nl_objeto_permisosDigital"></span></p>
                                </div>
                                <div id="nl_objeto_cont_bicPermisos" class="spaceD">
                                	<h5>Derechos del objeto</h5>
                                	<p><span id="nl_objeto_bicPermisos"></span></p>
                                </div>
                                <div class="row">
                                    <div class="right">
                                        <h5><small><a class="masr text-ccl text-may" href="#mas-info">Ver mas</a></small></h5>                                           
                                    </div>                                
                                </div>
                            </div>
                            <div class="rrss">
                                <ul class="right">
                                    <li><a href="#" class="text-cc"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="text-cc"><i class="fa fa-share-alt" aria-hidden="true"></i></a> </li>
                                    <li><a href="#" class="text-cc"><i class="fa fa-download" aria-hidden="true"></i></a> </li>

                                </ul>
                            </div>
                        </div>                        
                    </div>
                    <div class="card hide-on-med-and-up show-on-small">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="img/cards/24a.jpg">
                            <div class="card-title" >
                               
                            </div>
                        </div>
                        <div class="card-content">
                          <h4 class="activator">Lorem ipsum dolor sit amet<i class="material-icons right">more_vert</i></h4>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                        <div class="row cardInfo">
                            <div class="spaceD">
                                <h5><small>Título</small></h5>
                                <h4>Lorem ipsum dolor sit amet</h4>
                            </div>
                            <div class="spaceD">
                                <h5><small>Autor</small></h5>
                                <p>Enim ad minim </p>
                            </div>
                            <div class="spaceD">
                                <h5><small>Año</small></h5>
                                <p>Enim ad minim </p>
                            </div>
                            <div class="spaceD">
                                <h5><small>Dimensiones</small></h5>
                                <p>Diam nonummy nibh </p>
                            </div>
                            <div class="spaceD">
                                <h5><small>Copyright</small></h5>
                                <p>Aliquam erat volutpat</p>
                            </div>
                            <div class="row">
                                <div class="right">
                                    <h5><small><a class="masr text-ccl text-may" href="">Ver mas</a></small></h5>                                           
                                </div>                                
                            </div>
                        </div>
                        </div>
                      </div>                    
                </div>                
                <div class="row white valign-wrapper" id="obRel">
                    <div class="col s6 m3">
                        <h4 class="center-align">Objetos Relacionados —</h4>
                    </div>
                    <div class="col s6 m9" id="oRelacionado">
                        <div class="multiple-items responsive">
                            <div>
                              <img src="img/cards/rel/14a.jpg" class="responsive-img">
                            </div>
                            <div>
                              <img src="img/cards/rel/24a.jpg" class="responsive-img">
                            </div>
                                <div>
                              <img src="img/cards/rel/2b.jpg" class="responsive-img">
                            </div>
                            <div>
                              <img src="img/cards/rel/14a.jpg" class="responsive-img">
                            </div>                            
                          </div>
                    </div>
                </div>
                <div class="row white valign-wrapper" id="masInformacionCard">
                    <div class="container">
                        <p class="text-pk"><i class="fa fa-plus-circle" aria-hidden="true"></i> Más información</p>
                    </div>
                </div>
                
            </article>        
        </section>        
    </main>
      
    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
           <div class="row">
                <div class="col s12 m8">
                    <a class="white-text  " href="#">Directorio</a>
                    <a class="white-text " href="#">Términos y condiciones</a>
                    <a class="white-text " href="#">Política de Privacidad</a>
                </div>
                <div class="col s12 m4 right-align" id="mr">
                    <span class="white-text">Secretaría de Cultura 2017. Todos los derechos reservados</span>
                </div>    
            
           </div>
        </div>
      </div>
    </footer>  
   
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        
        
        

      $(".multiple-items").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
          accessibility: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]          
      });

    });
</script>    
</body>
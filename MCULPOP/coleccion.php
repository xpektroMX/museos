<!DOCTYPE html>
<html lang="es">
<!-- HEAD !-->
<?php include('head.php'); ?>



<body id="buscador">
<!-- MENÚ !-->
<?php 
include('menu.php');
include 'nl/coleccion.php';
?>

    <main>
        <section>
            <div class="container">
                <div class="row" id="searchCo">
                    <div class="section">
                        <h3 class="center-align">BUSCAR EN LA COLECCIÓN</h3>
                        <div class="col s12 m8 offset-m2 ">
                            <form name="buscacoleccion" action="" method="POST">     
                               <div class="row">
                                    <div class="input-field col s12">
                                      <input type="search" name="busqueda" id="buscar" class="filtr-search validate" name="filtr-search" data-search>
                                      <label for="buscar">Buscar</label>
                                    </div>
                                  </div> 
                                <p class="center-align text-mayus text-gray">100 resultados</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>                          
        </section>  
        <section class="graybg">
            <div class="container">
                <div class="row section">
                    <a id="vGrid"   type="button" class="right text-gray "><i class="fa fa-th-large fa-lg" aria-hidden="true"></i></a>
                    <a id="vList"  type="button" class="right text-gray "  style="margin-right: 20px;"><i class="fa fa-th-list fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="row">
                    <div class="col s12 m2 ">
                      <ul class="collapsible white" data-collapsible="accordion">
                        <li>
                          <div class="collapsible-header">FILTRAR <i class="fa fa-minus-circle" aria-hidden="true"></i></div>
                          <div class="collapsible-body">
                              <span>                        
                                  <div class="controls">
                                    <a  class="control" data-toggle=".colores"><i class="fa fa-minus-circle" aria-hidden="true"></i> Filtro </a>
                                    <a  class="control" data-toggle=".musico"><i class="fa fa-minus-circle" aria-hidden="true"></i> Filtro </a>
                                    <a  class="control" data-toggle=".cargando"><i class="fa fa-minus-circle" aria-hidden="true"></i> Filtro </a>
                                    <a  class="control" data-toggle=".boleador"><i class="fa fa-minus-circle" aria-hidden="true"></i> Filtro </a>
                                    <a  class="control" data-toggle=".juego"><i class="fa fa-minus-circle" aria-hidden="true"></i> Filtro </a>
                                    <a  class="control" data-filter="all">Borrar</a>
                                    </div>
                              </span>
                            </div>
                        </li>

                      </ul>                        

                    </div>   
                    <div class="col s12 m10">
                        <div class="row">
                            <div class="containerserc">
                                <div class="container" id="nl_contenedor_coleccion"></div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <center>
                      <ul class="pagination">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                      </ul>                        
                    </center>
                </div>
            </div>
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
   
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>    
        <script src="js/mixitup.min.js"></script>

        <script>
            var containerEl = document.querySelector('.containerserc');

            var mixer = mixitup(containerEl, {
                controls: {
                    toggleLogic: 'and'
                }
            });
        </script>

</body>
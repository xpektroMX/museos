<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
  
  <?php include('scripts.php'); ?>

  <script src="lib/gral.js"></script>
  <script src="lib/objetos.js"></script>

  <script>
    $(document).ready(function() {
      pintaObj(<?php echo $_REQUEST['id'];?>);
    });
  </script>

</head>
<body>
<section class="blue-grey lighten-5">
     <?php include('menu.php'); ?>
<section class="container blue-grey lighten-5">
      <div class="row" id="objeto">
            <h3 id="nl_objeto_cont_name" class="col s12 center"><span id="nl_objeto_name"></span></h3>
            <h2 id="nl_objeto_cont_creadorInstitucion" class="subtitulo center"><span id="nl_objeto_creadorInstitucion"></span></h2>
            <h2 id="nl_objeto_cont_creadorGrupo" class="subtitulo center"><span id="nl_objeto_creadorGrupo"></span></h2>
            <h2 id="nl_objeto_cont_creadorPersona" class="subtitulo center"><span id="nl_objeto_creadorPersona"></span></h2>
            
            <div id="slider" class="col s12 m8 l9">
                  <span ><img src="" id="nl_objeto_imagen" alt="" class="responsive-img"></span>
        <div id="socializa" class="right">
               <a href="#"><i class="material-icons ocre1 hoverable">share</i></a>
               <a href="#"><i class="material-icons ocre1 hoverable">favorite</i></a>
               <a href="#"><i class="material-icons ocre1 hoverable">file_download</i></a>
        </div>
            </div>
            <div id="descripcion" class="col s12 m4 l3 blue-grey lighten-4">
                  <dl>
                        <dt>Año</dt>
                        <dd><span id="nl_objeto_fechaValor"></span> <span id="nl_objeto_fechaPeriodo"></span> 
                        <span id="nl_objeto_fechaRango"></span></dd>
                        <div id="nl_objeto_cont_dimensionTexto">
                          <dt>Dimensiones</dt>
                          <dd><span id="nl_objeto_dimensionTexto"></span></dd>
                        </div>

                        <span id="nl_objeto_cont_institucionCustodia"><dt>Colección</dt>
                        <dd><span id="nl_objeto_institucionCustodia"></span></dd></span>
                  </dl>
              <div class="separator"></div>
                  <p>
                    <a href="#masInfo" class="ocre1">más información + </a> 
                  </p>
            </div>
      </div>
      <!--Zona de filtros, imagenes relacionadas y palabras clave-->
    <div class="row col s12 ">
      <div class="col s12 m12 l3">
        <p><strong>Obras relacionadas</strong></p>
        <p class="ocre_cursiva">palabras clave</p>
          <div class="divider"></div>
    <table>
        <tbody>
          <tr>
            <td>Keyword</td>
            <td>Keyword</td>
            <td>Keyword</td>
          </tr>
          <tr>
            <td>Keyword</td>
            <td>Keyword</td>
            <td>Keyword</td>
          </tr>
          <tr>
            <td>Keyword</td>
            <td>Keyword</td>
            <td>Keyword</td>
          </tr>
        </tbody>
      </table>
      </div>
      <div class="col s12 m3">
        <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imgs/rel01.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Título de la pieza <i class="material-icons right">more_vert</i></span>
      <p><a href="#">Autor</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Título aquí  <i class="material-icons right">close</i></span>
      <p>Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas.</p>
    </div>
  </div>
      </div>
      <div class="col s12 m3">
        <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imgs/rel02.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Título de la pieza <i class="material-icons right">more_vert</i></span>
      <p><a href="#">Autor</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Título pieza <i class="material-icons right">close</i></span>
      <p>Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas.</p>
    </div>
  </div>
      </div>
      <div class="col s12 m3">
        <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imgs/rel03.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Título de la pieza <i class="material-icons right">more_vert</i></span>
      <p><a href="#">Autor</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Título de la pieza <i class="material-icons right">close</i></span>
      <p>Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas.</p>

</p>
    </div>
  </div>
      </div>
    </div>


      <!--Más INFO Collapsible-->
      <div id="masInfo">
    <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">note</i>Más información</div>
      <div class="collapsible-body"><span> <h3>Sobre la obra</h3> 
        <p>Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un país paraisomático en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuación dominan a los textos simulados; una vida, se puede decir, poco ortográfica. Pero un buen día, una pequeña línea de texto simulado, llamada Lorem Ipsum, decidió aventurarse y salir al vasto mundo de la gramática. El gran Oxmox le desanconsejó hacerlo, ya que esas tierras estaban llenas de comas malvadas, signos de interrogación salvajes y puntos y coma traicioneros, pero el texto simulado no se dejó atemorizar. Empacó sus siete versales, enfundó su inicial en el cinturón y se puso en camino.</p>

      </span>
      </div>
      </li>
  </ul>
  </div>         
      
     
</section>











<footer class="blue-grey lighten-5 col s12">
      <p class="center-align">Secretaría de Cultura 2017. Todos los derechos reservados</p>
</footer>
</body>
<?php include('scripts.php'); ?>

</html>

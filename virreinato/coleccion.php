<!DOCTYPE html>
<html>
<head>

<?php include('scripts.php'); ?>

  <title>Museo del Nacional del virreinato</title>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Importa materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Importa Estilo Virreinato particular.css-->
      <link rel="stylesheet" type="text/css" href="css/estilo_virreinato.css">
      <link rel="stylesheet" type="text/css" href="css/fuentes_virreinato.css">

      <!--sitio optimizado para móviles-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    
</head>
<body>
<section class="blue-grey lighten-5">
  <?php
   include('menu.php');
   include 'nl/coleccion.php';
   ?>
          <!-- header de la colección -->
          <div class="row">
          	<div class="center col s12" id="head_col">
             <h2>| Buscar en la colección |</h2> 
            </div>
          </div>
           <!-- header de la colección -->
     
</div>
<section class="col s12 blue-grey lighten-5" id="menu_filtros">
  <nav class="blue-grey lighten-5 col s12 m6 ">
    <ul>
      <li><a href="#" class="grey-text darken-2">Filtro 1</a></li>
      <li><a href="#" class="grey-text darken-2">Filtro 2</a></li>
      <li><a href="#" class="grey-text darken-2">Filtro 3</a></li>
    </ul>
    <ul class="right">
  <li><a href="#" class="grey-text darken-2">Ordenar por</a></li>
  <li><a href="#" class="grey-text darken-2"><i class="material-icons">view_list</i></a></li>
  <li><a href="#" class="grey-text darken-2"><i class="material-icons">view_module</i></a></ul>
  </nav>
      
</section>



<section>

<section class="row">
  <section class="col s12 m9 l8">
        <div class="container" id="nl_contenedor_coleccion"></div>


<!-- La galería -->

	</section>


  <!--zona Lateral Filtros-->
    	<section class="col s12 m3 l4" id="filtros">
        <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">add</i>Filtro 1</div>
      <div class="collapsible-body"><span>datos filtro</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">add</i>Filstro 2</div>
      <div class="collapsible-body"><span>datos filtro</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">add</i>Filtro 3</div>
      <div class="collapsible-body"><span>datos filtro</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">add</i>Filtro 4</div>
      <div class="collapsible-body"><span>datos filtro</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">add</i>Filtro 5</div>
      <div class="collapsible-body"><span>datos filtro</span></div>
    </li>
  </ul>
      </section>
      
</section>

     
<footer class="blue-grey lighten-5 col s12">
      <p class="center-align">Secretaría de Cultura 2017. Todos los derechos reservados</p>
</footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	
    
</head>
<body>
<section>
      <?php include('menu.php'); ?>
      
          <!-- header con foto gigante -->
     
      <header class="col s12  green lighten-5">
           
      </header>  

<!-- sección colección -->
      <section class="row blue-grey lighten-5 ">
            <section>
                  <div class="col s12 m9">
                        <article id="coleccion">
                        <h3>Colección</h3>
                        <p>Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas. </p>
                        </article>
                   <div class="col s12 m4 l4">
                        <img class="responsive-img" src="imgs/random01.jpg">
                  </div> 
                  <div class="col s12 m4 l4">
                        <img class="responsive-img" src="imgs/random02.jpg">
                  </div>
                   <div class="col s12 m4 l4">
                         <img class="responsive-img" src="imgs/random03.jpg">
                  </div>
                  </div>

                  <article id="info" class="col s12 m3 l3 #00897b teal darken-4 white-text">
                        <h4>INFORMACIÓN GENERAL</h4>
                        <p><strong>HORARIO</strong><br>
                              Martes a viernes: 11:00 am - 5:00 pm <br>
                              Sábados y domingos: 11:00 am - 6:00 pm 
                        </p>
                        <p><strong>TARIFAS</strong><br>
                        Admisión general: $00.00<br>
                        Estudiantes y maestros: $00.00<br>
                        Niños menores de 12 años y adultos mayores, entrada libre
                        </p>
                        <p><strong>CONTACTO</strong><br>
                              Tel: 5555-6666<br>
                              mail@museoveldirreinato.gob.mx
                        </p>
                  </article> 
            </section>
      </section>

<div id="actividades" class="col s12">
      <article>
            <h3 class="center col s12">Actividades</h3>
            <p class="center">Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas. </p>
      </article>

      <div class="col s12 m4">
            <img class="responsive-img" src="imgs/actividades01.jpg" alt="actividad mes">
      </div>
        <div class="col s12 m4">
            <img class="responsive-img" src="imgs/actividades02.jpg" alt="actividad día">
      </div>
        <div class="col s12 m4">
            <img class="responsive-img" src="imgs/actividades03.jpg" alt="actividad semana">
      </div>  
      <div class="center">
            <a class=" yellow lighten-5 brown-text waves-effect waves-yellow btn">VER TODAS</a>
      </div>
</div>
<div class="row" id="ingresa">
      <section class="col s12 m8">
            <div>
                  <p><strong>Crea tus colecciones</strong></p>
                  <p class="ocre1"><strong>REGISTRATE EN MI MUSEO</strong></p>
                  <form>
                        <div class="input-field col s6">
                        <input type="text" name="nombre" placeholder="nombre" class="validate input-field">
                        <input type="password" name="pswd" placeholder="contraseña">
                        <input type="text" name="correo" placeholder="correo">
                        <input type="password" name="pswd" placeholder="confirmar contraseña">
                        </div>
                  <div class="col s4 center">
                        <button class="waves-effect waves-light btn-flat ">INGRESAR CON FACEBOOK</button><br>
                        <button class="waves-effect waves-light btn-flat ">INGRESAR CON GMAIL</button><br>
                        <button type="submit" class=" waves-effect waves-light btn-white brown-text">LISTO</button> 
                         <p>Al crear una cuenta acepta las <a href="#">condiciones de uso</a> y la <a href="#">política de privacidad</a></p>
                  <div class="separador"></div>
                  <p>¿YA TIENES CUENTA?</p>
                  <button class="">INGRESAR</button>
                  </div>
                  </form>
            </div>  
      </section>
      <section class="col s12 m4" id="contacta">
            <div >
            <p class="center"><strong>¿Deseas más información?</strong></p>
            <p class="ocre1 center"><strong>CONTÁCTANOS</strong></p>
      <p>       
            <p class="left"><img src="imgs/icon-fb.svg"> <img src="imgs/icon-tw.svg"> <img src="imgs/icon-ig.svg"> </p>
            <p class="left"><img src="imgs/icon-mail.svg">virreinato@inah.gob.mx </p>
            <p class="left"><img src="imgs/icon-phone.svg" alt="">5876-2770, 5876-0245, 5876-2770</p>
            <p class="left"><img src="imgs/icon-location.svg" alt="">
Plaza Hidalgo 99, Bo. San Martín, Tepotzotlán, Estado de México, México</p><br>
      </p>
            
                  

      </div>
            
      </section>
</div>

 </section>

</section>
<footer class="blue-grey lighten-5 col s12">
      <p class="center-align">Secretaría de Cultura 2017. Todos los derechos reservados</p>
</footer>
</body>
<?php include('scripts.php'); ?>

</html>
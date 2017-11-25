<?php $__env->startSection('content'); ?>
<script>
  $(document).ready(function(){
  $('#modal').modal('show')});
</script>
<body class="home">
  <div class="row">
    <!--modal-->
    <div id="modal" class="modal fade" role="dialog">
      <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Bienvenido a Menúlife</strong></h4>
        </div>
        <div class="modal-body">
        <div class="btn-modal">
          <p align="justify">Menúlife es una aplicacion web que te ayuda con tus afectaciones de salud, solo escoge la categoria de tu afectacion y te mostraremos toda la informacion relacionada a ella, tal como recomendaciones, Menus de comida y ejercios de actividad fisica.
          </p>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
      </div>
    </div>
  <div id="div-tabs" class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
  <header id="header-tabs"   class="mdl-layout__header">
    <div id="div-header-tabs" class="mdl-layout__header-row">
    </div>
    <!-- Tabs -->
    <div id="div-a-tabs" class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Circulatorio</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab">Digestivo</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Renal</a>
    </div>
  </header>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content">
        <!-- contenido -->
        <section class="tips-circulatorio">
          <div class="container">
            <div class="container">
              <div class="row align-content-center">
                <div class="col-md-1"></div>
                  <div id="t-recomendaciones" class="col-md-10 align-items-center text-center ">
                    <h2>Recomendaciones</h2>
                    <p class="text-center">
                    La mala circulación de la sangre puede tener muchas causas, las principales son: tener los niveles altos de colesterol, tener un consumo pobre de alimentos que aporten fibra, comer alimentos muy salados y, además, poco consumo de líquidos.
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">smoke_free</i>
                  <h3>Dejar de fumar</h3>
                  <p class="text-center">Desde hace muchos años se ha demostrado que el cigarrillo es uno de los principales enemigos de la salud humana, el cual es causante de graves enfermedades circulatorias y puede aumentar de manera importante la presión arterial.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">thumbs_up_down</i>
                  <h3>Realizar masajes</h3>
                  <p class="text-center">Con una buena crema puedes realizar un suave, pero firme masaje que debe comenzar en los pies y en seguida ir subiendo hasta llegar a los muslos, de esta manera se aumenta el flujo de la sangre y se reduce notablemente todo problema circulatorio.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">airline_seat_recline_extra</i>
                  <h3>Elevar las piernas</h3>
                  <p class="text-center">Al llegar a casa podemos regalarnos unos cuantos minutos para relajarnos un poco y mientras descansamos de una larga jornada de trabajo, podemos elevar un poco las piernas, de esta manera ayudamos a que la sangre retorne con más facilidad y se active la circulación sanguínea.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                  <div class="col-sm-6 col-md-4 text-center">
                    <i class="material-icons md-36">fitness_center</i>
                    <h3>Hacer ejercicio</h3>
                    <p class="text-center">El mejor y más sencillo ejercicio que se puede realizar todos los días para mejorar la circulación de la sangre y evitar complicaciones mayores es simplemente caminar. Hazlo por lo menos media hora, además una correcta hidratación es fundamental para la buena salud en general.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-4 text-center">
                    <i class="material-icons md-36">opacity</i>
                    <h3>Hidroterapias</h3>
                    <p class="text-center">La hidroterapia es un masaje que se realiza utilizando chorros fuertes de agua caliente y fría, al activa la circulación de la sangre de forma inmediata comenzando a fluir de manera normal. Esta terapia se puede efectuar día de por medio sin ningún problema.
                    </p>
                  </div>
              </div>
        </section>
        <section class="menu-circulatorio">
          <div class="row">
            <div class="col">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta.png" alt="" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta2.png" alt="" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta3.png" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                <table class="table table-responsive table-hover">
                  <thead class="thead-inverse">
                    <tr>
                      <th>Desayuno</th>
                      <th>Almuerzo</th>
                      <th>Cena</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $renal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric"><?php echo $var->desayuno; ?> </td>
                      <td><?php echo $var->almuerzo; ?> </td>
                      <td><?php echo $var->cena; ?> </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
              </div>
            </div>
        </section>
        <section class="img-ejercicio">
          <div>
            <img  class="img-fluid" src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/sin.png" alt="imagen">
          </div>
        </section>
        <section class="rutina-circulatorio">
          <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
                <div id="t-recomendaciones" class="col-md-10 align-items-center text-center ">
                  <h2>Rutina de ejercicios</h2>
                    <p class="text-center">
                    Ejercitarte te ayudara a mantener un buen estado de salud por eso <strong> Menúlife </strong> tiene una rutina de ejercicios para ti.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Ejercicio 1</h3>
                  <p class="text-center">Acuéstate en el suelo boca arriba con las manos estiradas a lo largo de tu cuerpo. Estira las piernas y elévalas. Flexiona las rodillas y extiende nuevamente las piernas unas 20 veces de manera alternativa. Cuidado con la columna, mantén la espalda pegada al suelo. Este ejercicio no solo sirve para estimular la circulación, sino también para fortalecer las piernas y el abdomen.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Ejercicio 2</h3>
                  <p class="text-center">Para promover la circulación de la sangre en las piernas, deberás hacer el ejercicio de la bicicleta. Para ello, deberás tumbarte en el suelo o en una colchoneta, asegurándote de que la espalda quede bien pegada al suelo durante todo el ejercicio. Lleva tus manos detrás de la nuca y eleva tus piernas. Simula pedalear durante al menos un minuto para favorecer el retorno de la sangre hacia el corazón.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Ejercicio 3</h3>
                  <p class="text-center">Este movimiento simple ayuda a mejorar el retorno de la sangre desde las piernas hacia todo el cuerpo, evitando la formación de varices y arañitas. Para llevarlo a cabo, simplemente deberás tumbarte en el suelo o sobre una colchoneta, mirando hacia el techo. Eleva las piernas totalmente estiradas, sepáralas y júntalas nuevamente. Haz dos o tres series de 15 repeticiones.</p>
                </div>
              </div>
          </div>
        </section>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content">
        <!-- contenido -->
        <section class="tips-circulatorio">
          <div class="container">
            <div class="container">
              <div class="row align-content-center">
                <div class="col-md-1"></div>
                  <div id="t-recomendaciones" class="col-md-10 align-items-center text-center ">
                    <h2>Recomendaciones</h2>
                    <p class="text-center">
                    Estamos en la época del año en la que las temperaturas son muy altas, esto a su vez provoca que la incidencia de enfermedades gastrointestinales se dispare. Por ello te damos 12 consejos que te ayudarán a prevenir y evitar estas infecciones estomacales y así sus molestos síntomas.
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">adjust</i>
                  <h3>No te automediques</h3>
                  <p class="text-center"> A la larga puede crear resistencia al medicamento y la siguiente vez no hará efecto para la infección.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">block</i>
                  <h3>Evitar</h3>
                  <p class="text-center">Evita la ingestión de líquidos con cafeína, azucarados o bebidas alcohólicas, ya que estos hacen que pierdas más líquidos corporales.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">clear</i>
                  <h3>No beber cualquier agua</h3>
                  <p class="text-center">No bebas agua en restaurantes u otros lugares si no es embotellada</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                  <div class="col-sm-6 col-md-4 text-center">
                    <i class="material-icons md-36">room_service</i>
                    <h3>Comer a tiempo</h3>
                    <p class="text-center">Come los alimentos inmediatamente después de preparados para evitar su descomposición.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-4 text-center">
                    <i class="material-icons md-36">ac_unit</i>
                    <h3>Refrigerar los alimentos</h3>
                    <p class="text-center">Guarda en el refrigerador los alimentos que se descomponen fácilmente.
                    </p>
                  </div>
              </div>
        </section>
        <section class="menu-circulatorio">
          <div class="row">
            <div class="col">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img  src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta.png" alt="" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <img  src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta2.png" alt="" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <img  src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta3.png" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                <table class="table table-responsive table-hover">
                  <thead class="thead-inverse">
                    <tr>
                      <th>Desayuno</th>
                      <th>Almuerzo</th>
                      <th>Cena</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $renal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric"><?php echo $var->desayuno; ?> </td>
                      <td><?php echo $var->almuerzo; ?> </td>
                      <td><?php echo $var->cena; ?> </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
              </div>
            </div>
        </section>
        <section class="img-ejercicio">
          <div>
            <img  class="img-fluid" src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/sin.png" alt="imagen">
          </div>
        </section>
        <section class="rutina-circulatorio">
          <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
                <div id="t-recomendaciones" class="col-md-10 align-items-center text-center ">
                  <h2>Rutina de ejercicios</h2>
                    <p class="text-center">
                    Ejercitarte te ayudara a mantener un buen estado de salud por eso <strong> Menúlife </strong> tiene una rutina de ejercicios para ti.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Flexión hacia adelante</h3>
                  <p class="text-center">Sentado en el suelo, realiza una serie de respiraciones profundas para preparar y relajar el cuerpo. Después exhala y abraza las rodillas juntándolas todo lo que puedas al pecho. Mantén la posición de 5 a 10 respiraciones lentas y profundas. Repite el movimiento al menos 3 veces. Si te cuesta puedes hacerlo con una rodilla solo y dejar la otra extendida.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Giro de la cadera </h3>
                  <p class="text-center">Tumbado boca arriba y con los brazos en cruz apoyados a los lados del cuerpo, haz una respiración profunda, encoge las piernas y deja inclinar las piernas hacia un costado, mientras expulsas el aire. Mantén la posición durante 5 respiraciones y luego repite el ejercicio hacia el lado contrario.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Flexión hacia adelante</h3>
                  <p class="text-center">Sentado en el suelo con las piernas juntas intenta flexionar el tronco para llegar lo más cerca posible de ellas. Aguanta la posición 5 respiraciones profundas pero manteniéndote cómodo.</p>
                </div>
              </div>
          </div>
        </section>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content">
        <!-- contenido -->
        <section class="tips-circulatorio">
          <div class="container">
            <div class="container">
              <div class="row align-content-center">
                <div class="col-md-1"></div>
                  <div id="t-recomendaciones" class="col-md-10 align-items-center text-center ">
                    <h2>Recomendaciones</h2>
                    <p class="text-center">
                    En líneas generales, si padeces insuficiencia renal es mejor evitar o limitar los fritos y que los alimentos se cocinen hervidos, al vapor, a la plancha o asados. Estas son otras recomendaciones dietéticas para controlar tu patología.
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">room_service</i>
                  <h3>Alimentos con potacio</h3>
                  <p class="text-center"> Tener en cuenta que los alimentos más ricos en potasio son las frutas, las verduras, las legumbres, los frutos secos y el cacao, y limitar su ingesta para evitar la hipopotasemia.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">block</i>
                  <h3>Evitar liquidos</h3>
                  <p class="text-center">Controle el líquido total que puede ingerir al día, de acuerdo a las recomendaciones de su médico y compruebe, pesándose siempre en la misma báscula, que no aumenta de peso entre las sesiones de diálisis, porque podría deberse a una retención de líquidos.
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                  <i class="material-icons md-36">clear</i>
                  <h3>No automedicarse</h3>
                  <p class="text-center">No se automedique. Tome únicamente los medicamentos indicados por el especialista que le trata, y en las dosis recomendadas por el mismo.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                  <div class="col-sm-6 col-md-4 text-center">
                    <i class="material-icons md-36">airline_seat_flat</i>
                    <h3>Descansar</h3>
                    <p class="text-center">Después de una sesión de diálisis es normal que se sienta fatigado durante unas horas, por lo que se recomienda descansar. Tampoco debe conducir antes ni después de la diálisis.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-4 text-center">
                    <i class="material-icons md-36">smoke_free</i>
                    <h3>No fumar</h3>
                    <p class="text-center">Elimine el consumo de tabaco porque puede originar complicaciones cardiovasculares.
                    </p>
                  </div>
              </div>
        </section>
        <section class="menu-circulatorio">
          <div class="row">
            <div class="col">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta.png" alt="" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta2.png" alt="" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/tarjeta3.png" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                      <p id="parraf"><strong>Menúlife </strong>Tiene un menu de comida de una semana  para ayudarte a mantener tu buena salud.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                <table class="table table-responsive table-hover">
                  <thead class="thead-inverse">
                    <tr>
                      <th>Desayuno</th>
                      <th>Almuerzo</th>
                      <th>Cena</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $renal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric"><?php echo $var->desayuno; ?> </td>
                      <td><?php echo $var->almuerzo; ?> </td>
                      <td><?php echo $var->cena; ?> </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
              </div>
            </div>
        </section>
        <section class="img-ejercicio">
          <div>
            <img  class="img-fluid" src="https://raw.githubusercontent.com/CVILLERAARROYO/imagen/master/sin.png" alt="imagen">
          </div>
        </section>
        <section class="rutina-circulatorio">
          <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
                <div id="t-recomendaciones" class="col-md-10 align-items-center text-center ">
                  <h2>Rutina de ejercicios</h2>
                    <p class="text-center">
                    Ejercitarte te ayudara a mantener un buen estado de salud por eso <strong> Menúlife </strong> tiene una rutina de ejercicios para ti.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Fase 1</h3>
                  <p class="text-center">Predominan los ejercicios respiratorios y de
                  relajación, muy necesarios en estos pacientes,
                  no sólo por la activación funcional, si no también,
                   por tener la respiración una función excretora que
                  contribuye al control de la homeostasis y conjuntamente con la relajación actúan sobre los factores
                  de progresión de la enfermedad.
                  La técnica terapéutica empleada con mayor énfasis es el Qi-gong interno y externo, lo que
                  permite desarrollar una respiración coordinada durante la ejecución de lo ejercicios.
                  </p>
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                  <i class="material-icons md-48">fitness_center</i>
                  <h3>Fase 2</h3>
                  <p class="text-center">Sin  descuidar  los  elementos  de  la  primera  fa
                  se,  se  trabaja  con  ejercicios  de  carácter
                  dinámico y aeróbico, con el fin de incrementar la masa corporal, la capacidad de trabajo aerobio y su
                  consiguiente repercusión sobre las enfermedades asociadas.
                  Se  utilizan  la  caminata  y  la  marcha
                  </p>
                </div>
              </div>
          </div>
        </section>
      </div>
    </section>
  </main>
</div>
</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
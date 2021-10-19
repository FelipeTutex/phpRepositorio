<?php
  $today=date('l, d F Y');
  $usuario=gethostname();
  $menus=array("inicio"=>"Conoce al acorazado","armas"=>"Armamento","historia"=>"Historial","imagenes"=>"Galeria","otros"=>"Clase Iowa");
  $barcosClaseIowa= (object)["Iowa"=>"USS Iowa (BB-61)","NewJersey"=>"USS New Jersey (BB-62)","Wisconsin"=>"USS Wisconsin (BB-64)","Illinois"=>"USS Illinois (BB-65)","Kentucky"=>"USS Kentucky (BB-66)"]
  
?>  

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USS Missouri</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary navbar-dark bg-dark" color-on-scroll="400">
          <div class="container">
          <p class="text-white">
            Fecha actual: <?php echo $today;?>
          </p>
          
            <!--REVISAR TOOLBAR-->
            <div class="navbar-translate">
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#Acorazado"><?php echo "$menus[inicio]";?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#Armamento"><?php echo "$menus[armas]";?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#Historial"><?php echo "$menus[historia]";?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#Galeria"><?php echo "$menus[imagenes]";?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#ClaseIowa"><?php echo "$menus[otros]";?></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="container">
        <div class="content-center">
          <p class="text-white">
            <font size="5">
              Bienvenido <u><?php echo $usuario;?></u> al
              Buque Museo
            </font>
          </p>

          <div class="h1 title">
            USS Missouri
          </div>
          
        </div>
      </div>

    </div>
  </div>
</div>
<div class="section" id="Acorazado">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">USS Missouri</div>
            <p>
              El USS Missouri (BB-63) es un acorazado clase Iowa de la Armada de los Estados Unidos, encargado en 1940 y asignado en junio de 1944. <br/>
              Participó en batallas de la Segunda Guerra Mundial, la Guerra de Corea y el golfo Pérsico, 
              recibiendo un total de 11 Estrellas de Combate por su servicio  .<br/>
              En 1998 fue donado a la USS Missouri Memorial Association y se convirtió en barco museo en Pearl Harbor, Hawái.
            </p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Datos</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Astillero:</strong></div>
              <div class="col-sm-8">New York Naval Shipyard</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Clase:</strong></div>
              <div class="col-sm-8">Iowa</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Tipo:</strong></div>
              <div class="col-sm-8">Acorazado</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Autorizado:</strong></div>
              <div class="col-sm-8">12 de junio de 1940</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Iniciado:</strong></div>
              <div class="col-sm-8">6 de enero de 1941</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Botado:</strong></div>
              <div class="col-sm-8">29 de enero de 1944</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Asignado:</strong></div>
              <div class="col-sm-8">11 de junio de 1944</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Baja:</strong></div>
              <div class="col-sm-8">31 de marzo de 1992</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Destino:</strong></div>
              <div class="col-sm-8">Buque museo desde el 12 de enero de 1995</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" id="Armamento">
  <div class="container">
    <div class="h4 text-center mb-4 title">Armamento</div>
      <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <strong class="text-uppercase"><font size="6">Original</font></strong><br/>
              <br/>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p><strong>Batería Principal</strong></p>
            </div>
            <div class="col">
              <p><strong>Batería Secundaria</strong></p>
            </div>
            <div class="col">
              <p><strong>Batería antiaéreos</strong></p>
            </div>
            <div class="col">
              <p><strong>Batería antiaéreos</strong></p>
            </div>
          </div>
          <!--IMAGENES-->
          <div class="row">
            <div class="col">
              <img src="./images/BateriaPrincipal.jpg" class="imgBarco" width="250" height="200">
              <hr/>
              9 cañones Mark 7 de 406 mm/50 (16")
            </div>
            <div class="col">
              <img src="./images/BateriaSecundaria.jpg" class="imgBarco" width="250" height="200">
              <hr/>
              20 cañones Mark 12 de 127 mm/38 (5")
            </div>
            <div class="col">
              <img src="./images/BateriaAA01.jpg" class="imgBarco" width="200" height="200"> 
              <hr/>
              80 cañones antiaéreos (40 mm/56)
            </div>
            <div class="col">
              <img src="./images/BateriaAA02.jpg" class="imgBarco" width="200" height="200">
              <hr/>
              49 cañones antiaéreos (20 mm/70)
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>
                <br/>
                <hr>
              </p>
            </div>
          </div>
          <!--MODERNIZACION--------------------------------------------------------------------------------------------------->
          <div class="row">
            <div class="col">
              <strong class="text-uppercase"><font size="6">Modernización 1984</font></strong><br/>
              <br/>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p><strong>Batería principal</strong></p>
            </div>
            <div class="col">
              <p><strong>Batería secundaria</strong></p>
            </div>
            <div class="col">
              <p><strong>Misil de crucero</strong></p>
            </div>
            <div class="col">
              <p><strong>Misil antibuque</strong></p>
            </div>
            <div class="col">
              <p><strong>Defensa antimisiles antibuque</strong></p>
            </div>
          </div>
          <!--IMAGENES-->
          <div class="row">
            <div class="col">
              <img src="./images/BateriaPrincipal.jpg" class="imgBarco" width="250" height="200">
              <hr/>
              9 cañones Mark 7 de 406 mm/50 (16")
            </div>
            <div class="col">
              <img src="./images/BateriaSecundaria.jpg" class="imgBarco" width="250" height="200">
              <hr/>
              20 cañones Mark 12 de 127 mm/38 (5")
            </div>
            <div class="col">
              <img src="./images/MisilCrucero.jpg" class="imgBarco" width="200" height="200"> 
              <hr/>
              32 misiles de crucero BGM-109 Tomahawk
            </div>
            <div class="col">
              <img src="./images/MisilAntibuque.jpg" class="imgBarco" width="200" height="200">
              <hr/>
              16 misiles antibuque RGM-84 Harpoon
            </div>
            <div class="col">
              <img src="./images/AntimisilAntibuque.jpg" class="imgBarco" width="200" height="200">
              <hr/>
              4 CIWS Phalanx 20 mm/76
            </div>
          </div>
        </div>     
      </div>
    </div>
  </div>
</div>

<div class="section" id="Historial">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Historial</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>1939 - 1945</p>
            <div class="h5">Segunda Guerra Mundial</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <p>
              <ul>
                <li>El Missouri salió de Norfolk el 11 de noviembre de 1944, llegó el 14 de diciembre a San Francisco para dirigirse luego a Pearl Harbor</li>
                <li>El acorazado salió a la mar el 27 de enero de 1945 para servir en la escolta del Lexington y el 16 de febrero lanzaron el primer ataque aéreo contra Japón</li>
                <li>Se unió a los acorazados rápidos de la Task Force 58 en el bombardeo de la costa suboriental de Okinawa el 24 de marzo.</li>
                <li>Resultados en la campaña de Okinawa</li>
                  <ul>
                    <li>Derribó cinco aviones enemigos y colaboró en la destrucción de otros seis.</li>
                    <li>Ayudó a rechazar 12 ataques a la luz del día de bombarderos enemigos.</li>
                    <li>Luchó en 4 ataques nocturnos contra su escuadra.</li>
                    <li>Bombardeó la costa, donde destruyó varios emplazamientos y estructuras militares, gubernamentales e industriales.</li>
                  </ul>
                <li>El Missouri encabezó la 3ª Flota, dirigiendo ataques contra los campos de aviación e instalaciones en Kyushu, el 2 y 3 de junio.</li>
                <li>Durante los ataques aéreos el 25 de julio de 1945, el Missouri protegió a los portaaviones mientras estos lanzaban duros ataques contra las capitales japonesas.</li>
                <li>El Missouri condujo a su flota a la victoria controlando el aire, el mar, e incluso las orillas del país nipón. </li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>1947 - 1991</p>
            <div class="h5">La guerra fría</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <p>
              <ul>
                <li>Salió de Estambul el 9 de abril y entró en la bahía de Phaleron (Pireo, Grecia) para recibir una recepción abrumadora de los oficiales y personal del gobierno griego.</li>
                <li>La Unión Soviética buscaba extender su influencia en la región mediterránea, las demandas soviéticas acabaron con una concesión de Turquía en las islas de Dodecaneso y el control común de los estrechos turcos que conducían del mar Negro al Mediterráneo.</li>
                <li>El viaje del Missouri al Mediterráneo del este dio comodidad a Grecia y a Turquía. Los medios proclamaron al acorazado un símbolo del interés de Estados Unidos en preservar la libertad griega y turca.</li>
                <li>El Missouri llegó a Río de Janeiro el 30 de agosto de 1947, para la Conferencia Inter-Americana sobre el Mantenimiento de la Paz y de la Seguridad del Hemisferio.</li>
                <li>En los dos años siguientes, el Missouri participó en los ejercicios atlánticos, desde la costa de Nueva Inglaterra al Caribe. Sufrió reacondicionamiento en el astillero naval de Norfolk, desde el 23 de septiembre de 1949 al 17 de febrero de 1950.</li>
                <li>Durante la última mitad de los años 1940,debido al final de la guerra, varios buques de distintos tipos fueron desarmados y vendidos para el desguace o puestos en una de las flotas de la reserva de la U.S. Navy</li>
                <li>El presidente Truman rechazó que el Missouri fuera desarmado, ordenó que el Missouri fuera mantenido en la flota activa en parte debido a su cariño por el acorazado.</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>25 de jun. de 1950 – 27 de jul. de 1953</p>
            <div class="h5">Guerra de Corea</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <p> 
              <ul>
                <li>En 1950 Corea del norte invadió Corea del sur, dando lugar a que los Estados Unidos intervinieran en nombre de las Naciones Unidas.</li>
                <li>El Missouri, que fue llamado desde la Flota del Atlántico, fue el único acorazado activo en la guerra de Corea. El Missouri llegó al oeste de Kyushu el 14 de septiembre y bombardeó Samcheok el 15 de septiembre</li>
                <li>El Missouri llegó a Inchon el 19 de septiembre, y el 10 de octubre se convirtió en buque insignia del almirante J. M. Higgins, comandante de la 5ª División de Cruceros.</li>
                <li>Después de proteger al portaaviones Valley Forge a lo largo de la costa este de Corea, condujo las misiones del bombardeo del 12 de octubre al 26 de octubre en las áreas de Chongjin, Tanchon y Wonsan</li>
                <li>El Missouri partió de Hampton Roads el 11 de septiembre de 1952 y llegó Yokosuka el 17 de octubre, su misión primaria era proporcionar ayuda artillera desde alta mar, bombardeando los objetivos enemigos</li>
                <li>La última misión de artillería del Missouri fue contra el área de Kojo el 5 de marzo</li>
                <li>Partió de Norfolk 7 de junio como buque insignia en un crucero de entrenamiento. Durante el viaje, se le unieron los otros tres acorazados de la clase: USS New Jersey, USS Wisconsin y USS Iowa. La única ocasión en que los cuatro buques navegarían juntos.</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--IMAGENES-------------------------------------------------------------------------------------------------------------------->
<div class="section" id="Galeria">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Galería</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#WW2" role="tablist"><i class="fa fa-ship" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#GuerraFria" role="tablist"><i class="fa fa-snowflake-o" aria-hidden="true"></i></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-university" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="WW2">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6"><p><h4>Segunda Guerra Mundial</h4></p></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                <figure class="cc-effect"><img src="images/WW2/plano.jpg" alt="Image"/>
                  <figcaption>
                    <div class="h4">Planos</div>
                    <p>plano del Missouri</p>
                  </figcaption>
                </figure></a>
              </div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/WW2/navegando.JPG" alt="Image"/>
                    <figcaption>
                      <div class="h4">En alta mar</div>
                      <p>En esta fotografía podemos ver dos de estos buques, el Iowa a la derecha y el Missouri a la izquierda.</p>
                    </figcaption>
                  </figure></a>
              </div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                <figure class="cc-effect"><img src="images/WW2/rendicion.jpg" alt="Image"/>
                  <figcaption>
                    <div class="h4">Fin de la Guerra</div>
                    <p>El ministro de exteriores japonés Mamoru Shigemitsu firma el Acta de Rendición de Japón a bordo del USS Missouri el 2 de septiembre de 1945.</p>
                  </figcaption>
                </figure></a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/WW2/botadura.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">La salida</div>
                      <p>Margaret Truman en la botadura del Missouri</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/WW2/kamikaze.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Bajo ataque</div>
                      <p>Un kamikaze japonés (Zero) a punto de impactar al Missouri.</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane" id="GuerraFria" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-8"><p><h4>Guerra Fria - Guerra de Corea - Guerra de Irak</h4></p></div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/OtrasGuerras/canalPanama.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Rumbo al Mediterráneo</div>
                      <p>El Missouri cruzando el canal de Panamá, en ruta a los Estados Unidos, en octubre de 1945.</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/OtrasGuerras/reactivacion.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Reactivacion</div>
                      <p>Nuevos acontecimientos obligaron al Missouri y a sus compañeros de clase a volver al servicio activo durante la guerra fría, en los años 80</p>
                    </figcaption>
                  </figure></a>
              </div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                <figure class="cc-effect"><img src="images/OtrasGuerras/misilIrak.jpg" alt="Image"/>
                  <figcaption>
                    <div class="h4">Al ataque</div>
                    <p>Missouri lanzando un misil Tomahawk contra Irak.</p>
                  </figcaption>
                </figure></a>
            </div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/OtrasGuerras/Korea.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abriendo fuego</div>
                      <p>Missouri disparando sus cañones contra las tropas de Corea del Norte.</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/OtrasGuerras/retiradaServicio.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">El retiro</div>
                      <p>Tras la Guerra de Corea el Missouri y sus gemelos fueron retirados del servicio activo y pasaron a la reserva</p>
                    </figcaption>
                  </figure></a></div>
                  <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                    <figure class="cc-effect"><img src="images/OtrasGuerras/flota.jpg" alt="Image"/>
                      <figcaption>
                        <div class="h4">Volviendo a los mares</div>
                        <p>vista aérea de una fuerza táctica de la flota de los Estados Unidos, el U.S.S. Missouri en cabeza, a su popa el portaaviones U.S.S. Ranger y a su alrededor una docena de buques de escolta: cruceros, destructores y fragatas.</p>
                      </figcaption>
                    </figure></a>
                  </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane" id="Photography" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6"><p><h4>Buque museo</h4></p></div>
          </div>
          <div class="row">
          
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/Museo/lateralMuseo.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Buque Museo</div>
                      <p>Fotografía del Missouri en la actualidad, en Pearl Harbor, donde recibe miles de visitantes ansiosos de recorrer ese magnífico buque.</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/Museo/bateriaPrincipal.JPG" alt="Image"/>
                    <figcaption>
                      <div class="h4">Los cañones</div>
                      <p>Torretas de artillería, se puede apreciar claramente el impresionante tamaño de esos cañones.</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/Museo/museo.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Altos Honores</div>
                      <p>Marineros del USS Abraham Lincoln rindiendo honores al Arizona y al Missouri en Pearl Harbor, Hawái.</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/Museo/educacion.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Donde la historia cobra vida</div>
                      <p>Maestros y estudiantes aprenden sobre los 70 años de historia del acorazado</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="section" id="ClaseIowa">
  <div class="container cc-reference">
    <div class="h4 mb-4 text-center title">Clase Iowa</div>
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
        <ol class="carousel-indicators" >
          <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
          <li data-target="#cc-Indicators" data-slide-to="1"></li>
          <li data-target="#cc-Indicators" data-slide-to="2"></li>
          <li data-target="#cc-Indicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/IOWA/iowa.jpg" alt="Image"/>
                <div class="h6 pt-2">
                  <?php echo $barcosClaseIowa->Iowa;?> 
                </div>
              </div>
              <div class="col-lg-10 col-md-9">
                <p>
                  <ul>
                    <li>El USS Iowa (BB-61) fue encargado el 1 de julio de 1939, y se colocó la quilla el 27 de junio de 1940, botándose el 27 de agosto de 1942, y alistándose el 22 de febrero de 1943.</li>
                    <li>Navegó a la estación naval Argentia, en Newfoundland para contrarrestar al acorazado alemán Tirpitz.</li>
                    <li>Fue transferido a la flota del Pacífico, el Iowa tuvo su primer combate en la batalla de las Islas Marshall. </li>
                    <li>Estuvo presente en la batalla del golfo de Leyte. Durante la guerra coreana, el Iowa bombardeó blancos norcoreanos en Songjin, Hungnam, y Kojo, volvió a los Estados Unidos para mantenimiento y ejercicios de entrenamiento.</li>
                    <li>En 1999, Iowa fue colocado en la flota de reserva como reemplazo para el New Jersey. Borrado del Registro naval el 17 de marzo de 2006 el Iowa se encuentra atracado en la bahía de Suisun en San Francisco, hasta que se tome una decisión sobre las peticiones de convertir la nave en un buque museo.</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/IOWA/jersey.jpg" alt="Image"/>
                <div class="h6 pt-2">
                  <?php echo $barcosClaseIowa->NewJersey;?>
                </div>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> 
                  <ul>
                    <li>El USS New Jersey (BB-62) fue ordenado el 1 de julio de 1939, colocado en grada el 16 de septiembre de 1940, botado el 7 de diciembre de 1942, y alistado el 23 de mayo de 1943. </li>
                    <li>En los ataques a las islas Marshal y Gilbert, protegió a los portaaviones con su artillería antiaérea de los ataques japoneses.</li>
                    <li>En la batalla del golfo de Leyte, la nave protegió los portaaviones con sus armas antiaéreas, posteriormente bombardeó Iwo Jima y Okinawa.</li>
                    <li>Durante la guerra de corea, bombardeó blancos en Wonsan, Yangyang, y Kansong.</li>
                    <li>El Nueva Jersey estuvo en la línea de fuego en Vietnam del Sur durante 120 días.En es tiempo disparó 5.688 disparos de 16 pulgadas y 14.891 disparos de cinco pulgadas, mucho más de lo que disparó durante la Segunda Guerra Mundial y la Guerra de Corea juntas.</li>
                    <li>Desactivado por última vez el 8 de febrero de 1991, el New Jersey fue conservado brevemente en el Registro naval antes de ser donado a Home Port Alliance de Camden, Nueva Jersey para su uso como buque museo.</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/IOWA/wisconsin.jpg" alt="Image"/>
                <div class="h6 pt-2">
                  <?php echo $barcosClaseIowa->Wisconsin;?>
                </div>
              </div>
              <div class="col-lg-10 col-md-9">
                <p>
                  <ul>
                    <li>El USS Wisconsin (BB-64) fue encargado el 12 de junio de 1940, puesto en grada el 25 de enero de 1942, botado el 7 de diciembre de 1943, y dado de alta el 16 de abril de 1944. </li>
                    <li>Fue transferido a la flota del pacífico en 1944 y asignado para proteger a la flota de portaaviones de los Estados Unidos implicada en las operaciones de Filipinas.</li>
                    <li>Bombardeó la isla de Okinawa antes del asalto anfibio aliado.</li>
                    <li>A mediados 1945 el Wisconsin bombardea las islas principales japonesas, un trabajo que conservó hasta la entrega de Japón.</li>
                    <li>Reactivado en 1950 para la guerra coreana, el Wisconsin sirvió en dos viajes para apoyar a Corea del Sur y a las fuerzas de la O.N.U. proporcionando apoyo de artillería.</li>
                    <li>En 1991, participó en la guerra del Golfo disparando BGM-109 Tomahawk y disparando su artillería principal contra las formaciones iraquíes a lo largo de la costa.</li>
                    <li>Desarmado por la vez última el 30 de septiembre de 1991 el Wisconsin fue colocado en la flota de la reserva hasta que fue borrado del registro naval de buques.</li>
                    <li>Atracado en Norfolk (Virginia), hasta que finalice una transferencia formal del acorazado para su uso como buque museo.</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/IOWA/Kentucky.jpg" alt="Image"/>
                <div class="h6 pt-2">
                  <?php echo $barcosClaseIowa->Illinois;?> <br/>
                  <?php echo $barcosClaseIowa->Kentucky;?> 
                </div>
              </div>
              <div class="col-lg-10 col-md-9">
                <p>
                  USS Illinois
                  <ul>
                    <li>Nunca fue terminado, fue desechado en última instancia.</li>
                    <li>Fue encargado el 9 de septiembre de 1940 y se colocó en grada el 15 de enero de 1945. </li>
                    <li>La construcción fue cancelada el 11 de agosto de 1945 cuando el Illinois tenía un avance del 22	%.</li>
                    <li>Fue vendido para desguace en septiembre de 1958.</li>
                    <li>El diseño del Illinois se solicitó con un casco todo soldado con autógena, más ligero y resistente que el casco de las cuatro naves terminadas de la clase Iowa.</li>
                  </ul>
                </p>
                <hr/>
                <p> 
                  USS Kentucky
                  <br/>
                  <ul>
                    <li>El USS Kentucky BB-66 fue autorizado el 9 de septiembre de 1940 y su quilla se colocó el 6 de diciembre de 1944. </li>
                    <li>La construcción fue suspendida el 17 de febrero de 1947 con el Kentucky completo al 72%.</li>
                    <li>Fue botado informalmente el 20 de enero de 1950 para despejar el dique seco para las reparaciones del Missouri.</li>
                    <li>En última instancia, el Kentucky fue vendido a Metals Co. de Boston como chatarra el 31 de octubre de 1958. </li>
                    <li>Como el Illinois, el casco del Kentucky estaba construido todo soldado con autógena, más ligero y resistente que los cuatro Iowas finalizados, y se ofertó rediseñar el casco con un sistema de protección anti torpedos de la clase Montana, oferta que fue rechazada</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center">
        <a class="cc-facebook btn btn-link" href="https://www.facebook.com/Battleshipmissouri"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a>
        <a class="cc-twitter btn btn-link " href="https://twitter.com/USSMissouri"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a>
        <a class="cc-youtube btn btn-link" href="https://www.youtube.com/c/BattleshipMissouriMemorial63/featured"><i class="fa fa-youtube-square" aria-hidden="true"></i></i></a>
        <a class="cc-instagram btn btn-link" href="https://www.instagram.com/battleshipmissouri/"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">Buque Museo USS Missouri</div>
      
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>
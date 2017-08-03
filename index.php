<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ametriz | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="Resources/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="Resources/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="Resources/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="Resources/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="Resources/css/bootstrap-datepicker.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="Resources/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="Resources/css/theme-color/blue-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="Resources/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <?PHP
    include 'Resources/php/conexion.php';
    include 'Resources/php/template.php';
    session_start();
  include_once 'Resources/php/models/User.php';
  if(isset($_SESSION['user'])){
     $user = unserialize($_SESSION['user']);
     $name = $user->getNombre();
     var_dump($name);
  } else{

  }
    ?>
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="Resources/img/gif.png" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" style="background-color: <?PHP echo $backgroundcolor?> " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand" href="index.php"><img src="<?PHP echo $logo?>" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#">HOME</a></li>
            <li><a href="#">EVENTOS</a></li>
              <?PHP
                if(!isset($_SESSION['user'])){
                    echo "<li><a  data-toggle='modal' data-target='#myModalLogin' href='#'>INICIA SESIÓN</a></li>";
                }else{
                  echo
                  "<li class='dropdown'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$name." <span class='caret'></span></a>".
                      "<ul class='dropdown-menu' role='menu'>".
                        "<li><a href='#'>Eventos</a></li>".
                        '<li><a href="Resources/php/logout.php">Cerrar sesión</a></li>'.
                      "</ul>".
                    "</li>";
                }
              ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>
  <!-- End header section -->


  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area">
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="Resources/img/1.jpg" style="height:900px;" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Bienvenido</span>
            <h2 class="mu-slider-title">Ametriz</h2>
            <p>¿Sabías que existe una manera de incrementar tu creatividad e inventiva para que seas más innovador?</p>
            <a href="#" data-toggle="modal" data-target="#myModal"  class="mu-readmore-btn">Leer más</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="Resources/img/2.jpg" style="height:900px;" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Inovación</span>
            <h2 class="mu-slider-title">Ametriz</h2>
            <p>Aprende a pensar de una manera diferente y resuelve problemas que no creías tuvieran solución.</p>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="Resources/img/3.jpg" style="height:900px;" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Competitividad</span>
            <h2 class="mu-slider-title">Ametriz</h2>
            <p>¿Conoces tu entorno competitivo? Averigua cómo se mueve la industria en la que estás, toma decisiones con menor riesgo y anticípate a los cambios!</p>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">¡Descúbrenos!</span>
              <h2>Objetivos</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                 <p>Nuestra Mision: La difusion de la Teoria de la Solucion de Problemas de Inventiva (TRIZ) en Mexico, America Latina y toda la comunidad de habla hispana.</p>
                  <ul>
                    <li>Organizar una reunión nacional de periodicidad anual donde se discutirán los avances de las investigaciones y de los desarrollos tecnológicos del área de interés de la ASOCIACIÓN.</li>
                    <li>Difundir y procurar la implantación de las conclusiones y recomendaciones de las reuniones anuales.</li>
                    <li>Velar por la buena calidad de los trabajos científicos y tecnológicos que se desarrollen en México en este tema. Para ello la ASOCIACIÓN  avalará o descalificará, según el caso, todas aquellas actividades que de un modo u otro estén dentro del área de interés que ocupa a la ASOCIACIÓN.</li>
                    <li>Procurar la divulgación y la implantación de los resultados de las investigaciones en creatividad, innovación e inventiva realizadas en México, pugnando por la más alta calidad y rigor.</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">
                 <ul class="mu-abtus-slider">
                   <li><img src="Resources/img/about-us/abtus-img-1.jpg" height="400" alt="img"></li>
                   <li><img src="Resources/img/about-us/abtus-img-2.jpg" height="400" alt="img"></li>
                   <li><img src="Resources/img/about-us/abtus-img-3.jpg" height="400" alt="img"></li>
                   <li><img src="Resources/img/about-us/abtus-img-4.jpg" height="400" alt="img"></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
            <ul class="mu-counter-nav">
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Usuarios</span>
                  <h3><span class="counter">55</span><sup>+</sup></h3>
                  <p>Registrados</p>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Eventos</span>
                  <h3><span class="counter">130</span><sup>+</sup></h3>
                  <p>Vínculados</p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Cupones</span>
                   <h3><span class="counter">35</span><sup>+</sup></h3>
                  <p>Descuentos</p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>TRIZ</span>
                  <h3><span class="counter">71</span><sup>años</sup></h3>
                  <p>Fundación</p>
                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section -->


  <!-- Start Latest News -->
  <section id="mu-latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-news-area">
            <div class="mu-title">
              <span class="mu-subtitle">Últimos eventos</span>
              <h2>Más recientes</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-latest-news-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h3>
                    <figure class="mu-news-img">
                      <a href="#"><img src="Resources/img/news/1.jpg" alt="img"></a>
                    </figure>
                    <div class="mu-news-single-content">
                      <ul class="mu-meta-nav">
                        <li>By Admin</li>
                        <li>Date: May 10 2016</li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="mu-news-single-bottom">
                        <a href="Resources/views/blog-single.html" class="mu-readmore-btn">Read More</a>
                      </div>
                    </div>
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h3>
                    <figure class="mu-news-img">
                      <a href="#"><img src="Resources/img/news/2.jpg" alt="img"></a>
                    </figure>
                    <div class="mu-news-single-content">
                      <ul class="mu-meta-nav">
                        <li>By Admin</li>
                        <li>Date: May 10 2016</li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="mu-news-single-bottom">
                        <a href="Resources/views/blog-single.html" class="mu-readmore-btn">Read More</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <!-- Start brows more btn -->
              <a href="Resources/views/blog-archive.html" class="mu-browsmore-btn">Ver todos</a>
              <!-- End brows more btn -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest News -->

  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">
            <div class="mu-title">
              <span class="mu-subtitle">Nuestros profesionales</span>
              <h2>Organización</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-1.jpg" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Guillermo Cortés Robles.</h4>
                      <span>Presidente de la Asociación Mexicana de TRIZ.</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-2.jpg" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Miguel de Jesús Ramírez Cadena</h4>
                      <span>Vicepresidente y Director</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-3.png" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Guillermo Flores Téllez</h4>
                      <span>Secretarío General </span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-4.png" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Secretarío General</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-5.jpg" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Christian Signoret</h4>
                      <span>Secretario Tesorero</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-6.png" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Humberto Aguayo Téllez.</h4>
                      <span>Presidente Honorario</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-7.jpg" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Noel León Rovira.</h4>
                      <span>Presidente Honorario</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="Resources/img/chef/chef-8.jpg" height="250" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Dr. Edgardo Córdoba.</h4>
                      <span>Vicepresidente Honorario</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Mantente informado</span>
              <h2>Contáctanos</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Tu nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input type="text" class="form-control" id="subject" placeholder="Asunto">
                      </div>
                      <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea class="form-control" id="message" cols="30" rows="10" placeholder="Escribe tu mensaje"></textarea>
                      </div>
                      <button type="submit" class="mu-send-btn">Enviar mensaje</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Dirección de oficina</h3>
                      <p>Nonprofit Organization in Monterrey, Nuevo León, México</p>
                      <address>
                        <p><i class="fa fa-phone"></i> (850) 457 6688</p>
                        <p><i class="fa fa-envelope-o"></i>informes@ametriz.com</p>
                        <p><i class="fa fa-map-marker"></i>Monterrey Nuevo León</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Horario</h3>
                      <address>
                        <p><span>Lunes - Viernes</span> 9.00 am to 6 pm</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
<style>
#map {
       height: 100%;
     }
</style>
  <!-- Start Map section -->
  <section id="mu-map">
    <div id="map"  width="100%" height="100%" disabled frameborder="0"></div>
  </section>

  <script>
     var map;
     function initMap() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 25.6629636, lng: -100.3805247},
         scrollwheel: false,
         zoom: 12
       });
     }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPuJTnIlKExZgqIXM9GgbcoAZYJ6cZ3T4&callback=initMap" async defer></script>

  <!-- End Map section -->


  <!-- Modal Instructions -->
  <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ametriz</h4>
              </div>
              <div class="modal-body">
                  <p>TRIZ son las siglas de "Teoría de la Solución de Problemas de Inventiva",
                     y la Asociación Mexicana de TRIZ puede ayudarte a conocer las características
                      y bondades de usar y aplicar la Metodología TRIZ.</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
          </div>

      </div>
  </div>


  <!-- Modal login -->
  <div id="myModalLogin" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ametriz</h4>
              </div>
              <div class="modal-body">
                <h3>Inicia sesión</h3>
                <p>Ingresa tu usuario y contraseña</p>
                <form action="Resources/php/login.php" class="form-horizontal"  method="post" enctype="multipart/form-data">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" required name="email" placeholder="Email">
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" required name="password" placeholder="Contraseña">
                  </div>
                  <br>
                  <div class="input-group">
                    <input type="submit" class="btn btn-primary" value="Entrar" />
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <a style="float:left;"href="#"> ¿No cuentas con cuenta?</a>
                  <button type="button" style="float:right;" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
      </div>
  </div>




  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="https://www.facebook.com/pg/ametriz/"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>Powered by <a rel="nofollow" href="#">CIMAT MSI GEN.2017</a></p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- jQuery library -->
  <script src="Resources/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="Resources/js/bootstrap.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="Resources/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="Resources/js/waypoints.js"></script>
  <script type="text/javascript" src="Resources/js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="Resources/js/bootstrap-datepicker.js"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="Resources/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="Resources/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="Resources/js/custom.js"></script>

  </body>
</html>

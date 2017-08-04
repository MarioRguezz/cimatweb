
<?php

    include '../php/conexion.php';
    include '../php/template.php';
	include '../php/dbManejador.php';
	    session_start();
  include_once '../php/models/User.php';
  if(isset($_SESSION['user'])){
     $user = unserialize($_SESSION['user']);
     $name = $user->getNombre();
	 $idusuario = $user->getidUsuario();
     var_dump($name);
  } else{

  }
  if (isset($_POST['idevento'])) {
$evento = evento($_POST['idevento']);
}


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"           content="http://localhost/Cimat/Resources/views/evento.php" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Ametriz" />
      <meta property="og:description"   content="Conoce nuestros eventos" />
      <meta property="og:image"         content="http://www.ametriz.org/wp-content/uploads/2016/10/cropped-logo_ametriz_nuevo_011.png" />

    <title>Ametriz | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="../css/theme-color/blue-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="../css/style.css" rel="stylesheet">


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

  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="../img/gif.png" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
 <!-- Start header section -->
  <header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" style="background-color: <?php echo $backgroundcolor?> " role="navigation">
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
          <a class="navbar-brand" href="../../index.php"><img src="..<?php echo $logo?>" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#">HOME</a></li>
            <li><a href="eventopublico.php">EVENTOS</a></li>
              <?PHP
                if(!isset($_SESSION['user'])){
                    echo "<li><a  data-toggle='modal' data-target='#myModalLogin' href='#'>INICIA SESIÓN</a></li>";
                }else{
                  echo
                  "<li class='dropdown'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$name." <span class='caret'></span></a>".
                      "<ul class='dropdown-menu' role='menu'>".
                        "<li><a href='eventopublicoprivate.php'>MIS EVENTOS</a></li>".
                        '<li><a href="../php/logout.php">CERRAR SESIÓN</a></li>'.
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
  <!-- End header section -->

  <!-- Start Blog -->
  <section id="mu-blog" style="margin-top:30px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-blog-area">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="mu-blog-content mu-blog-details">
                  <!-- Start Single blog item -->
                  <article class="mu-news-single">
                    <h2><a href="#"><?php echo $evento[$nombre];?></a></h2>
                    <figure class="mu-news-img">
                      <a href="#"><img src="../imagenes/<?php echo $evento[$foto];?>" alt="img"></a>
                    </figure>
                    <div class="mu-news-single-content">
                      <ul class="mu-meta-nav">
                        <li><?php echo $evento[$fechainicio];?> al <?php echo $evento[$fechainicio];?></li>
                      </ul>
						<p><?php echo $evento[$descripcion];?></p>
                    </div>
                    <div class="mu-news-single-bottom">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mu-news-single-social">
                            <!-- Load Facebook SDK for JavaScript -->
                              <div id="fb-root"></div>
                              <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                                fjs.parentNode.insertBefore(js, fjs);
                              }(document, 'script', 'facebook-jssdk'));</script>

                              <!-- Your share button code -->
                              <div class="fb-share-button"
                                data-href="http://localhost/Cimat/Resources/views/evento.php"
                                data-layout="button_count">
                              </div>

                            <ul class="mu-news-single-socialnav">
                              <li>SHARE :</li>
                              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                              <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                              <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                          </div>

                        </div>

                      </div>
					  <?php
					    if(isset($_SESSION['user'])){
						?>

							<ul class="list-group">
								<li  style="text-align: left;" class="list-group-item list-group-item-success">Capacidad<span  class="badge"><?php echo $evento[$capacidad]?></span></li>
								<li style="text-align: left;"  class="list-group-item list-group-item-info">Participantes <span class="badge"><?php echo $evento[9]?></span></li> 
								<li style="text-align: left;"  class="list-group-item list-group-item-warning">Disponibles<span class="badge"><?php echo $evento[$capacidad]-$evento[9]; ?></span></li> 
							<ul>		        					  
 					  <?php
							if(($evento[$capacidad]-$evento[9])>0){
							?>

									  <button type="button" class="mu-send-btn" data-toggle="modal" data-target="#inscripcion-modal" data-inscripcion="<?php echo $evento[$idevento];?>">Inscripci&oacute;n</button>
			  
							<?php		
							}						
						} else{

						}
						?>			  												  

		  
                    </div>
                  </article>
                  <!-- End Single blog item -->
                </div>
                <!-- End Blog navigation -->
              </div>
              <!-- Start Blog Sidebar -->
              <div class="col-md-4 col-sm-4">
                <aside class="mu-blog-sidebar">
                  <!-- Blog Sidebar Single -->
                  <div class="mu-blog-sidebar-single">
                    <h3>Programa</h3>
                    <ul class="mu-catg-nav">
                      <li><a href="#">Titulo 1</a></li>
                      <li><a href="#">Titulo 2</a></li>
                      <li><a href="#">Titulo 3</a></li>
                      <li><a href="#">Titulo 4</a></li>
                      <li><a href="#">Titulo 5</a></li>
                      <li><a href="#">Titulo 6</a></li>
                      <li><a href="#">Titulo 7</a></li>
                    </ul>
                  </div>
                  <!-- End Blog Sidebar Single -->
                </aside>
              </div>
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog -->

<!-- Modal Inscripcion -->
    <div class="modal fade" id="inscripcion-modal" tabindex="-1" role="dialog" aria-labelledby="inscripcionModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Inscripci&oacute;n</h4>
                </div>
                <div class="modal-body">

                    <form id="inscripcionForm" enctype="multipart/form-data">

                        <input type="hidden" value="<?php echo $evento[$idevento]?>" id="idevento">
						<input type="hidden" value="<?php echo $idusuario?>" id="idusuario">

                        <div class="form-group">
                            <label for="nombre" class="form-control-label">Costo:</label>
        <input type="text" readonly class="form-control" id="nombre" name="nombre" value="<?php echo $evento[$precio]?>">
                            <span class="help-block" id="nombreError" />
                        </div>
						
						

                        <div id="success"></div>

                        <div class="form-group">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submite" id="buttonAccept" class="btn btn-primary">Aceptar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


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
                <form action="../php/login.php" class="form-horizontal"  method="post" enctype="multipart/form-data">
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

  <form style="display: hidden" method="POST" id="formReload">
        <input type="hidden" id="saved" name="saved" value="1"/>
		        <input type="hidden" id="idevento" name="idevento" value="<?php echo $evento[$idevento]?>"/>
    </form>
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
  <script src="../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="../js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="../js/waypoints.js"></script>
  <script type="text/javascript" src="../js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="../js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="../js/custom.js"></script>
    <script type="text/javascript">

	    function SuccessForm() {
        $("#formReload").submit();
    }
	
	$(document).ready(function(){
		$('#inscripcionForm').on('submit', function(e){
			e.preventDefault();
	
			var form_data = new FormData();
			
            var url = '../php/inscribirEvento.php';

			var idusuario = $("#idusuario").val();
			var idevento =  $("#idevento").val();

			form_data.append('idusuario', idusuario);
			form_data.append('idevento', idevento);

			$.ajax({
				url: url,
				type: "POST",
				data:form_data,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data){
					if(data == 1){
						alert("Te has inscrito satisfactoriamente.");
						SuccessForm();
					}
				}
			});

		});
	});
    </script>
  </body>
</html>

<!DOCTYPE html>

<!-- getting Content -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ametriz | Eventos</title>

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

</head>
<style>

 html, body, .container {
   height:100%;
 }
</style>

<body>
	<?php
	include("../php/dbManejador.php");
	$eventos = eventosInformacion();
  include '../php/template.php';
    session_start();
 include_once '../php/models/User.php';
if(isset($_SESSION['user'])){
   $user = unserialize($_SESSION['user']);
   $name = $user->getNombre();
   var_dump($name);
} else{

}
    ?>
    <!-- Navigation -->
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

	<div class="container" style="margin-top:100px;">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					EVENTOS
                </h1>
            </div>
        </div>
       
        <hr>

		 <?php
        if($eventos){
            foreach ($eventos as $evento) {
                ?>
                <div class="row">
                    <!-- Botones de funcion -->
                    <!-- Imagen  -->
                    	<div>Fecha: <?php echo $evento[$fechainicio];?></div>
                    <div class="col-md-3">
                        <img class="img-responsive img-hover" src="../imagenes/<?php echo $evento[$foto];?>" alt="">
                    </div>
                    <!-- Resto de contenido -->
                    <div class="col-md-9">
                        <h3>
                          <?php echo $evento[$nombre];?>
                        </h3>
                        <?php
                        $desc = explode("\r\n", $evento[$descripcion]);
                        foreach($desc as  $parrafo){
                        ?>
                            <p>
                            <?php
                            echo $parrafo;
                            ?>
                            </p>
                        <?php
                        }
                        ?>
                    </div>
                    <form action="../views/evento.php" method="post">
            					<a href="javascript:;" class="mu-readmore-btn" onclick="parentNode.submit();">Leer M&aacute;s...</a>
            					<input type="hidden" name="idevento" id="idevento" value="<?php echo $evento[$idevento];?>"/>
            				</form>
                </div>
                <hr>
                <?php
            }
        }
        ?>
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
                <a style="float:left;"href="Resources/views/createUser.php"> ¿No cuentas con cuenta?</a>
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

	  <script src="../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.js"></script>


    <script src="../js/bootstrapValidator.js"></script>
    <script src="../js/bootstrap-filestyle.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="../js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="../js/waypoints.js"></script>
  <script type="text/javascript" src="../js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <!-- Mixit slider -->
  <script type="text/javascript" src="../js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="../js/custom.js"></script>



</body>

</html>

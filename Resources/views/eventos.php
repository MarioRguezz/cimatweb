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
 include_once '../php/Models/User.php';
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
          <a class="navbar-brand" href="admin.php"><img src="../<?PHP echo $logo?>" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
					<li><a href="admin.php">HOME</a></li>
          <li><a href="cupon.php">CUPON</a></li>
          <?PHP
            if(!isset($_SESSION['user'])){
                echo "<li><a  data-toggle='modal' data-target='#myModalLogin' href='#'>INICIA SESIÓN</a></li>";
            }else{
              echo
              "<li class='dropdown'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$name." <span class='caret'></span></a>".
                  "<ul class='dropdown-menu' role='menu'>".
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
        <!-- Alertas -->
        <?php
        if (isset($_POST["saved"])) {
            if($_POST["saved"] == 1){
        ?>
       <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Su peticion se ha procesado correctamente.
        </div>
        <?php
            }elseif($_POST["saved"] == 2){
        ?>
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            El registro se ha eliminado correctamente.
        </div>
         <?php
            }
        }
        ?>

        <!-- Main button -->
        <div class="row">
            <div class="col-lg-12 text-right">
                <button type="button" class="mu-send-btn" data-toggle="modal" data-target="#evento-modal" data-id="<?php echo "nuevo"?>">Nuevo Evento</button>
            </div>
        </div>
        <hr>

		 <?php
        if($eventos){
            foreach ($eventos as $evento) {
                ?>
                <div class="row">
                    <!-- Botones de funcion -->
                    <div class="col-lg-12 text-right">

                        <button type="button" class="mu-send-btn" data-toggle="modal" data-target="#evento-modal" data-id="<?php echo $evento[$idevento];?>">Editar</button>
                        <button type="button" class="mu-send-btn" data-toggle="modal" data-target="#confirm-delete" data-delete="<?php echo $evento[$idevento];?>">Eliminar</button>

                    </div>
                    <!-- Imagen  -->
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
                </div>
                <hr>
                <?php
            }
        }
        ?>
    </div>


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


    <?php include("modalEvento.php");  ?>
	  <?php include("modalDelete.php");  ?>
   

</body>

</html>

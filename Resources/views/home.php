<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html lang="es">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">
    <title>Done-Index</title>
   <!-- <style type="text/css">-->
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
   <link rel="stylesheet" type="text/css" href="Resources/framework/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="Resources/css/estilos.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<script src="Resources/framework/js/bootstrap.min.js"></script>
   <!-- </style>-->
</head>
<body>
  <header>
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Desplegar / Ocultar Menú</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.jsp"><img src="Resources/img/x.jpg" width="60" height="20"></a>
  </div>

  <!-- Menú-->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.jsp">Link <span class="sr-only">(current)</span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Categoria 1</a></li>
            <li role="separator" class="divider"></li>
          <li><a href="#">Categoria 2</a></li>
          <li><a href="#">Categoria 3</a></li>
          <li><a href="#">Categoria 4</a></li>
        </ul>
      </li>
         <li><a href="#">Blog</a></li>
         <li><a href="#">Contacto</a></li>
    </ul>
    <form  action="Home.java" class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="buscar">
      </div>
      <button type="submit" class="mu-send-btn"> <span class="glyphicon glyphicon-search"> </span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  </header>
  <!-- jumbotron-->
  <section class="jumbotron">
    <div class="container">
      <h1 class="titulo-blog"> DONE </h1>
      <p>Tú tienes tus tareas, Nosotros tu tiempo </p>
    </div>
  </section>
  <section class="main container">
    <div class="row">
      <section class="posts col-md-9">
        <div class="miga-de-pan">
          <ol class="breadcrumb">
            <li> <a href="#"> Inicio   </a></li>
            <li> <a href="#"> Categorias    </a></li>
            <li class="active">  Diseño Web  </li>
          </ol>
        </div>
        <article class="post clearfix">
          <a href="#" class="thumb pull-left"> <img class="img-thumbnail" src="Resources/img/1441058489431.jpg" alt="">   </a>
          <h2 class="post-title"> <a href="#"> Inicia nuevos proyectos html 5 </a> </h2>
          <p> <span class="post-fecha"> 26 de Enero del 2015</span> por <span class="post-autor"><a href="#"> Carlos Arturo</a> </span> </p>
        </p>
        <p class="post-contenido text-justify">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam tempus est a odio feugiat, quis volutpat lacus ornare. Nulla porta ultrices gravida. Nulla facilisi. Donec congue metus eget tincidunt dictum. Sed a turpis eleifend, facilisis neque vel, egestas tortor. Maecenas ut orci pharetra, rhoncus enim at, facilisis magna. In vitae enim at tellus molestie molestie. Sed justo enim, elementum vitae eros id, cursus pretium dolor.


        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary"> Leer Mas </a>
           <a href="#" class="btn btn-success">Comentarios <span class="badge">20 </span> </a>
         </article>
          <article class="post clearfix">
          <a href="#" class="thumb pull-left"> <img class="img-thumbnail" src="Resources/img/1441058489431.jpg" alt="">   </a>
          <h2 class="post-title"> <a href="#"> Inicia nuevos proyectos html 5 </a> </h2>
          <p> <span class="post-fecha"> 26 de Enero del 2015</span> por <span class="post-autor"><a href="#"> Carlos Arturo</a> </span> </p>
        </p>
        <p class="post-contenido text-justify">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam tempus est a odio feugiat, quis volutpat lacus ornare. Nulla porta ultrices gravida. Nulla facilisi. Donec congue metus eget tincidunt dictum. Sed a turpis eleifend, facilisis neque vel, egestas tortor. Maecenas ut orci pharetra, rhoncus enim at, facilisis magna. In vitae enim at tellus molestie molestie. Sed justo enim, elementum vitae eros id, cursus pretium dolor.


        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary"> Leer Mas </a>
           <a href="#" class="btn btn-success">Comentarios <span class="badge">20 </span> </a>
         </article>
          <article class="post clearfix">
          <a href="#" class="thumb pull-left"> <img class="img-thumbnail" src="Resources/img/1441058489431.jpg" alt="">   </a>
          <h2 class="post-title"> <a href="#"> Inicia nuevos proyectos html 5 </a> </h2>
          <p> <span class="post-fecha"> 26 de Enero del 2015</span> por <span class="post-autor"><a href="#"> Carlos Arturo</a> </span> </p>
        </p>
        <p class="post-contenido text-justify">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam tempus est a odio feugiat, quis volutpat lacus ornare. Nulla porta ultrices gravida. Nulla facilisi. Donec congue metus eget tincidunt dictum. Sed a turpis eleifend, facilisis neque vel, egestas tortor. Maecenas ut orci pharetra, rhoncus enim at, facilisis magna. In vitae enim at tellus molestie molestie. Sed justo enim, elementum vitae eros id, cursus pretium dolor.


        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary"> Leer Mas </a>
           <a href="#" class="btn btn-success">Comentarios <span class="badge">20 </span> </a>
         </article>

         <nav>
          <div class="center-block">
            <ul class="pagination">
              <li class="disabled"><a href="#"> &laquo; <span class="sr-only"> Anterior </span> </a></li>
              <li class="active"><a href="#"> 1</a> </li>
              <li><a href="#"> 2</a> </li>
              <li><a href="#"> 3</a> </li>
              <li><a href="#"> 4</a> </li>
              <li><a href="#"> 5</a> </li>
               <li class="disabled"><a href="#"> &raquo; <span class="sr-only"> Siguiente </span> </a></li>
            </ul>
          </div>
         </nav>
      </section>
       <aside class="col-md-3 hidden-xs hidden-sm">
      <h4>Categorías </h4>
      <div class="list-group">
        <a  href="#" class="list-group-item active">Diseño Web </a>
         <a  href="#" class="list-group-item ">CSS </a>
          <a  href="#" class="list-group-item ">Elementos Web </a>
           <a  href="#" class="list-group-item ">Jquery </a>
            <a  href="#" class="list-group-item ">Recursos y Herramientas </a>
      </div>
      <h4>Articulos Recientes </h4>
      <a href="#" class="list-group-item">  <h4 class="list-group-item-heading">Inicia proyectos HTML5 más rápido con </h4>
        <p class="list-group-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam t.
  </p>
  </a>
  <a href="#" class="list-group-item">  <h4 class="list-group-item-heading">Inicia proyectos HTML5 más rápido con </h4>
        <p class="list-group-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam t.
  </p>
  </a>
  <a href="#" class="list-group-item">  <h4 class="list-group-item-heading">Inicia proyectos HTML5 más rápido con </h4>
        <p class="list-group-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam t.
  </p>
  </a>
  <a href="#" class="list-group-item">  <h4 class="list-group-item-heading">Inicia proyectos HTML5 más rápido con </h4>
        <p class="list-group-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus quam, ornare ac metus id, sodales fringilla velit. Quisque sit amet pretium diam, ac egestas libero. Etiam t.
  </p>
  </a>
   </aside>
     </div>


   </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <p> Mario Negrete itl </p>
       </div>
       <div class="col-xs-6">

            <ul class="list-inline text-right">
   <li><a href="#"> Inicio </a> </li>
   <li><a href="#"> Curso </a> </li>
   <li><a href="#"> Contacto </a> </li>
  </ul>
       </div>
    </div>
  </div>
  </footer>
<?php
echo "My first PHP script!";
header('Location: /Resources/views/x.html');
?>

</body>
</html>

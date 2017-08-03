<?PHP
  $conexion = conect();
  $plantilla = "SELECT * FROM plantilla";
  $background  = mysqli_query($conexion,$plantilla);
  $backgtroundrow = mysqli_fetch_array($background);
  $backgroundcolor = $backgtroundrow['background'];
  $logo = $backgtroundrow['logo'];
?>

<?PHP
  include '../../Resources/php/conexion.php';
  require_once '../../Resources/php/Models/User.php';
  $conexion = conect();
  $nombre = $_POST[name];
  $email = $_POST[email];
  $lastname =   $_POST[lastname];
  $password =   $_POST[password];
  $consulta = "INSERT INTO usuarios (tipo, nombre, apellido,correo,password) VALUES ('usuario', '$nombre', '$lastname','$email','$password');";

  if(mysqli_query($conexion,$consulta)){
    header('Location: ../../index.php');
  }

?>

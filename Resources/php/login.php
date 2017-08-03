<?PHP
  include '../../Resources/php/conexion.php';
  require_once '../../Resources/php/Models/User.php';
  $conexion = conect();
  $email = $_POST[email];
  $password =   $_POST[password] ;
  $query = "SELECT * FROM usuarios where correo ='".$email."' and password  ='".$password."'";
  $queryexecute  = mysqli_query($conexion,$query);
  $rowLogin = mysqli_fetch_array($queryexecute);
  $user = new User($rowLogin[2],$rowLogin[3],$rowLogin[4],$rowLogin[1], $rowLogin[0]);
  $_SESSION['user'] =serialize($user);
  if($user->getTipo() == "administrador" ){
    header('Location: ../../Resources/views/admin.php');
  }else{
    header('Location: ../../index.php');
  }

?>

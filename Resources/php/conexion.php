<?PHP
error_reporting(0);

session_start();
function  conect($host = "localhost:3306", $user = "root", $psw = "", $db = "ametriz"){
	$con = mysqli_connect($host,$user,$psw, $db) or die ("Error de la conexión MySQL");
    mysqli_set_charset($con,'utf8');
	if (!$con){
	}
	return $con;
}

function desconectarBD($con){
	mysqli_close($con);
}

function logout(){
//  unset($_SESSION['tipoP']);
  session_destroy();
}


?>

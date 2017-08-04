<?php
//EVENTOS
$idevento = 0;
$nombre = 1;
$fechainicio = 2;
$fechafin = 3;
$descripcion = 4;
$foto = 5;
$capacidad = 6;
$precio = 8;

function eventosInformacion(){

	include("conexion.php");
	$mysqli = conect();
	if(!$mysqli->connect_error){

		$query = "SELECT * FROM eventos ORDER by fecha_inicio";
		$res = $mysqli->query($query);
		if($res){
			$NF = $res->num_rows;
			for($i=0; $i <$NF; $i++){
				$arreglo[$i] = $res->fetch_row();
			}
		}
		$res->close();
		$mysqli->close();
		return $arreglo;
	}else{
		return "sin conexion";
	}
}

function eventosInformacionprivada(){

	include("conexion.php");
	$mysqli = conect();
  $array = array();
include_once '../php/models/User.php';
if(isset($_SESSION['user'])){
 $user = unserialize($_SESSION['user']);
 $idusuario = $user->getidUsuario();
} else{

}
	if(!$mysqli->connect_error){
$query = "SELECT * FROM usuario_evento WHERE iidusuario = '".$idusuario . "'";
$queryexecute  = mysqli_query($mysqli,$query);

$rowLogin = mysqli_fetch_array($queryexecute);

foreach($rowLogin as $row){
	var_dump($row[0]);
	$query2 = "SELECT * FROM eventos  WHERE idevento = '".$row[2] . "'";
	$queryexecute2 = mysqli_query($mysqli,$query2);
	$rowLogin2 = mysqli_fetch_array($queryexecute2);
	array_push($array,$rowLogin2);
}
		$mysqli->close();
		return $arreglo;
	}else{
		return "sin conexion";
	}
}


function eventosInformacionLimit(){

	$mysqli = conect();
	if(!$mysqli->connect_error){
		$query = "SELECT * FROM eventos ORDER BY fecha_inicio ASC LIMIT 4";
		$res = $mysqli->query($query);
		if($res){
			$NF = $res->num_rows;
			for($i=0; $i <$NF; $i++){
				$arreglo[$i] = $res->fetch_row();
			}
		}
		$res->close();
		$mysqli->close();
		return $arreglo;
	}else{
		return "sin conexion";
	}
}


function obtenerEventoInfo(){

	include("conexion.php");
	$mysqli = conect();
	if(!$mysqli->connect_error){
		$query = "SELECT * FROM eventos WHERE idevento = ".$_POST['id']."";
		$res = $mysqli->query($query);
        $datos = $res->fetch_row();
		$res->close();
		$mysqli->close();
		return 	$datos;
	}else{
		return "sin conexion";
	}
}

function evento($idevento){
	echo $idevento." sf";
	$mysqli = conect();
	if(!$mysqli->connect_error){
		$query = "SELECT * FROM eventos WHERE idevento = '$idevento'";
		$res = $mysqli->query($query);
        $datos = $res->fetch_row();
		$res->close();
		$mysqli->close();
		return 	$datos;
	}else{
		return "sin conexion";
	}
}

function actualizarEvento(){
	include("conexion.php");
	$mysqli = conect();
    if(!$mysqli->connect_error){
        $idevento = $_POST['id'];
		$nombre = $_POST['nombre'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $descripcion = $_POST['descripcion'];
		$capacidad = $_POST['capacidad'];
		$precio = $_POST['precio'];

		$query = "UPDATE `eventos` SET `nombre`='$nombre',`fecha_inicio`='$fechaInicio',`fecha_fin`='$fechaFin',`descripcion`='$descripcion',`capacidad`='$capacidad',`precio`= '$precio' WHERE `idevento` = '$idevento'";
        $result = $mysqli -> query($query);

		if(validate_upload_empty("fotografia") != 4){
            $upload = upload_file("fotografia",$id);

            $fotografia = $upload;

            $queryImage = "UPDATE `eventos` SET `foto` = '$fotografia' WHERE `idevento` = '$idevento'";
            $resultImage = $mysqli -> query($queryImage);
        }

        $mysqli->close();
        return $result;
    }else{
        return 5;
    }
}

function insertarEvento(){
	include("conexion.php");
	$mysqli = conect();
    if(!$mysqli->connect_error){
		$nombre = $_POST['nombre'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $descripcion = $_POST['descripcion'];
		$capacidad = $_POST['capacidad'];
		$precio = $_POST['precio'];

		$query = "INSERT INTO `eventos` (`nombre`,`fecha_inicio`,`fecha_fin`,`descripcion`,`capacidad`,`precio`)
		VALUES ('$nombre','$fechaInicio','$fechaFin','$descripcion','$capacidad','$precio')";
        $result = $mysqli -> query($query);
        $id = $mysqli -> insert_id;

		if(validate_upload_empty("fotografia") != 4){
            $upload = upload_file("fotografia",$id);

            $fotografia = $upload;

            $queryImage = "UPDATE `eventos` SET `foto` = '$fotografia' WHERE `idevento` = '$id'";
            $resultImage = $mysqli -> query($queryImage);
        }
        $mysqli->close();
        return $result;
    }else{
        return 5;
    }
}

function validate_upload_empty($name){
	if(!isset($_FILES[$name])) {
		return 4;
	}
}

function upload_file($file,$id){
	$target_dir = "../imagenes/";
	$target_file = $target_dir.basename($_FILES[$file]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_dir.$id.".".$imageFileType)){
		return $id.".".$imageFileType;
    }
}

function eliminarEvento(){
	include("conexion.php");
	$mysqli = conect();
	if(!$mysqli->connect_error){
		$query = "DELETE FROM eventos WHERE idevento = ".$_POST['idEventoDelete'];
		$res = $mysqli->query($query);
		$mysqli->close();
		return 	$res;
	}else{
		return 5;
	}
}

?>

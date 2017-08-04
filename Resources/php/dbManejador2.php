<?php
//EVENTOS
$idcupon = 0;
$nombre = 1;
$descuento = 2;
$cve_cupon = 3;

function eventosInformacion(){

	include("conexion.php");
	$mysqli = conect();
	$arreglo = null;
	if(!$mysqli->connect_error){

		$query = "SELECT * FROM cupones";
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

function obtenerCuponInfo(){

	include("conexion.php");
	$mysqli = conect();
	if(!$mysqli->connect_error){
		$query = "SELECT * FROM cupones WHERE idcupon = ".$_POST['id']."";
		$res = $mysqli->query($query);
        $datos = $res->fetch_row();
		$res->close();
		$mysqli->close();
		return 	$datos;
	}else{
		return "sin conexion";
	}
}

function actualizarCupon(){
	include("conexion.php");
	$mysqli = conect();
    if(!$mysqli->connect_error){
        $idcupon = $_POST['id'];
		$nombre = $_POST['nombre'];
        $descuento = $_POST['descuento'];
        $cve_cupon = $_POST['cve_cupon'];
		$query = "UPDATE `cupones` SET `nombre`='$nombre',`descuento`='$descuento',`cve_cupon`='$cve_cupon' WHERE `idcupon` = '$idcupon'";
        $result = $mysqli -> query($query);
        $mysqli->close();
        return $result;
    }else{
        return 5;
    }
}

function insertarCupon(){
	include("conexion.php");
	$mysqli = conect();
    if(!$mysqli->connect_error){
			$idcupon = $_POST['id'];
			$nombre = $_POST['nombre'];
			var_dump($_POST['descuento']);
			$descuento = $_POST['descuento'];
			$cve_cupon = $_POST['cve_cupon'];
		$query = "INSERT INTO `cupones` (`nombre`,`descuento`,`cve_cupon`)
		VALUES ('$nombre','$descuento','$cve_cupon')";
        $result = $mysqli -> query($query);
        $id = $mysqli -> insert_id;
        $mysqli->close();
        return $result;
    }else{
        return 5;
    }
}




function eliminarCupon(){
	include("conexion.php");
	$mysqli = conect();
	if(!$mysqli->connect_error){
		$query = "DELETE FROM cupones WHERE idcupon = ".$_POST['idEventoDelete'];
		$res = $mysqli->query($query);
		$mysqli->close();
		return 	$res;
	}else{
		return 5;
	}
}

?>

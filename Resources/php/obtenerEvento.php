<?php
include("dbManejador.php");
$contenido = obtenerEventoInfo();
$miArray = array(
    "idevento"=>$contenido[$idevento],
    "nombre"=>$contenido[$nombre],
    "fecha_inicio"=>$contenido[$fechainicio],
    "fecha_fin"=>$contenido[$fechafin],
	"descripcion"=>$contenido[$descripcion],
	"capacidad"=>$contenido[$capacidad],
	"precio"=>$contenido[7]
    );
echo json_encode($miArray);
?>
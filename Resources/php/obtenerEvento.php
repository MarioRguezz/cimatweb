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
	"precio"=>$contenido[$precio]
    );
echo json_encode($miArray);
?>
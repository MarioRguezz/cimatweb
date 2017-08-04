<?php
include("dbManejador2.php");
$contenido = obtenerCuponInfo();
$miArray = array(
    "idcupon"=>$contenido[$idcupon],
    "nombre"=>$contenido[$nombre],
    "descuento"=>$contenido[$descuento],
    "cve_cupon"=>$contenido[$cve_cupon],
    );
echo json_encode($miArray);
?>

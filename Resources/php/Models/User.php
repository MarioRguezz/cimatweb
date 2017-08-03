<?php
class User
{
    // Declaración de una propiedad
    public $nombre;
    public $apellido;
    public $correo;
    public $tipo;
    public $idusuario;



    function __construct($n, $ap, $ema, $tipo,$id) {
        $this->nombre = $n;
        $this->apellido = $ap;
        $this->correo = $ema;
        $this->tipo = $tipo;
        $this->idusuario = $id;
   }

    // Declaración de un método
    public function getNombre() {
        return $this->nombre;
    }

    // Declaración de un método
    public function setNombre($n) {
        $this->nombre = $n;
    }

    // Declaración de un método
    public function getApellido() {
        return $this->apellido;
    }

    // Declaración de un método
    public function setApellido($n) {
        $this->apellido = $n;
    }

    // Declaración de un método
    public function getEmail() {
        return $this->correo;
    }

    // Declaración de un método
    public function setEmail($e) {
        $this->correo = $e;
    }

    // Declaración de un método
    public function getTipo() {
        return $this->tipo;
    }

    // Declaración de un método
    public function setTipo($e) {
        $this->tipo = $e;
    }

    // Declaración de un método
    public function getidUsuario() {
        return $this->idusuario;
    }

    // Declaración de un método
    public function setidUsuario($p) {
        $this->idusuario = $p;
    }


}
?>

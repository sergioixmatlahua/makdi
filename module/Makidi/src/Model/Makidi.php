<?php
namespace Makidi\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Makidi
 *
 * @author Sergio
 */
class Makidi {
    //put your code here
    public $idusuario;
    public $nombre;
    public $appaterno;
    public $apmaterno;
    public $edad;   
    public $telefono;
    public $correo;
    public $direccion;
    public $foto;
    public $contrasenia;
    
    public function exchangeArray(array $data){
        $this->idusuario = !empty($data['idUsuario']) ? $data['idUsuario'] : null;
        $this->nombre = !empty($data['nombre']) ? $data['nombre'] : null;
        $this->appaterno = !empty($data['apellidoP']) ? $data['apellidoP'] : null;
        $this->apmaterno = !empty($data['apellidoM']) ? $data['apellidoM'] : null;
        $this->edad = !empty($data['edad']) ? $data['edad'] : null;
        $this->telefono = !empty($data['telefono']) ? $data['telefono'] : null;
        $this->correo = !empty($data['correo']) ? $data['correo'] : null;
        $this->direccion = !empty($data['direccion']) ? $data['direccion'] : null;
        $this->foto = !empty($data['foto']) ? $data['foto'] : null;
        $this->contrasenia = !empty($data['contrasenia']) ? $data['contrasenia'] : null;
        
        
    }
}

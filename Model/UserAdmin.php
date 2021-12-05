<?php
class User{
    // POO: Programación Orientada a Objetos
    private $id_tipo_documento;
    private $nombre_tipo_documento;
    private $nombre;
    private $apellido;
    private $telefono;
    private $contraseña;
    private $validarcontraseña;
    private $estadoUsuario = false;

    public function __construct(){}

    // Métodos Getters Y setters
    #id_tipo_documento
    public function getIdTipoDocumento(){
    return $this->id_tipo_documento;
    }
    public function setIdTipoDocumento($id_tipo_documento){
        $this->id_tipo_documento = $id_tipo_documento;
    }
    #nombre_tipo_documento
    public function getNombreTipoDocumento(){
    return $this->nombre_tipo_documento;
    }
    public function setNombreTipoDocumento($nombre_tipo_documento){
        $this->nombre_tipo_documento = $nombre_tipo_documento;
    }
    #nombre
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;

    }
    #apellido
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    #telefono
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    #email
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    #Contraseña
    public function getContraseña(){
        return $this->contraseña;
    }
    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }
    #Validar contraseña
    public function getValidarContraseña(){
        return $this->validarcontraseña;
    }
    public function setValidarContraseña($validarcontraseña){
        $this->validarcontraseña = $validarcontraseña;
    }
// 2da Parte - Logica de Negocio (Casos de uso -> Interactúan con BBDD)
#Iniciar Sesion
public function iniciarSesion(){

}
#Registrar (Crear) Usuario
public function registrar(){

}
#Consultar Usuarios
public function listar(){

}
#Actualizar Usuarios
public function actualizar(){

}
#Eliminar Usuarios
public function eliminar(){

}
#Cerrar Sesión
public function cerrarSesion(){

}

}
?>
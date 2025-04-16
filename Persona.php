<?php

//Creo la clase persona y sus atributos
    class Persona{
      private $nombre;
      private $apellido;
      private $direccion;
      private $mail;
      private $telefono;
      
     

 //Metodo constructor(crea objetos de la clase persona

    public  function __construct ($nombre,$apellido,$direccion,$mail,$telefono)
    {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->direccion=$direccion;
    $this->mail=$mail;
    $this->telefono=$telefono;
 }

 // Metodo get (permite obtener el valor de los atributos)
    
    public function getNombre()
    {
        return  $this->nombre;
    } 
    public function getApellido()
    {
         return  $this->apellido;
    }
    public  function getDireccion()
    {
        return $this->direccion;
    }
    public  function getMail()
    {
        return $this->mail;
    }
  
    public  function getTelefono()
    {
        return $this->telefono;
    }
    
    
    
 // Metodo set permite establecer los valores de los atributos
      
      public function setNombre($nombre)
      {
          $this->nombre = $nombre;
      }
       

      public function setApellido($apellido)
      {
          $this->apellido = $apellido;
      }
      public function setDireccion($direccion)
      {
          $this->direccion= $direccion;
      }
       
      public function setMail($mail)
      {
          $this->mail = $mail;
      }  
      public function setTelefono($telefono)
      {
          $this->telefono = $telefono;
      }  

      
     // Método __toString() para convertir el objeto en una cadena
      
      
     // Método __toString() para imprimir la información del objeto
      public function __toString() 
      {
          $mensaje="Nombre y Apellido : ".$this->getNombre() . $this->getApellido() . "\n" .
                   "Direccion: " . $this->getDireccion() . "\n" .
                   "Direccion de email:". $this->getMail() . "\n".
                   "Número de telefono: " . $this->getTelefono() . "\n" ;
                  
          return $mensaje;
      }
}
?>
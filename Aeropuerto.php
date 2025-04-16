<?php
//En la clase Aeropuerto 

//Se registra la siguiente información: denominación, dirección y la colección de aerolíneas que arriban a el*/

class Aeropuerto
{
 
    private $denominacion;
    private $direccion;
    private $colAerolineasArriban;

 public function __construct($denominacion, $direccion, $colAerolineasArriban)
    {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->colAerolineasArriban = $colAerolineasArriban;
    }

    //Metodos de acceso

    public function getDenominacion()
    {
        return $this->denominacion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getColAerolineas()
    {
        return $this->colAerolineasArriban;
    }
//los seters
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setColAerolineas($colAerolineasArriban)
    {
        $this->colAerolineasArriban = $colAerolineasArriban;
    }
    public function __toString()
    {
        return "Denominacion: " . $this->getDenominacion() .
            "\nDireccion: " . $this->getDireccion() .
            "\nAerolineas: " . $this->mostrarAerolineas() . "\n";
    }

    private function mostrarAerolineas()
    {
        $coleccion = $this->getColAerolineas();
        $texto = "No se han cargado empresas.\n";
        $cantidad = count($coleccion);
        for ($i = 0; $i < $cantidad; $i++) {
                $texto = $texto . $coleccion[$i];
            }
        return $texto;
    }



}
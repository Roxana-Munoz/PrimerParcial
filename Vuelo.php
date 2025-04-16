<?php
/*/En la clase Vuelo:

Se registra la siguiente información: número, importe, fecha, destino, hora arribo, hora partida, cantidad asientos totales y disponibles, y una referencia a la persona responsable del vuelo. 

Se cuenta con la implementación de:

 un Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
los métodos de acceso de cada uno de los atributos de la clase.*/
//En la clase Vuelo se debe implementar el método asignarAsientosDisponibles que recibe por parámetros la cantidad de asientos que desean asignarse y de ser necesario actualizando la información del vuelo.
//El método retorna verdadero en caso que la asignación puedo concretarse y falso en caso contrario.
//la clase Vuelo:

//Se registra la siguiente información: número, importe, fecha, destino, hora arribo, hora partida, cantidad asientos totales y disponibles, y una referencia a la persona responsable del vuelo. 

class Vuelo{
    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $horaArribo;
    private $horaPartida;
    private $cantidadAsientosTotales;
    private $cantidadAsientosDisponibles;
    private $personaResponsable;


//un Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.

public  function __construct ($numero,$importe,$fecha,$destino, $horaArribo, $horaPartida, $cantidadAsientosTotales,$cantidadAsientosDisponibles,$personaResponsable)
{
$this->numero= $numero;
$this->importe= $importe;
$this->fecha=$fecha;
$this->destino= $destino;
$this->horaArribo= $horaArribo;
$this->horaPartida=$horaPartida;
$this->cantidadAsientosTotales= $cantidadAsientosTotales;
$this->cantidadAsientosDisponibles= $cantidadAsientosTotales;
$this->personaResponsable=$personaResponsable;


}
//los métodos de acceso de cada uno de los atributos de la clase.*/

//LOS GETERS
public function getNumero(){
    return $this->numero;
}

//Obtiene el valor de 
public function getImporte(){
    return $this->importe;
}

//Obtiene el valor de 
public function getFecha(){
    return $this->fecha;
}

//Obtiene el valor de 
public function getDestino(){
    return $this->destino;
}

public function getHoraArribo(){
    return $this->horaArribo;
}

//Obtiene el valor de 
public function getHoraPartida(){
    return $this->horaPartida;
}

//Obtiene el valor de 
public function getCantidadAsientosTotales(){
    return $this->cantidadAsientosTotales;
}

//Obtiene el valor de 
public function getCantidadAsientosDisponibles(){
    return $this->cantidadAsientosDisponibles;
}
public function getPersonaResponsable(){
    return $this->personaResponsable;
}
//LOS SETERS
//Setea el valor de 
public function setNumero($numero){
    $this->numero = $numero;
}

//Setea el valor de 
public function setImporte($importe){
    $this->importe = $importe;
}

//Setea el valor de 
public function setFecha($fecha){
    $this->fecha = $fecha;
}
public function setDestino($destino){
     $this->destino= $destino;
}

//Setea el valor de 
public function setHoraArribo($horaArribo){
    $this->horaArribo = $horaArribo;
}

//Setea el valor de 
public function setHoraPartida($horaPartida){
    $this-> horaPartida= $horaPartida;
}

//Setea el valor de 
public function setCantidadAsientosTotales($cantidadAsientosTotales){
    $this-> cantidadAsientosTotales= $cantidadAsientosTotales;
}

//Setea el valor de 
public function setCantidadAsientosDisponibles($cantidadAsientosDisponibles){
    $this->cantidadAsientosDisponibles = $cantidadAsientosDisponibles;
}

//Setea el valor de 
public function setPersonaResponsable($personaResponsable){
    $this-> personaResponsable= $personaResponsable;
}
//Metodo __toString

    
        public function __toString()
        {
            return "Numero: " . $this->getNumero() . 
                   "\nImporte: " . $this->getImporte() . 
                   "\nFecha: " . $this->getFecha() . 
                  "Destino: " . $this->getDestino() . 
                   "\nHora de arribo: " . $this->getHoraArribo() . 
                   "\nHora de partida: " . $this->getHoraPartida() . 
                 "\nCantidad de asientos totales: " . $this->getCantidadAsientosTotales() . 
                 "\nCantidad de asientos ocupados: " . $this->getCantidadAsientosDisponibles() . 
                 "\nPersona responsable: " . $this->getPersonaResponsable() . "\n";
        }
    //implementar el método asignarAsientosDisponibles que recibe por parámetros la cantidad de asientos que desean asignarse y de ser necesario actualizando la información del vuelo.
//El método retorna verdadero en caso que la asignación puedo concretarse y falso en caso contrario.
//la clase Vuelo:
        public function asignarAsientosDisponibles($cantAsientos){
            $exito = false;
            $cantDisp = $this->getCantidadAsientosDisponibles();
            if ($cantDisp-$cantAsientos>0){
                $exito =true;
                $cantDisponibles =$cantDisp-$cantAsientos;
                $this->setCantidadAsientosdisponibles($cantDisponibles);
            }           
            return $exito;
    
        }

}
?>




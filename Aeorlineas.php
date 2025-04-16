<?php

/*/En la clase Aerolíneas se registra la siguiente información: identificación, nombre y la colección de vuelos programados.*/
class Aerolineas{

    private $identificacion;
    private $nombre;
    private $colVuelosProgramados;

    public function __construct($identificacion, $nombre, $colVuelosProgramados)
    {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->colVuelosProgramados = $colVuelosProgramados;
    }

    //Metodos de acceso

    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getColeccionVuelosProgramados()
    {
        return $this->colVuelosProgramados;
    }

    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setColVuelosProgramados($colVuelosProgramados)
    {
        $this->colVuelosProgramados = $colVuelosProgramados;
    }

    //Otros metodos
    public function __toString()
    {
        return "Identificacion: " . $this->getIdentificacion() .
            "\nNombre: " . $this->getNombre() .
            "\nVuelos: " . $this->mostrarVuelos() . "\n";
    }

    private function mostrarVuelos()
    {
        $coleccionVuelos = $this->getColeccionVuelosProgramados();
        $texto = "No se han cargado viajes.\n";
        $cantidad = count($coleccionVuelos);
        for ($i = 0; $i < $cantidad; $i++) {
                $texto = $texto . $coleccionVuelos[$i];
            }
        }    
        //Se debe implementar el método  darVueloADestino que recibe por parámetro un destino junto a una cantidad de asientos libres y se debe retornar una colección con los vuelos disponibles a ese destino.*/

        public function darVueloADestino($elDestino, $cantAsientos)
        {
            $coleccionVuelos = $this->getColeccionVuelosProgramados();
            $vuelosAlDestino = array();
            for ($i=0; $i<count($coleccionVuelos);$i++){
                $unViaje = $coleccionVuelos[$i];
             
                if ($unViaje->getDestino()==$elDestino && $unViaje->getCanidadtAsientosDisponibles()>=$cantAsientos)
                {
                            $vuelosAlDestino[] =$unViaje;
    
                }
            }  return $vuelosAlDestino;
        } 

        /*/Implementar en la clase Aerolinea el método incorporarVuelo que recibe como parámetro un vuelo, verifica que no se encuentre registrado ningún otro vuelo al mismo destino, en la misma fecha y con el mismo horario de partida.
           El método debe retornar verdadero si la incorporación del vuelo se realizó correctamente y falso en caso contrario.
          */

        public function incorporarVuelo($nuevoVuelo)
        {
            $coleccionVuelos = $this->getColeccionVuelosProgramados();
            $encontro = false;
            $exito = false;
            $i =0;
            while ($i<count($coleccionVuelos) && !$encontro){
                $unVuelo = $coleccionVuelos[$i];
                if ($unVuelo->getDestino() == $nuevoVuelo->getDestino()
                        &&
                    $unVuelo->getFecha() == $nuevoVuelo->getFecha()
                        &&
                    $unVuelo->getHoraPartida() == $nuevoVuelo->getHoraPartida()){
                   
                        $encontro =true;
                }
                $i++;
            }        
            if (!$encontro){
                $coleccionVuelos[]=$nuevoVuelo;
                $this->setColVuelosProgramados($coleccionVuelos);
                $exito = true;
            }
           return $exito;
        }
        /*/Implemente en la clase Aerolinea  el método venderVueloADestino, que recibe por parámetro: la cantidad de asientos, el destino y una fecha. El método realiza la venta con el primer vuelo encontrado a ese destino, con los asientos disponibles y en la fecha deseada. 
           En la implementación debe invocar al método asignarAsientosDisponibles y retornar la instancia del vuelo asignado o null en caso contrario.Texto de la respuesta
           Editor de texto enriquecido*/

        public function venderVueloADestino($cantAsientos, $destino, $fecha){
            $coleccionVuelos = $this->getColeccionVuelosProgramados();
            $vueloAsignado = null;
            $encontro = false;
            $i =0;
            while ($i<count($coleccionVuelos) && !$encontro){
                $unVuelo = $coleccionVuelos[$i];
                if ($unVuelo->getDestino() == $destino && $unVuelo->getFecha() == $fecha){
                     $haydispo = $unVuelo->asignarLugaresDisponibles($cantAsientos);
                     if ($haydispo){
                        $encontro =true;
                        $vueloAsignado = $unVuelo;
                     }
                     
                }    
                 $i++;            
            } 
             
            return $vueloAsignado;
        }
         //En la clase Aerolínea  se debe implementar el método  montoPromedioRecaudado que retorna el importe promedio recaudado por la aerolínea con cada uno de sus vuelos.
        public function montoPromedioRecaudado(){
            $totalRecaudado = 0;
            $coleccionVuelos = $this->getColeccionVuelosProgramados();
            $cantidadVuelos = count($coleccionVuelos);
            for ($i = 0; $i<$cantidadVuelos; $i++){
                $unVuelo= $coleccionVuelos[$i];
                $totalRecaudado = $totalRecaudado + ($unVuelo->getImporte() * 
                            ($unVuelo->getCantidadAsientosTotales()-$unVuelo->getCantidadAsientosDisponibles()));
                $totalPromedioRecaudado=$totalRecaudado/$cantidadVuelos;
                }
            return $totalPromedioRecaudado;
        }
        //Implementar el método ventaAutomatica que recibe por parámetro la cantidad de asientos, una fecha y un destino y el aeropuerto realiza automáticamente la asignación al vuelo. 
        public function ventaAutomatica($cantAsientos, $fecha, $destino, $aeropuerto)
        {
            $vueloVendido = $aeropuerto->venderVueloDestino($cantAsientos, $destino, $fecha);
            return $vueloVendido;
        }
        //Implementar en la clase Aeropuerto el método promedioRecaudadoXAerolinea,  que recibe por parámetro la identificación de una Aerolínea y retorna el promedio de lo recaudado por esa Aerolínea en ese Aeropuerto.
        
          public function promedioRecaudadoXAerolinea($idAerolinea){
             return 
          }      
            }
    
    
    
    } 
    
    

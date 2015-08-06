<?php 

/**
 * Modelo de tabla articulo
 */
class Articulo extends Eloquent{
    protected $table = 'articulo';

    /**
     * Obtiene todos los servicios
     * @return object
     */
    public function Obtener_servicios(){
        return DB::select('CALL articulo_Obtener_servicios()');
    }

}
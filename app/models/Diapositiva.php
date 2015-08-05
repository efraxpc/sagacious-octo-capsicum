<?php 

/**
 * Modelo de tabla articulo
 */
class Diapositiva extends Eloquent{
    protected $table = 'diapositiva';

    /**
     * Obtiene todos los textos de las diapositivas, con imagenes
     * @return object
     */
    public function Obtener_textos_con_imagenes(){
        return DB::select('CALL diapositiva_Obtener_textos_con_imagenes()');
    }

}
<?php

class PaginaController extends BaseController {

    /* Mostrar pagina de inicio
	 * @return callback
	 */
    public function mostrar_inicio(){
        return View::make('home');
    }

    /**
     * Obtiene textos e imagenes de diapositivas
     * @return object
     */
    public function api_obtener_textos_imagenes_diapositivas(){
        //$sTextoBuscador = Input::get('sTextoBuscador');
        $oDiapositiva = new Diapositiva();
        $oResultado = $oDiapositiva->Obtener_textos_con_imagenes();
        return Response::json(array('oResultado' => $oResultado));
    }

    /**
     * Obtiene articulos e imagenes de servicios
     * @return object
     */
    public function api_obtener_articulos_imagenes_servicios(){
        $oArticulo = new Articulo();
        $oResultado = $oArticulo->Obtener_servicios();
        return Response::json(array('oResultado' => $oResultado));
    }
}

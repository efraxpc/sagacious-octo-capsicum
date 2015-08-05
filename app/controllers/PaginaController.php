<?php

class PaginaController extends BaseController {

    /* Mostrar pagina de inicio
	 * @return callback
	 */
    public function mostrar_inicio(){
        return View::make('home');
    }

    public function api_obtener_textos_diapositivas(){
        //$sTextoBuscador = Input::get('sTextoBuscador');
        $oDiapositiva = new Diapositiva();
        $oResultado = $oDiapositiva->Obtener_textos_con_imagenes();
        return Response::json(array('oResultado' => $oResultado));
    }
}

var app = angular.module('app',["ngRoute"]);

// configure our routes
app.config(function($routeProvider) {
    $routeProvider

    // route for the home page
        .when('/', {
        templateUrl : 'angular/front/templates/inicio.php',
        //controller  : 'InicioController'
    })
        .when('/la-empresa', {
        templateUrl : 'templates/categoria.php',
        controller  : 'InicioController'
    })
        .otherwise({
        redirectTo: '/'
    }); 
});



app.controller('InicioController', function($scope,$http) {
    /**
     * Obtener textos e imagenes de una diapositiva
     */
    $scope.obtener_textos_e_imagenes_diapositiva = function() {
        $http.get('api-obtener-textos-imagenes_diapositivas').
        success(function(data, status, headers, config) {
            $scope.diapositiva = data.oResultado;
            //console.log($scope.diapositiva);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    };


    /**
     * Obtener articulos e imagenes de servicios
     */
    $scope.obtener_articulos_e_imagenes_servicios = function() {
        $http.get('api-obtener-articulos-imagenes-servicios').
        success(function(data, status, headers, config) {
            $scope.servicio = data.oResultado;
            console.log($scope.servicio);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    };
});
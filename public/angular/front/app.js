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
    $scope.obtener_textos_e_imagenes_diapositiva = function() {
        $http.get('api-obtener-textos-diapositivas').
        success(function(data, status, headers, config) {
            $scope.diapositiva = data.oResultado;
            console.log($scope.diapositiva);
        }).
        error(function(data, status, headers, config) {
            // log error
        });
    };
});
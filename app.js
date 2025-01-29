var app = angular.module("metalixxApp", ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/home", {
        templateUrl: "home.html"
    })
    .when("/productos", {
        templateUrl: "productos.html"
    })
    .when("/contacto", {
        templateUrl: "contacto.html"
    })
    .otherwise({
        redirectTo: "/home"
    });
});

app.controller("MainController", function($scope) {
    // Puedes agregar funcionalidades adicionales aquí si es necesario
});

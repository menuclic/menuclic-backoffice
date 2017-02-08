angular.module('menuclic_services', [])
    .service('User', ['$http', '$q', User])
;

var menuclic = angular.module('menuclic', ['menuclic_services'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
.controller('LoginController', ['$scope', 'User', LoginController])
;
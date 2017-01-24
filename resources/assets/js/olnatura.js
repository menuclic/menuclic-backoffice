angular.module('olnatura_services', [])
    .service('User', ['$http', '$q', User])
;

var olnatura = angular.module('olnatura', ['olnatura_services'])
        .controller('LoginController', ['$scope', 'User', LoginController])
;
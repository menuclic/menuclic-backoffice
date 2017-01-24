function User($http, $q) {
    return {
        login: function (user) {
            var defer = $q.defer();

            $http.post('/api/login', user)
                .then(function (data, status) {
                    defer.resolve(data);
                }, function (data) {
                    defer.reject(data);
                });

            return defer.promise;
        },
    }
}
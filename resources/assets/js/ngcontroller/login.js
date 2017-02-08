function LoginController ($scope, User) {
    $scope.errorMessage = null;
    $scope.busy = false;

    $scope.login = function () {
        $scope.busy = true;
        User.login($scope.user).then(function(data) {
            $scope.busy = false;
            location.href = '/';
        }, function (data) {
            $scope.busy = false;
            if (data.status === 401) {
                $scope.errorMessage = 'El nombre de usuario o contraseña es incorrecto, favor de intentar nuevamente.';
            }
        });
    }
}
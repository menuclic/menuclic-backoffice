function LoginController ($scope, User) {
    $scope.login = function () {
        User.login($scope.user).then(function(data) {
            console.log(data);
        });
    }
}
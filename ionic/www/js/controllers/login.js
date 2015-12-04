angular.module('starter.controllers', [])
    .controller('LoginCtrl', ['$scope', 'OAuth', function ($scope, OAuth) {

        $scope.user = {
            username: '',
            password: ''
        };

        $scope.login = function () {
            OAuth.getAccessToken($scope.user)
                .then(function (data) {
                    // success
                    console.log('Login Funcionando');
                }, function (responseError) {
                    // failed
                });
        }
    }]);
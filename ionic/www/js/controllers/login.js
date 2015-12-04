angular.module('starter.controllers', [])
    .controller('LoginCtrl', [
        '$scope', 'OAuth', '$cookies', function ($scope, OAuth, $cookies) {

        $scope.user = {
            username: '',
            password: ''
        };

        $scope.login = function () {
            OAuth.getAccessToken($scope.user)
                .then(function (data) {
                    // success
                    console.log(data);
                    console.log($cookies.getObject('token'));
                }, function (responseError) {
                    // failed
                });
        }
    }]);
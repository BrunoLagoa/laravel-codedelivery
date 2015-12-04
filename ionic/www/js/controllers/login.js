angular.module('starter.controllers', [])
    .controller('LoginCtrl', [
        '$scope', 'OAuth', '$cookies', '$ionicPopup', function ($scope, OAuth, $cookies, $ionicPopup) {

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
                    $ionicPopup.alert({
                        title: 'Advertência',
                        template: 'Login e/ou senha inválidos'
                    });
                    console.debug(responseError);
                });
        }
    }]);
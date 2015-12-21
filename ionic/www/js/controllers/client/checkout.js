angular.module('starter.controllers')
    .controller('ClientCheckoutCtrl', [
        '$scope', 'OAuth', '$ionicPopup','$state', function ($scope, OAuth, $ionicPopup, $state) {

        $scope.user = {
            username: '',
            password: ''
        };

        $scope.login = function () {
            OAuth.getAccessToken($scope.user)
                .then(function (data) {
                    // success
                    $state.go('home');
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
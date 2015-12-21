angular.module('starter.controllers')
    .controller('LoginCtrl', [
        '$scope', 'OAuth', '$ionicPopup', '$ionicLoading', '$state', function ($scope, OAuth, $ionicPopup, $ionicLoading, $state) {

        $scope.user = {
            username: '',
            password: ''
        };

        $scope.login = function () {
            $ionicLoading.show({
                template: 'Carregando...'
            });
            OAuth.getAccessToken($scope.user)
                .then(function (data) {
                    // success
                    $ionicLoading.hide();
                    $state.go('home');
                }, function (responseError) {
                    // failed
                    $ionicPopup.alert({
                        title: 'Advertência',
                        template: 'Login e/ou senha inválidos'
                    });
                    console.debug(responseError);
                    $ionicLoading.hide();
                });
        }
    }]);
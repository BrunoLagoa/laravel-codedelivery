angular.module('starter.controllers')
    .controller('ClientViewProductCtrl', [
        '$scope', '$state', 'Product', '$ionicLoading', function ($scope, $state, Product, $ionicLoading) {
            $scope.products = [];
            $ionicLoading.show({
                template: 'Carregando...'
            });

            Product.query({}, function (data) {
                $scope.products = data.data;
                $ionicLoading.hide();
            }, function(dataError){
                $ionicLoading.hide();
            });
        }]);
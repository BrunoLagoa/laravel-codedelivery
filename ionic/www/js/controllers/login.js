angular.module('starter.controllers', [])
    .controller('LoginCtrl', ['$scope', function ($scope) {
        $scope.login = function(){
            alert('Login funcionando');
        }
    }]);
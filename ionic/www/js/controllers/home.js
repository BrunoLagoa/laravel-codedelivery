angular.module('starter.controllers',[]).
    controller('HomeCtrl',function($scope,$state,$stateParams){
        $scope.state = $state.current;
        $scope.nome = $stateParams.nome;
    });
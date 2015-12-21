angular.module('starter.controllers')
    .controller('ClientViewProductCtrl', [
        '$scope', '$state', 'appConfig', '$resource',  function ($scope, $state, appConfig, $resource) {

        var product = $resource(appConfig.baseUrl + '/api/client/products',{},{
            query: {
                isArray: false
            }
        });
        product.query();

    }]);
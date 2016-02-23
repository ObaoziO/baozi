// Add your javascript (AngularJS) here
var littleApp = angular.module('littleApp', []);

littleApp.factory('itemsFactory', ['$http', function($http){
  var itemsFactory ={
    itemDetails: function() {
      return $http(
      {
        url: "data.json",
        method: "GET",
      })
      .then(function (response) {
        return response.data.inventory;
        });
      }
    };
    return itemsFactory;
}]);


littleApp.controller('ListCtrl',
['$scope', 'itemsFactory', function($scope, itemsFactory){
  var promise = itemsFactory.itemDetails();

    promise.then(function (data) {
        $scope.itemDetails = data;

    });
    $scope.select = function(item) {
      $scope.selected = item;
    }
    $scope.selected = {};

}]);

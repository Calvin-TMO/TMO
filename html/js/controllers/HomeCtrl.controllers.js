var tmoApp = angular.module('tmo');

tmoApp.controller('HomeCtrl', function ($scope, $http) {
  $http.get("pages/tutees.php")
  .then(function (response) {$scope.names = response.data.records;});
});

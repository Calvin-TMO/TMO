var tmoApp = angular.module('tmo');

tmoApp.controller('CreateCtrl', function ($scope, $http, $timeout, $filter) {

  $scope.selected = $scope.students[0];

  $scope.students = [
    {id: 1, name: 'Benjamin Braker'},
    {id: 2, name: 'Carson Wiens'},
    {id: 3, name: 'Mark VanderStel'}
  ];

  $scope.date = $filter("date")(Date.now(), 'yyyy-MM-dd');

  $scope.submitForm = function() {
    if($scope.tutorForm.$valid) {
      alert("Form submitted");
    } else {
      alert("Missing information! Please complete the form");
    }
  }

});

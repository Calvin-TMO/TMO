/**
 *
 * Responsive website using AngularJS
 * http://www.script-tutorials.com/responsive-website-using-angularjs/
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Script Tutorials
 * http://www.script-tutorials.com/
 */

'use strict';

var myApp = angular.module('tmo');

// optional controllers
function HomeCtrl($scope, $http) {
  $http.get("pages/tutees.php")
  .then(function (response) {$scope.tutees = response.data.records;});
}

function SectionCtrl($scope, $http) {
  $http.get("pages/sections.php")
  .then(function (response) {$scope.sections = response.data.records;});
}

function ReportCtrl($scope, $http, $timeout) {
  $http.get("pages/reports.php")
  .then(function (response) {$scope.reports = response.data.records;});
}

function CreateCtrl($scope, $http, $timeout, $filter) {

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
  };

}

function AccountCtrl($scope, $http, $timeout) {
}

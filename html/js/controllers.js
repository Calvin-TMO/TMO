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

  $scope.searchFilter = '';
}

function CreateCtrl($scope, $http, $timeout, $filter) {

  $http.get("pages/tutees.php")
  .then(function (response) {$scope.Students = response.data.records;});

  $http.get("pages/sections.php")
  .then(function (response) {$scope.Classes = response.data.records;});

  $scope.date = $filter("date")(Date.now(), 'yyyy-MM-dd');

  $scope.submitForm = function() {
    if($scope.createForm.$valid) {

      $scope.reportData = {
        "studentid" : $scope.studentid,
        "courseid": $scope.courseid,
        "submitdate" : $scope.date,
        "starttime" : $scope.startTime,
        "endtime" : $scope.endTime,
        "topic" : $scope.topic,
        "response" : $scope.response,
        "plans" : $scope.plans,
        "studentplans" : $scope.studentplans,
        "comments" : ($scope.comments === undefined ? "" : $scope.comments)
      };

      $http.post("pages/postReport.php", $scope.reportData);

      alert("Form submitted");
      location.href = "#!/reports";
    } 
  };

}

function ViewCtrl($scope, $http, $routeParams) {
  $scope.reportid = $routeParams.reportid;
  $http.get('pages/getReport.php')
  .then(function (response) { $scope.reports = response.data.records;});
}

function AccountCtrl($scope, $http, $timeout) {
}

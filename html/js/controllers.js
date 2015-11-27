﻿/**
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
}

function SectionCtrl($scope, $http) {
}

function ReportCtrl($scope, $http, $timeout) {
}

function CreateCtrl($scope, $http, $timeout, $filter) {

  $scope.data = {
    studentList: null,
    students: [
      {id: '1', name: 'Benjamin Braker'},
      {id: '2', name: 'Carson Wiens'},
      {id: '3', name: 'Mark VanderStel'}
    ],
  };

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

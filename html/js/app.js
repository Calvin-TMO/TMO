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

// angular.js main app initialization
var app = angular.module('tmo', []).
    config(['$routeProvider', function ($routeProvider) {
      $routeProvider.
        when('/', { 
          templateUrl: 'pages/tutees.html',
          controller: HomeCtrl,
          activetab: 'tutees' }).
        when('/sections', {
          templateUrl: 'pages/sections.html',
          controller: SectionCtrl,
          activetab: 'sections' }).
        when('/reports', {
          templateUrl: 'pages/reports.html',
          controller: ReportCtrl,
          activetab: 'reports' }).
        when('/create', {
          templateUrl: 'pages/create.html',
          controller: CreateCtrl,
          activetab: 'create' }).
        when('/view/:reportid', {
          templateUrl: 'pages/view.html',
          controller: ViewCtrl,
          activetab: 'reports' }).
        when('/account', {
          templateUrl: 'pages/account.html',
          controller: AccountCtrl,
          activetab: 'account'
        }).
        otherwise({ redirectTo: '/' });
    }]).run(['$rootScope', '$http', '$browser', '$timeout', "$route", function ($scope, $http, $browser, $timeout, $route) {

        $scope.$on("$routeChangeSuccess", function (scope, next, current) {
          $scope.part = $route.current.activetab;
        });
    }]); 
app.config(['$locationProvider', function($location) {
    $location.hashPrefix('!');
}]);


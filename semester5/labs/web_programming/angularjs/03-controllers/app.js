// create AngularJS module
var app = angular.module("myApp", []);
// Creates an AngularJS application named: myApp

// create controller
app.controller("StudentController", function ($scope) {
  $scope.name = "";  // $scope is like a bridge between JavaScript and HTML.
  $scope.age = "";
  $scope.college = "";
})

/*
JavaScript
     │
$scope
     │
HTML
*/

app.controller("NameController", function ($scope) {
  $scope.first = "";
  $scope.last = "";
})
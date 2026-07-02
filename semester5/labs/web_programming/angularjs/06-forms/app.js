var app = angular.module("myApp", []);

app.controller("MainController", function($scope){

    // ng-model
    $scope.name = "";

    // ng-submit
    $scope.submitMessage = "";

    $scope.submitForm = function(){
        $scope.submitMessage =
        "Welcome " + $scope.username;
    };


    // ng-disabled
    $scope.disableButton = false;


    // ng-readonly
    $scope.readOnly = false;
    $scope.text = "AngularJS Forms";


    // ng-checked
    $scope.checked = true;

    $scope.toggleCheck = function(){
        $scope.checked = !$scope.checked;
    };


    // ng-change
    $scope.course = "";
    $scope.courseMessage = "";

    $scope.courseChanged = function(){
        $scope.courseMessage =
        "Selected Course : " + $scope.course;
    };

});
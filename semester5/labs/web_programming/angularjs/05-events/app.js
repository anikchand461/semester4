var app = angular.module("myApp", []);

app.controller("MainController", function($scope){

    // ng-click
    $scope.count = 0;

    $scope.increase = function(){
        $scope.count++;
    };


    // ng-change
    $scope.message = "";

    $scope.changed = function(){
        $scope.message = "Input Changed";
    };


    // ng-submit
    $scope.submitMessage = "";

    $scope.submitForm = function(){
        $scope.submitMessage =
        "Welcome " + $scope.username;
    };


    // ng-keyup
    $scope.typingMessage = "";

    $scope.keyUp = function(){
        $scope.typingMessage =
        "Typing : " + $scope.typing;
    };


    // ng-keydown
    $scope.keyDownMessage = "";

    $scope.keyDown = function(){
        $scope.keyDownMessage =
        "Key Pressed";
    };


    // mouse
    $scope.hover = false;

});
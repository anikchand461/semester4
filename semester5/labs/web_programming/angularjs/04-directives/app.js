var app = angular.module("myApp", []);

app.controller("MainController", function ($scope) {

    // ng-model
$scope.name = "";
    $scope.college = "";

    // ng-repeat
    $scope.subjects = [
        "HTML",
        "CSS",
        "JavaScript",
        "AngularJS",
        "React"
    ];

    // ng-click
    $scope.count = 0;

    $scope.increase = function () {
        $scope.count++;
    };

});
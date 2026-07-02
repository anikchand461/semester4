var app = angular.module("myApp", []);

app.controller("MainController", function($scope){

    $scope.user = {};

    $scope.message = "";

    $scope.submitForm = function(){

        if($scope.myForm.$valid){
            $scope.message = "Form Submitted Successfully";
        }
        else{
            $scope.message = "Please Fill Valid Details";
        }

    };

});
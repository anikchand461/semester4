var app = angular.module("myApp", []);

app.controller("MainController", function($scope, $http){

    $scope.users = [];

    // GET
    $scope.getUsers = function(){

        $http.get("https://jsonplaceholder.typicode.com/users")

        .then(function(response){

            $scope.users = response.data;

        });

    };


    // POST
    $scope.postMessage = "";

    $scope.addUser = function(){

        var user = {

            name:"Anik",
            email:"anik@gmail.com"

        };

        $http.post(
            "https://jsonplaceholder.typicode.com/users",
            user
        )

        .then(function(response){

            $scope.postMessage =
            "User Added Successfully";

        });

    };


    // PUT
    $scope.putMessage = "";

    $scope.updateUser = function(){

        var user = {

            id:1,
            name:"Updated User"

        };

        $http.put(
            "https://jsonplaceholder.typicode.com/users/1",
            user
        )

        .then(function(response){

            $scope.putMessage =
            "User Updated Successfully";

        });

    };


    // DELETE
    $scope.deleteMessage = "";

    $scope.deleteUser = function(){

        $http.delete(
            "https://jsonplaceholder.typicode.com/users/1"
        )

        .then(function(response){

            $scope.deleteMessage =
            "User Deleted Successfully";

        });

    };

});
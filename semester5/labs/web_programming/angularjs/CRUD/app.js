var app = angular.module("myApp", []);

app.controller("MainController", function ($scope) {
  $scope.task = "";
  $scope.todos = [];

  // add task 
  $scope.addtask = function() {
    if ($scope.task.trim() == "") {
      return;
    }
    $scope.todos.push({
      title : $scope.task,
      completed: false,
      editing : false
    })

    $scope.task = "";
  }

  // update
  $scope.edittask = function (todo) {
    todo.editing = true;
  }

  $scope.savetask = function (todo) {
    todo.editing = false;
  }
  
  // delete task 
  $scope.deletetask = function (index) {
    $scope.todos.splice(index, 1); // splice works like ... splice(1, 1) -> start at index 1 and remove 1 ement from there 
  }

  //stats 
  $scope.completedcount = function () {
    let count = 0;
    for (let i = 0; i < $scope.todos.length; i++) {
      if ($scope.todos[i].completed) {
        count++;
      }
    }
    return count;
  }
  
});
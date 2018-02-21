var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {

    $scope.listTasks = {};

    $scope.getAllLists = function() {
        $http.get("todo/getAllLists")
            .then(response => {
                $scope.lists = response.data;
                angular.forEach($scope.lists, function(list) {

                    $data = new Array();
                    $data.id = list.list_id;

                    $scope.getListTasks($data);

                })
        console.log($scope.listTasks);
            })

    }

    $scope.getAllLists();

    $scope.getListTasks = function(data) {
        var id = data.id;
        $http.post("todo/getListTasks/" + id)
            .then(response => {
                $scope.listTasks[id] = response.data;
            })
    }

})

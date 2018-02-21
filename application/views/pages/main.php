<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/angular.js"></script>
        <script src="assets/js/angular-route.js"></script>
        <script src="assets/js/angular-sanitize.js"></script>
        <script src="assets/js/app.js"></script>
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
        <div class="container-flex">
            <div class="row">
                <div class="col-md-3 col-md-offset-1" ng-repeat="list in lists">
                    <div style="border: 1px solid black;">
                        <h1>{{list.list_name}}</h1>
                        <div style="1px solid gray;" ng-repeat="task in listTasks[list.list_id]">
                            <p>Title: {{task.task_title}}</p>
                            <p>{{task.task_description}}</p>
                            <p>Status: {{task.task_status}}</p>
                            <p>Tijd ingeplanned: {{task.task_duration}}</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


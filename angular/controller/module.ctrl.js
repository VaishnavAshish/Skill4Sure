angular.module("starter")
    .controller("moduleCtrl", function ($http, $rootScope) {
        var module = this;

        var req = {
            method: 'POST',
            url: "http://localhost/skill4sure/_api/",
            data: { Selectedmodule: $rootScope.selectedModule.id }
        };

        $http(req).then(
            function (response) {

            },
            function (error) { console.log(error); }
        );




    })
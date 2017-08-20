angular.module("starter")
    .controller("moduleCtrl", function ($http, $rootScope, $stateParams) {
        var module = this;
        var req = {
            method: 'POST', 
            url: "http://localhost/skill4sure/_api/",
            data: { Selectedmodule:$stateParams.module_id }
        };

        $http(req).then(
            function (response) {
                    module.data = response.data[0];

            },
            function (error) { console.log(error); }
        );




    })
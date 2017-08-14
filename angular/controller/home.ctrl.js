angular.module("starter")
    .controller("homeCtrl", function ($http, $rootScope, $state) {
        var home = this;
        var req = {
            method: 'POST',
            url: "http://localhost/skill4sure/_api/",
            data: { module: "true" }
        };

        $http(req).then(
            function (response) {
                home.data = [];
                for (var i = 0; response.data.length != 0;) {
                    home.data.push(response.data.splice(0, 3));
                    if (response.data.length > 3) { i += 3; } else { i += response.data.length; }
                }
            },
            function (error) { console.log(error); }
        );



        home.selectedModule = function (module) {
            //ab module me wo data h jo user ne select kya h
            $rootScope.selectedModule = module;
            $state.go("module");
        }


    })
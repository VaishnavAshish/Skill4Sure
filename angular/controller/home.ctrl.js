angular.module("starter")
    .controller("homeCtrl", function ($http) {
        var home = this;
        var req = {
            method: 'POST',
            url: "http://localhost/skill4sure/_api/",
            data: { module: "true" }
        };

        $http(req).then(
            function (response) { home.data = response.data },
            function (error) { console.log(error); }
        )
    })
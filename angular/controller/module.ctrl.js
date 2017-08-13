angular.module("starter")
    .controller("moduleCtrl", function ($http) {
        var home = this;
        var req = {
            method: 'POST',
            url: "http://localhost/api_skill4sure/",
            headers: {
                'Access-Control-Allow-Origin': "*"
            },
            data: { module: "true" }
        };

        $http(req).then(
            function (response) { module.data = response.data },
            function (error) { console.log(error); }
        )

    })
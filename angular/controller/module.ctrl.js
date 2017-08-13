angular.module("starter")
    .controller("moduleCtrl", function ($http) {
        var module = this;
        var req = {
            method: 'POST',
            url: "http://localhost:8080/api/",
            data: { module: "true" }
        };

        $http(req).then(
            function (response) { module.data = response.data },
            function (error) { console.log(error); }
        )

    })
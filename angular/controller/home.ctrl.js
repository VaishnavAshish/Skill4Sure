angular.module("starter")
    .controller("homeCtrl", function ($http) {
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
        )
    })
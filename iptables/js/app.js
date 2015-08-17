angular.module('iptablesApp', [])
    .controller('banCtrl', function($scope) {
        $scope.bans = [];
        $scope.addBan = function() {
            $scope.bans.push($scope.ip);
            $scope.ip = '';
            document.getElementById("ban-input").focus();
        };
    });

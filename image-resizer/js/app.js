angular.module('resizeImagesApp', [])
    .controller('resizeImagesCtrl', function($scope) {

        // When Dynamic Image is loaded, remove the loader
		var loadedImage = document.getElementById('loadedImage'),
			progress = document.getElementById('progress');

		loadedImage.onload = function () {
		   progress.innerHTML = '';
		   loadedImage.setAttribute("style", "display:block");
	     };

        $scope.resizeImage = function() {

            // Hide Image
            loadedImage.setAttribute("style", "display:none");

            var url = $scope.url,
                width = $scope.width,
                height = $scope.height;

                // Loading...
                progress.innerHTML = '<div class="progress"><div class="indeterminate"></div></div>';

                //remove HTTPS or HTTP
                url = url.replace('https://','').replace('http://','');

                // Photon Jetpack URL (server 1 or 0)
                $scope.resizedImage = "http://i" + Math.round(Math.random()) +  ".wp.com/" + url + "?strip=all&resize=" + width + "," + height;

        };// END resizeImage function

    }); // END controller

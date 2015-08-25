// The damn mobile menu
$(document).ready(function() {
    $(".button-collapse").sideNav();
});

function getPhotos(){
    var row = document.getElementById('mainrow');

    // Loading
    row.innerHTML = '<h3>Loading...</h3><div class="progress"><div class="indeterminate"></div></div><!-- .progress -->';

    var xhr = new XMLHttpRequest();
    xhr.open('GET', encodeURI('ajax.php'));
    xhr.onload = function() {
        if (xhr.status === 200) {
            row.innerHTML = xhr.response;
        }
        else {
            console.log('AJAX - Something went wrong');
            console.log(xhr.status);
        }
    };
    xhr.send();
}

// After page load

getPhotos();

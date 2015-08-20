var xhr = new XMLHttpRequest();
xhr.open('GET', encodeURI('ajax.php'));
xhr.onload = function() {
    if (xhr.status === 200) {
        var row = document.getElementById(mainRow);
        row.innerHTML = xhr.response;
    }
    else {
        console.log('AJAX - Something went wrong');
        console.log(xhr.status);        
    }
};
xhr.send();

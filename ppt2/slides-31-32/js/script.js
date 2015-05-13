function addContent() {
    var div = document.getElementById('content');
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                div.innerHTML = (xhr.responseText);
            } else {
                alert('Error');
            }
        }
    };
    xhr.open("GET","remote.html");
    xhr.send(null);
}
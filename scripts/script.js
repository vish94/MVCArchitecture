var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
    }
};
var domain = window.location.hostname;
var page = window.location.href;
xmlhttp.open("GET", "https://analytics-vish94-1.c9users.io/update?name="+domain+"&page="+page, true);
xmlhttp.send();

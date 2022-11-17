var xmlHttp;
function showSkiTrack(str) {
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser ne podržava xmlHttpRequest");
        return;
    }
    var url = "showTrack.php";
    url = url + "?id=" + str;
    //ne dozvoli keširanje
    url = url + "&sid=" + Math.random();
    //obrada promene stanja objekta xmlHttpRequest
    xmlHttp.onreadystatechange = stateChange;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}
function stateChange() {
    if (xmlHttp.readyState == 4) {
        document.getElementById("fill").innerHTML = xmlHttp.responseText;
    }
}
function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        //Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

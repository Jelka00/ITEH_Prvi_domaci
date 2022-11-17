var xmlHttp
function check(str) {
    xmlHttp = GetXmlHttpObject()
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request")
        return
    }

    var url = "check.php"
    url = url + "?track_name=" + str
    url = url + "&sid=" + Math.random()
    xmlHttp.onreadystatechange = stateChanged
    xmlHttp.open("GET", url, true)
    xmlHttp.send(null)
}
function stateChanged() {

    if (xmlHttp.readyState == 4) {

        if (xmlHttp.responseText == "0") {
            document.getElementById("user").innerHTML = "Staza sa takvim imenom već postoji u bazi";
            document.getElementById("name").focus();
        } else {
            document.getElementById("user").innerHTML = "Naziv staze je dostupan";
        }

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


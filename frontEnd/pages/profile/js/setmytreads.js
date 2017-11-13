function showforumsdata() {
    var str = "set";
    if (str == "") {
        document.getElementById("mytreads").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mytreads").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "php/mytreds.php?data=" + str, true);
    xmlhttp.send();
}
function setinterest1() {
    var str = "set";
    if (str == "") {
        document.getElementById("interestone").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("interestone").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "php/interest1.php?dataone=" + str, true);
    xmlhttp.send();
}
function setinterest2() {
    var str = "set";
    if (str == "") {
        document.getElementById("interesttwo").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("interesttwo").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "php/interest2.php?datatwo=" + str, true);
    xmlhttp.send();
}
function setinterest3() {
    var str = "set";
    if (str == "") {
        document.getElementById("interestthree").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("interestthree").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "php/interestthree.php?datathree=" + str, true);
    xmlhttp.send();
}
function setfieldset() {
    var str = "set";
    if (str == "") {
        document.getElementById("allfieldset").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("allfieldset").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "php/fieldset.php?fieldset=" + str, true);
    xmlhttp.send();
}
function setmyinterest() {
    var str = "set";
    if (str == "") {
        document.getElementById("myinterest").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("myinterest").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "php/allinterestdata.php?fieldset=" + str, true);
    xmlhttp.send();
}
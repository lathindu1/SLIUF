
function showforums(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
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
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "php/getforum.php?q=" + str, true);
    xmlhttp.send();
}


function showfields() {
    var str="field_set";
    if (str == "") {
        document.getElementById("fieldset").innerHTML = "";
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
            document.getElementById("fieldset").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "php/getfield.php?field=" + str, true);
    xmlhttp.send();
} 
function setnewforum(strr) {
    if (strr == "20ab") {
        // alert(strr);
        $("#mnew").show();
    }
    else {

        $("#mnew").hide();
    }

}
// function storetreads() {
//     var index = document.getElementById("indexId").value;
//     index = "142081";
//     var foId = document.getElementById("forum").value;
//     foId = 1;
//     var fiId = document.getElementById("field").value;
//     fiId = 1;
//     var tTitle = document.getElementById("tread_title").value;
//     tTitle = "c and qustion";
//     var tData = document.getElementById("tread_data").value;
//     tData = "mbhjbsjbjbyjdshvcj";

//     // if (index == "h") {
//     //    document.getElementById("fieldset").innerHTML = "";
//    //     return;
//    // }
//     if (window.XMLHttpRequest) {
//         // code for IE7+, Firefox, Chrome, Opera, Safari
//         xmlhttp = new XMLHttpRequest();
//     } else { // code for IE6, IE5
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             // document.getElementById("fieldset").innerHTML = this.responseText;
//         }
//     }
    
//     xmlhttp.open("POST", "php/storetread.php?in="+index+"&fo="+foId+"&fi="+fiId+"&ti"+tiTitle+"&td"+tData, true);
//     xmlhttp.send();
// } 
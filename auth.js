async function checkauth(required){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4){
            var res = this.responseText;
            if (res != "1"){
                document.getElementById("body").innerHTML = "<h1>You are not authorized to view this page. Redirecting...</h1>";
                setTimeout(function() {
                    window.location.href = "index.html";
                }, 2000);
            }
        }
    };
    xhttp.open("POST", "checkauth.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send("required="+required);
}

async function logout(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4){
            var res = this.responseText;
            document.getElementById("body").innerHTML = "<h1>" + res + "</h1>";
            setTimeout(function() {
                window.location.href = "index.html";
            }, 2000);
        }
    };
    xhttp.open("POST", "logout.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send();
}

async function getusername(){
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "getusername.php", false);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send();
    return xhttp.responseText;
}
function filter() {
    var input, filter, table, tr, td, i, diffSelect, categorySelect;
    input = document.getElementById("myInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("qbanktable");
    tr = table.getElementsByTagName("tr");
    diffSelect = document.getElementById("difficultySelect");
    categorySelect = document.getElementById("categorySelect");

    for (i = 1; i < tr.length; i++) {
        if (tr[i].getElementsByTagName("td")[1] == null) continue;
        td = tr[i].getElementsByTagName("td")[0].innerText + 
            tr[i].getElementsByTagName("td")[1].innerText + 
            tr[i].getElementsByTagName("td")[2].innerText + 
            tr[i].getElementsByTagName("td")[3].innerText + 
            tr[i].getElementsByTagName("td")[4].innerText;
        categoryCompare = tr[i].getElementsByTagName("td")[2].innerText;
        diffCompare = tr[i].getElementsByTagName("td")[3].innerText;
        if (td) {
            if (td.toLowerCase().indexOf(filter) > -1 
                && diffCompare.toLowerCase().indexOf(diffSelect.options[diffSelect.selectedIndex].text.toLowerCase()) > -1
                && categoryCompare.toLowerCase().indexOf(categorySelect.options[categorySelect.selectedIndex].text.toLowerCase()) > -1
                ) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function escapeHtml(unsafe) {
    return unsafe
        .replace("&amp;", "&")
        .replace("&lt;", "<")
        .replace("&gt;", ">")
        .replace("&quot;", "\"")
        .replace("&#039;", "\'");
}

function escapeHtmlReverse(unsafe) {
    return unsafe
        .replace("&", "&amp;")
        .replace("<", "&lt;")
        .replace(">", "&gt;")
        .replace("\"", "&quot;",)
        .replace("\'", "&#039;", );
}

function showAlert(text){
    var msg = JSON.parse(text).message;
    var content = document.createElement("DIV");
    content.style.fontSize = "large";
    content.innerHTML = msg + " Redirecting...";
    document.getElementById('body').appendChild(content);
}
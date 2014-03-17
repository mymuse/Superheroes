function initFrimSelectors() {
    var table = document.getElementById("catalog");
    var firms = table.getElementsByClassName("firm");
    for (var i = 0; i < firms.length; i++) {
        var head = firms[i].getElementsByClassName("firm_header")[0];

        head.onclick = (function() {
            var c = i;
            return function() {
                console.log(c);
                var details = firms[c].getElementsByClassName("firm_info_hidden");
                if (details.length !== 0) {
                    details[0].className = "firm_info_visible";
                } else {
                    details = firms[c].getElementsByClassName("firm_info_visible");
                    details[0].className = "firm_info_hidden";
                }
            };
        })(i);
    }
}

function initial() {
    var table = document.getElementById("catalog");
    var rows = table.getElementsByTagName("tr");
    rows[0].className = "selectedRow";
    for (var i = 0; i < rows.length; i++) {
        rows[i].onclick = (function() {
            var c = i;
            return function() {
                var row_selected = table.getElementsByClassName("selectedRow")[0];
                row_selected.className = "";
                rows[c].className = "selectedRow";
            };
        })(i);
    }
    initFrimSelectors();
}

function bet() {
    var row = document.getElementsByClassName("selectedRow")[0];
    var bet_dom = row.getElementsByClassName("bet")[0];
    bet_dom.checked = !bet_dom.checked;
}

function send() {
    var table = document.getElementById("catalog");
    var rows = table.getElementsByTagName("tr");

    var win = window.open("", "", "");

    for (var i = 0; i < rows.length; i++) {
        var bet_i = rows[i].getElementsByClassName("bet")[0];
        if (bet_i.checked) {
            var h1s = rows[i].getElementsByClassName("h1_catalog");
            win.document.writeln("Name " + h1s[0].innerHTML + ", price - " + h1s[1].innerHTML + "<br>");
        }
    }
}
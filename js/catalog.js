function initFrimSelectors() {
    $(".firm > .firm_header").click(function(){
		var info = $(this).siblings(".firm_info");
		if(info.hasClass("firm_info_hidden")){
			info.removeClass("firm_info_hidden");
			info.addClass("firm_info_visible");
		}else{
			info.removeClass("firm_info_visible");
			info.addClass("firm_info_hidden");
		}
    });
}

function initial() {
    $("#catalog > tbody > tr").click(function(){
    	$(".selectedRow").removeClass("selectedRow");
    	$(this).addClass("selectedRow");
    });
    initFrimSelectors();
}

function bet() {
	var bet_dom = $(".selectedRow").find(".bet");
    bet_dom[0].checked = !bet_dom[0].checked;
}

//do it, i think its complex and include all fetures we should know in jquery
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
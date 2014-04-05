function initFrimSelectors() {
    $(".firm > .firm_header").click(function() {
        var info = $(this).siblings(".firm_info");
        if (info.hasClass("firm_info_hidden")) {
            info.removeClass("firm_info_hidden");
            info.addClass("firm_info_visible");
        } else {
            info.removeClass("firm_info_visible");
            info.addClass("firm_info_hidden");
        }
    });
}

function initial() {
    $("#catalog > tbody > tr").click(function() {
        $(".selectedRow").removeClass("selectedRow");
        $(this).addClass("selectedRow");
    });
    initFrimSelectors();
}

function bet() {
    var bet_dom = $(".selectedRow").find(".bet");
    bet_dom[0].checked = !bet_dom[0].checked;
}

function send() {
    var rows = $("#catalog > tbody > tr:has(.bet:checked)");
    var win = window.open("", "", "");
    for (var i=0;i<rows.length;i++) {
        var row = rows[i];
	var h1s = row.getElementsByClassName("h1_catalog");
        win.document.writeln("Name " + h1s[0].innerHTML + ", price - " + h1s[1].innerHTML + "<br>");
    }
}

	function up() {
	    var current = $(".selectedRow");
	    var prev = current.prev();
	    if (prev.length !== 0) {
	        prev.addClass("selectedRow");
	        current.removeClass("selectedRow");
	    }
	}

	function down() {
	    var current = $(".selectedRow");
	    var next = current.next();
	    if (next.length !== 0) {
	        next.addClass("selectedRow");
	        current.removeClass("selectedRow");
	    }
	}
	function validRegister() {
		var em = document.getElementsByName("email")[0].value;
		var pwd = document.getElementsByName("pwd")[0].value;
		var gen = document.getElementsByName("gender")[0].value;
		var name = document.getElementsByName("name")[0].value;
	
			
		if ((checkEmail(em)) && (pwd.length > 5) && (name.length > 1)) {
			return true;
		} 
		else{
			err = window.open("", "error", "width=400,height=200");	
			if (pwd.length < 1) {
				return false;
			}
			if (!checkEmail(em)) {
				return false;
			}
			if (pwd.length < 5) {
			
				return false;
			}
		}
		
	}
	function checkEmail(email) {
		
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
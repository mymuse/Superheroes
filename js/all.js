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
    if(rows.length==0){
    	return;
    }

    var request = $(rows[0]).attr('name');
    for (var i=1;i<rows.length;i++) {
        var id = $(rows[i]).attr('name');
        request = request+"&"+id;
    }
    document.location = "bet.php?"+request;  
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
	function validRegister(f) {
		console.log(f);
		var em = f['email'].value;
		var pwd = f['pwd'].value;
		var gen = f['gender'].value;
		var name = f['name'].value;
		if ((checkEmail(em)) && (pwd.length >= 3) && (name.length > 1)) {
			return true;
		} 
		else{
			if (name.length < 1) {
				alert("name");
				return false;
			}
			if (!checkEmail(em)) {
				alert("email");
				return false;
			}
			if (pwd.length < 3) {
				alert(pwd);
				return false;
			}
		}
		
	}
	function checkEmail(email) {
		
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
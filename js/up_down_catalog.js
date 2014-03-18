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
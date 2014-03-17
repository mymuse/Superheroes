	
	function verticalMove(check,increment){
		var table = document.getElementById("catalog");
		var rows = table.getElementsByTagName("tr");
		for (var i = 0; i < rows.length; i++) {
			if (rows[i].className === "selectedRow") {				
				if (check(i,rows)) {				
					rows[i + increment].className = "selectedRow";	
					rows[i].className = "";
				}
				break;
			}
		}
	}
	function up() {
		verticalMove(function(i,rows){
			return i - 1 >= 0;
		}, -1);
	}

	function down() {
		
		verticalMove(function(i,rows){
			return i + 1 < rows.length;
		}, 1);	
	}

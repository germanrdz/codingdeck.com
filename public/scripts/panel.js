$(document).ready(function() {
	
	var form = $("#form");
	var new_entry_link = $("#new_entry_link");
	
	
	new_entry_link.click(function() {
		if (form.is(":hidden")) {
			form.show("slow");
		}
		else {
			form.hide("slow");
		}
	});
	
	
		
});
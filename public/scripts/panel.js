$(document).ready(function() {
	
	var form = $("#form");
	var new_entry_link = $("#new_entry_link");
	var success = $(".success");
	var error = $(".error");
	
	new_entry_link.click(function() {
		if (form.is(":hidden")) {
			form.show("slow");
		}
		else {
			form.hide("slow");
		}
	});
	
	// if success box, hide if after one second
	if (success.size() > 0) {
		success.delay(3000).hide("slow");
	}
	
	// if error box, show form
	if (error.size() > 0) {
		form.show();
	}
	
});
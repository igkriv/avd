$(document).ready(function() {
	$("#check_login").bind("click", function(event) {
		$.ajax({
			url: "/js/login.php",
			type: "POST",
			data: ("login=" + $("#login").val()),
			dataType: "text",
			success: function(result) {
				$("#login").next().remove();
				if (result == "1") $("#login").after("<span>Логин свободен!</span>");
				else $("#login").after("<span>Логин занят!</span>");
			}
		});
	});
});
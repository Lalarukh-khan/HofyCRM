$(document).ready(function(){
	
	// Select Chat
	$('#send').click(function(e){
		e.preventDefault();

		var chatMessage = $('#chatMessage').val();

		if(chatMessage == ""){
			alert("Please enter a message..");
		}
		else{
			$.ajax({
				url: "insertChat.php",
				method: "post",
				data: $('#chatForm').serialize(),
				success: function(data){
					if (data == 1) {
						$('#chatForm')[0].reset();
						loadUser();
						loadChat();
					}
				} 
			});
		}
	});

	// Load Chat
	function loadChat() {

		$.ajax({
			url: "loadChat.php",
			method: "GET",
			data: "html",
			success: function(data){
				$('#loadChat').html(data);
			}
		});
	}
	loadChat();

	// Load User
	function loadUser() {

		$.ajax({
			url: "loadUser.php",
			method: "GET",
			data: "html",
			success: function(data){
				$('#inputCookie').append(data);
			}
		});
	}
	loadUser();

	// Load Status
	function loadStatus() {

		$.ajax({
			url: "loadStatus.php",
			method: "GET",
			data: "html",
			success: function(data){
				$('#status').append(data);
			}
		});
	}
	loadStatus();

	setInterval(function(){ loadChat(); }, 5000);

});
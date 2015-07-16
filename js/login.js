$(document).ready(function() {
	$('a.login-window').unbind('click').bind('click', function() {
		
		// Add the popup to body when there is no existing popup yet
		if($('body').find('#grs-login').length == 0){
			var markup = "<div id='grs-login' style='display:none;'>" 
					+		"<div class='grs-login-header'>Login</div>"
					+		"<div class='grs-login-content'>"
					+			"<div class='grs-user-login'>Email</div>"
					+			"<input type='text' class='grs-user-text grs-input-login' size='35'></input>"
					+			"<div class='grs-pass-login'>Password</div>"
					+			"<input type='password' class='grs-pass-text grs-input-login' size='35'></input>"
					+		"</div>"
					+		"<div class='grs-login-footer'>"
					+			"<div class='grs-close-btn grs-login-buttons'>Close</div>"
					+			"<div class='grs-login-btn grs-login-buttons'>Login</div>"
					+ 		"</div>"
					+	"</div>";
			$('body').append(markup);
			bindButtons();
		}
		$('#grs-overlay-login').removeClass('grs-hidden');
		$('#grs-login').fadeIn(1000);
		return false;
	});
	
	function bindButtons(){
		$('.grs-close-btn').unbind('click').bind('click', function(){
			$('#grs-overlay-login').addClass('grs-hidden');
			$('#grs-login').fadeOut(1000);
		});
	}
	// When clicking on the button close
	
});
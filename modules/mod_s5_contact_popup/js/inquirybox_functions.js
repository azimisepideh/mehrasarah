
jQuery(function(){
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	jQuery("#contact").submit(function(){
		if(!re.test(jQuery("#emailfield").val())) {
			jQuery(".message").removeClass("loader").addClass("error");
			jQuery(".message").html(s5contactpoperror).fadeIn("slow");
			return false;
		}
		

		
		jQuery(".message").removeClass("success").removeClass("error").addClass("loader").html("Sending message").fadeIn("slow");
		jQuery.ajax({
			type: "POST",
			url: s5contactpopurl + "tmpl/ajax.php",
			data: jQuery(this).serialize(),
			dataType: 'text',
			success: function(msg){
				switch(msg) {
					case "field_error":
						jQuery(".message").removeClass("loader").addClass("error");
						jQuery(".message").html(s5contactpopfif);
						break;
					case "captcha_error":
						jQuery(".message").removeClass("loader").addClass("error");
						jQuery(".message").html(s5contactpopcb);
						break;
					case "success":
						jQuery(".message").removeClass("loader").addClass("success");
						jQuery(".message").html(s5contactpopsuccess);
						break;
					default:
						alert(s5contactpoperror2);
				}
			}
		});
		//Recaptcha.reload();
		return false;
	});
});

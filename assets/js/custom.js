function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57)){
		return false;
	}
	return true;
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$(".fileupload_img").attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

document.addEventListener('DOMContentLoaded', function(){
	(function ($) {
		"use strict";


		var base_url = Settings.base_url;

		$(document).on("change", ".list_brand", function(e) {

			var param=$('#sort_filter_form').serialize();

			if(history.pushState) {
				var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?'+param;
				window.history.pushState({path:newurl},'',newurl);
			}

			var target = "#products_list";

			$('html, body').animate({
				scrollTop: ($(target).offset().top)
			}, 100);

			setTimeout(location.reload(), 1000);
		});

	})(jQuery);
});
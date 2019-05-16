jQuery(document).ready(function() {
	jQuery(document.body).append('<div id="cboxOverlay" class="s5-box-overlay-closed" style="cursor: pointer;display:block;z-index:-1;"></div><div id="colorbox" class="" style="left: 0;margin:auto;padding-bottom: 0;padding-right: 0;position:fixed;right: 0;top: 0;width: auto;z-index: -1;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left; width: auto;"></div><div id="cboxTopRight" style="float: left;"></div></div><div><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" style="overflow: auto;"></div><div class="cboxClose" id="cboxClose" style="float: left;">close</div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left; width: auto;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div></div>');
				
	//* hides for s5 box's */		
	jQuery('.cboxClose').click(function() {
		jQuery('.moduletable-s5_box').css("display", "none");
		jQuery('#cboxOverlay').removeClass('s5-box-overlay');	
		jQuery('#cboxOverlay').addClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', -1);	
		jQuery('#colorbox').css('z-index', -1);		
		jQuery('#colorbox').removeClass('s5-box-effect');	});	
		
	//* hides overlay for all s5 box's */		
	jQuery('#cboxOverlay').click(function() {		
		jQuery('.moduletable-s5_box').css("display", "none");
		jQuery('#cboxOverlay').removeClass('s5-box-overlay');
		jQuery('#cboxOverlay').addClass('s5-box-overlay-closed');		
		jQuery('#cboxOverlay').css('z-index', -1);
		jQuery('#colorbox').css('z-index', -1);
		jQuery('#colorbox').removeClass('s5-box-effect');	});
			
	jQuery('.s5box_login').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);		
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').css('bottom', 0);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});
			
	jQuery('.s5box_register').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});		

	jQuery('.s5box_one').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});		
		
	jQuery('.s5box_two').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});		
		
	jQuery('.s5box_three').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});				
		
	jQuery('.s5box_four').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});
		
	jQuery('.s5box_five').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});	
		
	jQuery('.s5box_six').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});	
		
	jQuery('.s5box_seven').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});					
			
	jQuery('.s5box_eight').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});		

	jQuery('.s5box_nine').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});		

	jQuery('.s5box_ten').click(function() {
		jQuery('#cboxOverlay').addClass('s5-box-overlay');
		jQuery('#cboxContent').addClass('s5-box-width');
		jQuery('#cboxOverlay').removeClass('s5-box-overlay-closed');
		jQuery('#cboxOverlay').css('z-index', 9999);
		jQuery('#colorbox').css('z-index', 9999);
		jQuery('#colorbox').addClass('s5-box-effect');
		jQuery('.moduletable-s5_box').css("display", "block");	});	
		
});	
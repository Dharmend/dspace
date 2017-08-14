jQuery(document).ready(function(){
 	jQuery('#main-menu #nav li').find('a').each(function() {
	    if(jQuery(this).text() == "Home" || jQuery(this).text() == "मुख पृष्ठ") {
	          //$(this).attr('text', '<i class="fa fa-home"></i>');
	          jQuery(this).html('<i class="fa fa-home"><div id="homemenutext">Home</div></i>');
	    }
	});
});





(function( $ ){

  $.fn.jtip = function() {
	
    this.each(function() {
      	
    	$(this).mouseenter(function() {
	    	  
	    	  var text 		= $(this).attr('alt');
	    	  var title 	= $(this).attr('data-title');
	    	  var position 	= $(this).offset();
	    	  var top		= position.top;
	    	  var left		= position.left - 40;
	    	  
	    	  $('body').append("<div class='jTip-container' style='left:"+left+"px;'><div><span>"+text+"</span><p>"+title+"</p><img src='images/tip_arrow.png' /><div></div>");
	    	  var height 	= $('.jTip-container').height();
	    	  $('.jTip-container').css('top',top - (height + 20)).show();
    	}).mouseleave(function() {
	    	  $('.jTip-container').remove();
    	});
      
    });

  };
})( jQuery );
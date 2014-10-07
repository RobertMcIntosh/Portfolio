/*Description: plugin for portfolio site
 *Website:	rmportfolio.info
 *Author: Robert McIntosh
 *Notes: toggle effect to open one and close any other open per click
 */
$(document).ready(function()
{
	(function( $, window, document, undefined )
	{
		$.fn.doubleTapToGo = function( params )
		{
			if( !( 'ontouchstart' in window ) &&
				!navigator.msMaxTouchPoints &&
				!navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

			this.each( function()
			{
				var curItem = false;

				$( this ).on( 'click', function( e )
				{
					var item = $( this );
					if( item[ 0 ] != curItem[ 0 ] )
					{
						e.preventDefault();
						curItem = item;
					}
				});

				$( document ).on( 'click touchstart MSPointerDown', function( e )
				{
					var resetItem = true,
						parents	  = $( e.target ).parents();

					for( var i = 0; i < parents.length; i++ )
						if( parents[ i ] == curItem[ 0 ] )
							resetItem = false;

					if( resetItem )
						curItem = false;
				});
			});
			return this;
		};
	})( jQuery, window, document );

  $('.showLink').click(function()
  {
  	$('.showMoreLess').each(function()
		{
			if($('.showMoreLess').css('height') != '135px' || $(this.hash).css('height') != '135px')
    	{
				$('.showMoreLess').removeClass("more",50);
      	$('.showLink').text('More...');
    	}
		});

  	if($(this.hash).css('height') == '135px')
  	{
	  	$(this.hash).stop().animate({'background-color': 'rgba(89, 120, 137, 0.3)' },100)
	  	$(this.hash).addClass("more", 1500);
			$(this).text('Less...');
  	}

  	$('.showMoreLess').animate({'background-color': 'rgba(239, 239, 239, 1.0)' }, 900);
  });

	//hover to touch
	var device = navigator.userAgent.toLowerCase();
	var ios = device.match(/(iphone|ipod|ipad)/);
	if (ios)
	{
     $('a.taphover').on("touchstart", function (e)
		{
			"use strict";
			var link = $(this);
			if (link.hasClass('hover'))
			{
				return true;
			}
			else
			{
				link.addClass("hover");
				$('a.taphover').not(this).removeClass("hover");
				e.preventDefault();
				return false;
			}
		});
  }
  else
	{
		$('#nav ul li:has(ul)' ).doubleTapToGo();
	}

	$('#pdfDownload a').unbind('click');
	$('#scrollUp a').unbind('click');
	$('scrollDwn a').unbind('click');
});
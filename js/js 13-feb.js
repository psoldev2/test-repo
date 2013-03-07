var $j = jQuery.noConflict();
$j(document).ready(function()
{
	
	$j('span.close').click(function(e)
	{
	   var $jlefty = $j(this).prev();
	   	$j(this).hide("slow").prev().animate(
		{
		left: parseInt($jlefty.css('left'),10) == 0 ?
        -$jlefty.outerWidth() :
        -757
		});
	
	});
	$j('.outer-ul img').click(function(e)
	{
	   var ind=$j(this).parent(".outer-li").index();
    //   alert(ind);
    var top=(ind*105)+10;
    // alert(top);
	   var $jlefty = $j(this).next().next();
    $jlefty.animate({
      left: parseInt($jlefty.css('left'),10) == 0 ?
        -$jlefty.outerWidth() :
        140
    });
	$j('span.close').show("slow").animate({
      top: parseInt(	$j('span.close').css('top'),10) == 0 ?
        -	$j('span.close').outerWidth() :
        top

    });
        //$j('span.close').show("slow");
      
	});
    var ratio = jQuery("#curve").parent().width() / jQuery("#curve").width();

jQuery(window).resize(function() {
   jQuery("#curve").width( jQuery("#curve").parent().width() / ratio + "px" );
   });
});
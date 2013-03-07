var $j = jQuery.noConflict();
$j(document).ready(function()
{

	$j('.outer-li').click(function(e)
	{
		$j(this).find('.inner-ul').animate(
		{
			width: 'toggle'
		});
	});
});
var $j = jQuery.noConflict();
$j(document).ready(function (){
   $j('#outer-ul #outer-li').mouseout(function(e){
      //  $j('#inner-ul').css({"display": "none", "visibility": "hidden"});
      //  $j('span', '#outer-ul').empty().remove()
        });
         $j('#inner-ul .close').click(function(e){
            $j('#inner-ul').css({"display": "none", "visibility": "hidden"});
         });
    $j('#outer-ul #outer-li').click(function(e){
      
        $j(this).children('#inner-ul').css({"display": "block", "visibility": "visible"});
      //   $j('#inner-ul').append('<span class="close">CLOSE </span>');
       // $j('#inner-ul').slideout();
     
    });  
     $j(window).resize(function() {
            jQuery("#curve").width(jQuery(".header").width());});
/*var lastSize = { width: $j(window).width(), height: $j(window).height() };
$j(window).resize(function (e) {
    var win = $j(window);
    $j('img').each(function (i, img) {
        img = $j(img);
        var w = img.width(),
            h = img.height();
        img.width(w + win.width() - lastSize.width);
        img.height(w + win.height() - lastSize.height);        
    });
    lastSize = { width: win.width(), height: win.height() };
});*/
}); 


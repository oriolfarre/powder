$(document).ready(function(){

    //Navbar//
  	var menu = $('.navbar');
  	$(window).bind('scroll', function(e){
  		if($(window).scrollTop() > 140){
  			if(!menu.hasClass('open')){
  				menu.addClass('open');
  			}
  		}else{
  			if(menu.hasClass('open')){
  				menu.removeClass('open');
  			}
  		}
  	});

    // Scroll
    $(function() {
      $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
      });
    });

});

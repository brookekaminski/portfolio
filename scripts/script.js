// JavaScript Document


$(window).scroll(function() {
	
	var pos = $(window).scrollTop();
	
	if(pos == 0){
	
		$('.menu-name').fadeIn(100);
        $('.menu-circle').removeClass('hovered');
	}
	
	if(pos > 50){
	
        $('.menu-name').fadeOut(100);
        $('.menu-circle').addClass('hovered');
	}

	
});

//$(window).on('resize',function(){  
//   if($(window).width() > 1000){
//       
//        $('.menu-name').show();  
//       
//   }    
//}


$('.line').hover(function () {
    $('span.arrow').remove();
    $(this).prepend('<span class="arrow"></span>');
}, 
function () {
    $('span.arrow').remove();
    $(this).append('<span class="arrow"></span>');
});


$(".menu-link").click(function(e) {
    e.preventDefault();
    
    $(".menu-overlay").toggleClass("open");
    $(".menu").toggleClass("open");

});
	





  $('.menu-button').on('click', function() {

    $(this).toggleClass('active');
    $('.menu').toggleClass('active');

  });
  


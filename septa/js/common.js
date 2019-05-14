	$('.header_phone_button').on('click', function(){
        $(this).parent().toggleClass('dropdown__open');
    });
    
    $(document).on('click', function(e) {
      if (!$(e.target).closest('.header_phone').length) {
        $('.header_phone').removeClass('dropdown__open');
      }
        e.stopPropagation();
    });

    $('.main-slider').slick({
	  infinite: true,
	  speed: 600,
	  fade: true,
	  slidesToShow: 1,
	  prevArrow: $('.prev-main'),
  	  nextArrow: $('.next-main')
	});

	$('.our_project-slider').slick({
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  prevArrow: $('.prev-o-project'),
  	  nextArrow: $('.next-o-project'),
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 577,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrow: false,
	        dots: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$('.news-slider').slick({
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  prevArrow: $('.prev-news'),
  	  nextArrow: $('.next-news'),
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 577,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrow: false,
	        dots: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$('.burger, .overlay').click(function(){
	  $('.burger').toggleClass('clicked');
	  $('.overlay').toggleClass('show');
	  $('nav').toggleClass('show');
	  $('body').toggleClass('overflow');
	});

	 $('.more-servise-btn').click(function(){
	  if($(this).hasClass('vd_open_all_text_button')){
	    $('.s-our-servise').removeClass('vd_open_all_menu');
	    $(this).removeClass('vd_open_all_text_button');
	    $(this).html('Усі послуги');
	  }else{
	   $('.s-our-servise').addClass('vd_open_all_menu');
	    $(this).html('Сховати');
	    $(this).addClass('vd_open_all_text_button')
	  }
	 });
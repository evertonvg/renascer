export default function sendForm() {
  $('.slick-gallery').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.slick-nav',
		Infinity:false,
		responsive: [
		{
			breakpoint: 800,
			settings: {
			arrows: false,
			}
		},
		]
		
	});
	$('.slick-nav').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		arrows:false,
		Infinity:false,
		asNavFor: '.slick-gallery',
		dots: true,
		centerMode: true,
		focusOnSelect: true,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
			slidesToShow: 4,
			}
		},
		{
			breakpoint: 600,
			settings: {
			slidesToShow: 3,

			}
		},
		{
			breakpoint: 480,
			settings: {
			slidesToShow: 2,
				dots:false,
			}
		}
		]
	});


	$('.slick-gallery .item img').click((ev)=>{
		$('.modal-gallery').addClass('active')
		$('body').addClass('unflow')
		$('.modal-gallery img').attr('src',ev.currentTarget.src);
	})

	$('.modal-gallery').click((ev)=>{
		$('.modal-gallery').removeClass('active')
		$('body').removeClass('unflow')
	})

	$('.modal-gallery .close').click((ev)=>{
		$('.modal-gallery').removeClass('active')
		$('body').removeClass('unflow')
	})
	$('.modal-gallery img').click((ev)=>{
		ev.stopPropagation()
	})
	$(document).keyup(function(e) {
		if (e.key === "Escape") { 
		$('.modal-gallery').removeClass('active')
		$('body').removeClass('unflow')
	}
	});

	$('.alert .btn-close').click(()=>{
		$('.alert.advice').removeClass('show')
	})
}
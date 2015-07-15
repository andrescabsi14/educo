$(document).ready(function(){
	// popUp();
	socialMenu();
	slider();
	anchorScroll();
	customPager();

	$(window).resize(function(){

	});
});

function socialMenu(){
	$('header #menu-redes-sociales li:nth-child(1) a').html('<span class="icon ac-facebook-2"></span>');
	$('header #menu-redes-sociales li:nth-child(2) a').html('<span class="icon ac-twitter-1"></span>');
	$('header #menu-redes-sociales li:nth-child(3) a').html('<span class="icon ac-linkedin-3"></span>');
	$('footer #menu-redes-sociales li a').attr('target', '_blank');

	$('footer #menu-redes-sociales-1').prepend('<h3>SÍGANOS</h3>');
	$('footer #menu-redes-sociales-1 li:nth-child(2) a').html('<span class="icon ac-facebook-2"></span>');
	$('footer #menu-redes-sociales-1 li:nth-child(3) a').html('<span class="icon ac-twitter-1"></span>');
	$('footer #menu-redes-sociales-1 li:nth-child(4) a').html('<span class="icon ac-linkedin-3"></span>');
	$('footer #menu-redes-sociales-1 li a').attr('target', '_blank');
}
function customPager(){
	//Cursos
	$('#tabs .owl-pagination .owl-page:nth-child(1)').html('Descripción');
	$('#tabs .owl-pagination .owl-page:nth-child(2)').html('Dirigido a');
	$('#tabs .owl-pagination .owl-page:nth-child(3)').html('Alcance');
	$('#tabs .owl-pagination .owl-page:nth-child(4)').html('Objetivos');
	//Contáctenos
	$('body.page-template-contactenos .container_slider_contactenos #owl_contactenos .owl-page:nth-child(1)').html('Indicaciones');
	$('body.page-template-contactenos .container_slider_contactenos #owl_contactenos .owl-page:nth-child(2)').html('Mapa');
}
function slider(){
	$("#sliderHome").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 700,
		paginationSpeed : 400,
		singleItem:true,
		autoPlay: true,
		navigationText: ['<div class="prev icon ac-chevron-left-2"></div>','<div class="next icon ac-chevron-right-2"></div>'],
		stopOnHover: true
	});
	$("#sliderTestimonials").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 500,
		paginationSpeed : 400,
		singleItem:true,
		navigation: false,
		paginationNumbers: true,
		autoPlay: false
	});
	$("#sliderClients").owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		paginationNumbers: false,
		autoPlay: true
	});
	$("#sliderClientsInner").owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		paginationNumbers: false,
		autoPlay: true
	});
	$("#owl_contactenos").owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		paginationNumbers: false,
		autoPlay: true,
		afterInit: customPager,
		afterUpdate: customPager
	});
	$("#tabs").owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		paginationNumbers: false,
		autoPlay: false,
		afterInit: customPager,
		afterUpdate: customPager
	});
	$("#sliderNosotros").owlCarousel({
		items: 1,
		navigation : true,
		navigationText: ["<",">"],
		pagination: true,
		paginationNumbers: true,
		singleItem: true,
		addClassActive: true,
	});
	var totalSlides = $("#sliderNosotros .owl-pagination .owl-page").length;
	$("#sliderNosotros .owl-pagination").append('<div class="total_Slide"> - '+ totalSlides +'</div>');
}
function anchorScroll(){
	$(".scroll").click(function(event) {
		event.preventDefault();
		$('html,body').animate( { scrollTop:$(this.hash).offset().top } , 1000);
	} );
}

function popUp(){
	if ($('body').hasClass('home')) {
		$('body').addClass('popUp');
	};

	$('body.popUp #overlay, body.popUp .close').click(function(){
		$('body.popUp').removeClass('popUp');
	})

	$('body.home .left .ebooks .ebook1').hover(function(){
		$('body.home .right .ebooks .ebook1').toggleClass('active');
	});
	$('body.home .left .ebooks .ebook2').hover(function(){
		$('body.home .right .ebooks .ebook2').toggleClass('active');
	});
	$('body.home .left .ebooks .ebook3').hover(function(){
		$('body.home .right .ebooks .ebook3').toggleClass('active');
	});
	
}



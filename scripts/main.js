$( document ).ready(function() {
	
	//Iniciar funções
	iniciarSliderDeProjetos();
	scrollDownHeader();
	ativarMenuMobile();
	voltarAoTopo();
	escreverNaTela();
	
	//Seta Scroll Down Home Header (Particles)
	function scrollDownHeader() {
		$('.scroll-down').click(function(event){
			event.preventDefault();
			var sectionSobre = $('#teste').offset().top;
			$('html, body').animate({
				scrollTop: sectionSobre + 'px'
			}, 1000);
		});
	}
	
	//Menu Mobile
	function ativarMenuMobile() {
		$('.menu-btn-container').click(function(){
			$(this).toggleClass('btn-close');
			$('.navbar-navmenu').fadeToggle();
			$('.nav').toggleClass('open');
		});
		
		$(window).resize(function() {
			var width = $(window).width();
			if (width > 1199){
				$('.navbar-navmenu').css('display', 'block');
			} else {
				$('.navbar-navmenu').css('display', 'none');
			}
		});
	}
	
	//Botão de voltar para o topo
	function voltarAoTopo() {
		$(document).on('scroll', function() {
			var y = $(this).scrollTop();
			if (y > 500) {
				$('a.btn-back').fadeIn();
			} else {
				$('a.btn-back').fadeOut();
			}
		});
		
		$('a.btn-back').click(function(){
			$('html, body').animate({
				scrollTop: 0
			}, 1000);
			return false
		});
	}
	
	//Slider da página de projetos
	function iniciarSliderDeProjetos() {
		$('.projetos-slider').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			dots: true,
			arrows: false
		});
	}
	
});

$('.section-nosso-target').parallax({
	imageSrc: 'images/bg-proposta.png'
});

$('.section-form-investidores').parallax({
	imageSrc: 'images/bg-investidor.png'
});

$('.quem-e-finxi-container').parallax({
	imageSrc: 'images/bg-quem-finxi.png'
});

// Typed JS, Frases de entrada da Home
function escreverNaTela() {
	var options = {
		strings: [
			"Somos o <strong>CTO</strong> que<br>você procurava.",
			"Inserir frase 2.",
			"Digitar outra frase aqui."
		],
		typeSpeed: 10,
		backSpeed: 10,
		backDelay: 1500,
		startDelay: 1000,
		loop: true,
		cursorChar: ''
	};
	
	var typed = new Typed(".header-box h1", options);
}


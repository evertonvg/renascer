
import axios from "axios";

(function() {
  "use strict";


  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    	window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  	}

	document.addEventListener('scroll', toggleScrolled);
	window.addEventListener('load', toggleScrolled);

  	let scrollTop = document.querySelector('.scroll-top');

	function toggleScrollTop() {
		if (scrollTop) {
		window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
		}
	}
	window.addEventListener('load', toggleScrollTop);
	document.addEventListener('scroll', toggleScrollTop);

	$('.navmenu a').click(function(ev){
		ev.preventDefault()
		const el = document.querySelector($(this).attr('data-href'))
		window.scrollTo({
			top: el.offsetTop - 80,
			behavior: 'smooth',
		});
	})
 
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

const form = document.forms['submitForm']


if(form){
	let pristine = new Pristine(form);
	$('input#whatsapp').mask('(00)00000-0000');


	pristine.addValidator(form.name, function(value) {
    if (value.split(' ').length >= 2 && value.split(' ')[1]!='' && value.length >= 5){
        return true;
    }

    return false;
}, "Digite seu nome seguido do sobrenome. Mínimo de 5 caracteres", 2, false);
	form.addEventListener('submit',(ev)=>{
	  ev.preventDefault()
	  let valid = pristine.validate();
	 
	  if(!valid){
		$('.btn.btn-primary.submit').removeClass('disabled');
		return false
	  }
	
	  $('.alert-primary.advice').addClass('show')
	  $('.alert-success.advice').removeClass('show')
	  $('.alert-danger.advice').removeClass('show')
	
	  axios.post('/api/enviar-email', {
			nome: form.name.value,
			email: form.email.value,
			telefone: form.whatsapp.value,
			assunto: form.subject.value,
			mensagem: form.message.value
	  }).then(response => {
			$('.alert-primary.advice').removeClass('show')
			$('.alert-success.advice').addClass('show')
			$('.alert-danger.advice').removeClass('show')
			
	  }).catch(error => {
			$('.alert-primary.advice').removeClass('show')
			$('.alert-danger.advice').addClass('show')
			$('.alert-success.advice').removeClass('show')
			  console.error(error.response.data);
	  }).finally(final =>{
			$('.btn.btn-primary.submit').removeClass('disabled')
			form.name.value = ''
			form.email.value = ''
			form.whatsapp.value = ''
			form.subject.value = ''
			form.message.value = ''
	  });
	  
	})
}


})();

window.onload = function() {
  // Verifica se o cookie de consentimento já existe
  if (!document.cookie.split('; ').find(row => row.startsWith('cookies_accepted='))) {
      // Exibe o aviso
      document.getElementById('cookie-consent').style.display = 'block';
  }

  // Aceitar cookies
  document.getElementById('accept-cookies').onclick = function() {
      document.cookie = "cookies_accepted=true; path=/; max-age=" + 60 * 60 * 24 * 365;
      document.getElementById('cookie-consent').style.display = 'none';
  };

  // Recusar cookies
  document.getElementById('decline-cookies').onclick = function() {
      document.cookie = "cookies_accepted=false; path=/; max-age=" + 60 * 60 * 24 * 365;
      document.getElementById('cookie-consent').style.display = 'none';
  };


  	const menuItems = $('.navmenu a'); // Seleciona todos os itens do menu
	const sections = $('section'); // Seleciona todas as seções
	
	// Função para atualizar o menu com a classe "ativa"
	function updateActiveMenuItem() {
		let currentSection = null;
		
		// Verifica qual seção está visível na tela
		sections.each(function () {
			const sectionTop = $(this).offset().top;
			const sectionBottom = sectionTop + $(this).outerHeight();
			const scrollPosition = $(window).scrollTop();
			
			// Verifica se a seção está visível na tela
			if (scrollPosition >= sectionTop - 81 && scrollPosition < sectionBottom - 81) {
				currentSection = $(this);
				return false; // Encerra o loop quando encontrar a seção visível
			}
		});

		// Se a seção atual for encontrada, atualiza a classe ativa no menu
		menuItems.removeClass('active'); // Remove a classe 'ativa' de todos os itens
		if (currentSection) {
			const activeLink = $('a[href="#' + currentSection.attr('id') + '"]');
			activeLink.addClass('active'); // Adiciona a classe 'ativa' no item do menu correspondente
		}
	}

	// Atualiza o menu ao rolar a página
	$(window).on('scroll', function () {
		updateActiveMenuItem();
	});

	// Atualiza o menu ao carregar a página
	updateActiveMenuItem();



	// video customizado
	// const video = document.querySelector('#video-player')
	// if(video){
	// 	const player = videojs('video-player');
	// 	// Criar botão personalizado
	// 	const customButton = videojs.getComponent('Button');
	// 	const MyCustomButton = videojs.extend(customButton, {
	// 		constructor: function () {
	// 			customButton.apply(this, arguments);
	// 			this.controlText('Custom Button'); // Texto alternativo (acessibilidade)
	// 			this.addClass('vjs-custom-button'); // Classe CSS personalizada
	// 		},
	// 		handleClick: function () {
	// 			// Ação ao clicar no botão
	// 			alert('Botão personalizado clicado!');
	// 		}
	// 	});
	
	// 	// Registrar o novo botão
	// 	videojs.registerComponent('MyCustomButton', MyCustomButton);
	
	// 	// Adicionar o botão ao player
	// 	player.ready(function () {
	// 		this.controlBar.addChild('MyCustomButton', {});
	// 	});
	// }
}


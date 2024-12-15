/**
* Template Name: Nova
* Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

import axios from "axios";

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
  }
 

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  // const preloader = document.querySelector('#preloader');
  // if (preloader) {
  //   window.addEventListener('load', () => {
  //     preloader.remove();
  //   });
  // }

  /**
   * Scroll top button
   */
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
    asNavFor: '.slick-gallery',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
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
$('input#whatsapp').mask('(00)00000-0000');
form.addEventListener('submit',(ev)=>{
  let valid = true
  ev.preventDefault()
  
  $('.btn.btn-primary.submit').addClass('disabled');
  if(!form.name.value.length){
    valid = false
    form.name.classList.add('is-invalid')
  }else{
    form.name.classList.remove('is-invalid')
  }
  if(!form.email.value.length){
    valid = false
    form.email.classList.add('is-invalid')
  }else{
    form.email.classList.remove('is-invalid')
  }
  
  if(form.whatsapp.value.length < 14){
    valid = false
    form.whatsapp.classList.add('is-invalid')
  }else{
    form.whatsapp.classList.remove('is-invalid')
  }

  if(!form.message.value.length){
    valid = false
    form.message.classList.add('is-invalid')
  }else{
    form.message.classList.remove('is-invalid')
  }
 
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
    assunto: form.message.value
  }).then(response => {
		$('.alert-primary.advice').removeClass('show')
		$('.alert-success.advice').addClass('show')
		$('.alert-danger.advice').removeClass('show')
      console.log(response.data.message);
  }).catch(error => {
		$('.alert-primary.advice').removeClass('show')
		$('.alert-danger.advice').addClass('show')
		$('.alert-success.advice').removeClass('show')
      	console.error(error.response.data);
  }).finally(final =>{
	$('.btn.btn-primary.submit').removeClass('disabled')
  });
  
})


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
}


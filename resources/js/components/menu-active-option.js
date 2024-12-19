export default function menuActiveOption(){
  window.addEventListener('load',()=>{
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
  })
}
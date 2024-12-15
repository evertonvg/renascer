<header id="header" class="header d-flex align-items-center fixed-top">


  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">        
      <img src="{{ Voyager::image($page->logo)}}" alt="logo">
    </a> 
  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="#hero" data-href="#hero">Inicio<br></a></li>
      @if($content->about_mode!='desativado')
      <li><a href="#about" data-href="#about">Sobre</a></li>
      @endif
      @if($content->video_mode!='desativado')
      <li><a href="#video" data-href="#video">Vídeo</a></li>
      @endif
      @if($content->gallery_mode!='desativado')
      <li><a href="#gallery" data-href="#gallery">Galeria</a></li>
      @endif
      @if($content->services_mode!='desativado')
      <li><a href="#services" data-href="#services">Serviços</a></li>
      @endif
      @if($content->units_mode!='desativado')
      <li><a href="#units" data-href="#units">Unidades</a></li>
      @endif
      @if($content->contact_mode!='desativado')
      <li><a href="#contact" data-href="#contact">Contato</a></li>
      @endif
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>
  </div>
</header>
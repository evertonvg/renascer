<section id="hero" class="hero section dark-background">
  <img src="{{ Voyager::image($content->background_head)}}" alt="" data-aos="fade-in">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
        <h1 data-aos="fade-up">{{$content->titulo}}</h1>
        <blockquote data-aos="fade-up" data-aos-delay="100">
          <p>{{$content->descricao}}</p>
        </blockquote>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a class="btn-get-started" href="#about">
              <i class="bi bi-play-circle"></i><span>Conheça mais</span>
            </a>
        </div>
      </div>
    </div>
  </div>
</section>
@if($content->about_mode!='desativado')
    <section id="about">
    <div class="container">
      <h2 class="mb-4">{{$content->about_title}}</h2>
      <div class="d-flex p-2 flex-column-reverse flex-lg-row justify-content-center align-items-start">
        <div class="left">
          {!! $content->about_description !!}
        </div>
        <div class="right">
          <img src="{{ Voyager::image($content->about_image)}}" alt="logo da renascer" class="mw-100">
        </div>
      </div>
    </div>
  </section>
  @endif
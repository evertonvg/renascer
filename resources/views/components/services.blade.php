@if($content->services_mode!='desativado')
      <section id="services" class="services section">
        <div class="container" data-aos="fade-up">
          <h2>{{$content->services_title}}</h2>
          <p class="mb-5 w-75">{{$content->services_description}}</p>
        </div>
        <div class="container">
          <div class="row gy-4">
            @foreach ($services as $service)
              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0">
                  @if($service->image)
                  <img width="50" src="{{ Voyager::image($service->image)}}" alt="image do serviço">
                  @endif
                </div>
                <div>
                  <h4 class="title">{{$service->title}}</h4>
                  <p class="description">
                    {{$service->description}}
                  </p>
                  @if($service->link)
                  <a href="{{$service->link}}" target="_blank" class="readmore stretched-link"><span>Veja mais sobre</span><i class="bi bi-arrow-right"></i></a>
                  @endif
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
	  @endif
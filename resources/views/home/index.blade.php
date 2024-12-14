<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$page->titulo}}</title>
  <meta property="og:title" content="{{$page->titulo}}">
  <meta name="twitter:title" content="{{$page->titulo}}">
  <meta name="description" content="{{$page->descricao}}">
  <meta property="og:description" content="{{$page->descricao}}">
  <meta name="twitter:description" content="{{$page->descricao}}">
  <meta name="keywords" content="{{$page->keys}}">
  <meta property="og:url" content="{{Request::url()}}">
  <meta property="og:image" content="{{ Voyager::image($page->card)}}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="{{$page->titulo}}">
  <meta name="twitter:image" content="{{ Voyager::image($page->card)}}">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Favicons -->
  <link href="{{ Voyager::image($page->favicon)}}" rel="icon">
  <link href="{{ Voyager::image($page->favicon)}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">        
          <img src="{{ Voyager::image($page->logo)}}" alt="logo">
        </a>  
      </div>
    </header>
  
    <main class="main">
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
                  <a class="btn-get-started" href="#conheca-mais">
                    <i class="bi bi-play-circle"></i><span>Conheça mais</span>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      @if($content->video_mode!='desativado')
        <section id="video">
          <div class="container">
            <h2>{{$content->video_title}}</h2>
            @if($content->video_description!='')
            <p>{{$content->video_description}}</p>
            @endif
            @if($content->video_archive!='')
            <video controls>
              <source src="{{Storage::url((json_decode($content->video_archive))[0]->download_link)}}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            @elseif($content->video_url!='')
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$content->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            @endif
          </div>
        </section>
      @endif

      @if($content->gallery_mode!='desativado')
      <section id="gallery">
        <div class="container">
            <h2>{{$content->gallery_title}}</h2>
            @if($content->video_description!='')
              	<p>{{$content->gallery_description}}</p>
            @endif
			<div class="slick-gallery">
				@foreach (json_decode($content->gallery_images, true) as $image)
					<div class="item">
						<img class="img-fluid" src="{{ Voyager::image($image) }}" alt="imagem da galeria">
					</div>    
				@endforeach
			</div>
			<div class="slick-nav">
				@foreach (json_decode($content->gallery_images, true) as $image)
					<div class="item">
						<img class="img-fluid" src="{{ Voyager::image($image) }}" alt="imagem da galeria">  
					</div>  
				@endforeach
			</div>
        </div>
      </section>
	  <div class="modal-gallery">
		<span class="close">
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><defs><style>.cls-1{fill:#34610C;fill-rule:evenodd;}</style></defs><title>close-red</title><path class="cls-1" d="M61.44,0A61.44,61.44,0,1,1,0,61.44,61.44,61.44,0,0,1,61.44,0ZM74.58,36.8c1.74-1.77,2.83-3.18,5-1l7,7.13c2.29,2.26,2.17,3.58,0,5.69L73.33,61.83,86.08,74.58c1.77,1.74,3.18,2.83,1,5l-7.13,7c-2.26,2.29-3.58,2.17-5.68,0L61.44,73.72,48.63,86.53c-2.1,2.15-3.42,2.27-5.68,0l-7.13-7c-2.2-2.15-.79-3.24,1-5l12.73-12.7L36.35,48.64c-2.15-2.11-2.27-3.43,0-5.69l7-7.13c2.15-2.2,3.24-.79,5,1L61.44,49.94,74.58,36.8Z"/></svg>
		</span>
		<img src="" alt="">
	  </div>
      @endif
  
      <!-- Services Section -->
      <section id="services" class="services section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Our Services</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
              <div>
                <h4 class="title">Lorem Ipsum</h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
              <div>
                <h4 class="title">Dolor Sitema</h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
              <div>
                <h4 class="title">Sed ut perspiciatis</h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
              <div>
                <h4 class="title">Magni Dolores</h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
              <div>
                <h4 class="title">Nemo Enim</h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
              <div>
                <h4 class="title">Eiusmod Tempor</h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Services Section -->
  
      <!-- Call To Action Section -->
      <section id="call-to-action" class="call-to-action section dark-background">
  
        <img src="assets/img/cta-bg.jpg" alt="">
  
        <div class="container">
          <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
              <div class="text-center">
                <h3>Call To Action</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
              </div>
            </div>
          </div>
        </div>
  
      </section><!-- /Call To Action Section -->
  
      <!-- Features Section -->
      <section id="features" class="features section">
  
        <div class="container">
          <div class="row">
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
              <h3 class="mb-0">Powerful Features for</h3>
              <h3>Your Business</h3>
  
              <div class="row gy-4">
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-eye" style="color: #ff8b2c;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-infinity" style="color: #5578ff;"></i>
                    <span>Sit amet consectetur adipisicing</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                    <span>Ipsum Rerum Explicabo</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-star" style="color: #ffa76e;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                    <span>Sit amet consectetur adipisicing</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                    <span>Ipsum Rerum Explicabo</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="bi bi-activity" style="color: #ff5828;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
              </div>
            </div>
            <div class="col-lg-5 position-relative" data-aos="zoom-out" data-aos-delay="200">
              <div class="phone-wrap">
                <img src="assets/img/iphone.png" alt="Image" class="img-fluid">
              </div>
            </div>
          </div>
  
        </div>
  
        {{-- <div class="details">
          <div class="container">
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
                <a href="#about" class="btn-get-started">Get Started</a>
              </div>
            </div>
          </div>
        </div> --}}
  
      </section><!-- /Features Section -->
  
  
    </main>
  
    <footer id="footer" class="footer light-background">
  
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">Nova</span>
              </a>
              <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
              <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
  
            <div class="col-lg-2 col-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
  
            <div class="col-lg-2 col-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
              <h4>Contact Us</h4>
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p>United States</p>
              <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container copyright text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Nova</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
  
    </footer>
  
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    {{-- <!-- Preloader -->
    <div id="preloader"></div> --}}
  
    <!-- Vendor JS Files -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>

</html>
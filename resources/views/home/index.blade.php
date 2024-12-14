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
	<x-header :content="$content" :page="$page"></x-header>
    <main class="main">
		<x-banner :content="$content"></x-banner>
		<x-about :content="$content"></x-about>
		<x-video :content="$content"></x-video>
		<x-gallery :content="$content"></x-gallery>
		<x-services :content="$content" :services="$services"></x-services>
		<x-units :content="$content"></x-units>
		<x-contact :content="$content"></x-contact>
		<x-advices></x-advices>
    </main>
    <x-footer></x-footer>
	<x-cookies></x-cookies>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
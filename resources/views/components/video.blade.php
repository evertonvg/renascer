@if($content->video_mode!='desativado')
  <section id="video">
    <div class="container">
      <h2>{{$content->video_title}}</h2>
      @if($content->video_description!='')
      <p>{{$content->video_description}}</p>
      @endif
      @if($content->video_archive!='')
      <video controls poster="{{ Voyager::image($content->video_poster) }}" id="video-player" preload="auto">
        <source src="{{Storage::url((json_decode($content->video_archive))[0]->download_link)}}" type="video/mp4" >
        Your browser does not support the video tag.
      </video>
      @elseif($content->video_url!='')
      <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$content->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      @endif
    </div>
  </section>
@endif
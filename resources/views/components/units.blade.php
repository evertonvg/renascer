@if($content->units_mode!='desativado')
<section id="units">
  <div class="container">
    <h2>{{$content->units_title}}</h2>
    @if($content->units_description)
        <p>{{$content->units_description}}</p>
    @endif
    
  </div>
</section>
@endif
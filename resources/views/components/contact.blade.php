@if($content->contact_mode!='desativado')
<section id="contact">
  <div class="container">
    <h2>{{$content->contact_title}}</h2>
    @if($content->contact_description)
        <p>{{$content->contact_description}}</p>
    @endif
    <form action="" id="submit-form" name="submitForm" method="POST">
      <!-- Campo para Nome -->
      <div class="mb-3 position-relative">
          <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome seguido de seu sobrenome" >
          <label for="name" class="form-label">Nome</label>
      </div>
      
      <!-- Campo para Email -->
      <div class="mb-3 position-relative">
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor email" >
          <label for="email" class="form-label">E-mail</label>
      </div>
      
      <!-- Campo para Mensagem -->
      <div class="mb-3 position-relative">
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Deixe sua mensagem" ></textarea>
          <label for="message" class="form-label">Mensagem</label>
      </div>
      
      <!-- Botão de Envio -->
      <div class="form-actions">
          <button type="submit" class="btn btn-primary submit">Enviar</button>
      </div>
  </form>
  </div>
</section>
@endif
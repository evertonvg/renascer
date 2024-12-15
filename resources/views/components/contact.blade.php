@if($content->contact_mode!='desativado')
<section id="contact">
  <div class="container">
    <h2>{{$content->contact_title}}</h2>
    @if($content->contact_description)
        <p>{{$content->contact_description}}</p>
    @endif
    <form action="" id="submit-form" name="submitForm" method="POST">
      <!-- Campo para Nome -->
      <div class="mb-4 position-relative form-group">
          <label for="name" class="form-label">Nome</label>
          <input type="text" 
            class="form-control" 
            id="name" 
            name="name" 
            placeholder="Digite seu nome seguido de seu sobrenome. Ex: Antônio da Silva" 
            data-pristine-required
            data-pristine-required-message="O nome é requerido"
            >
      </div>
      
      <!-- Campo para Email -->
      <div class="mb-4 position-relative form-group">
          <label for="email"  class="form-label">E-mail</label>
          <input 
            type="text" 
            class="form-control" 
            id="email" 
            name="email" 
            placeholder="Digite seu melhor email" 
            data-pristine-type="email"
            data-pristine-required
            data-pristine-email-message="Digite um e-mail válido"
            data-pristine-required-message="Digite um e-mail"
            >
      </div>

      <!-- Campo para whatsapp -->
      <div class="mb-4 position-relative form-group">
        <label for="whatsapp" class="form-label">Whatsapp</label>
        <input 
            type="text" 
            class="form-control whatsapp" 
            id="whatsapp" name="whatsapp" 
            placeholder="Digite seu whatsapp. Ex: (53)98484-8484"
            data-pristine-required 
            data-pristine-minlength="14" 
            data-pristine-minlength-message="Digite um whatsapp com DDD + 9 digitos"
            data-pristine-required-message="Digite um whatsapp com DDD + 9 digitos">
    </div>
      
      <!-- Campo para Mensagem -->
      <div class="mb-4 position-relative form-group">
          <label for="message" class="form-label">Mensagem</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Deixe sua mensagem" 
          data-pristine-required 
          data-pristine-minlength="10" 
          data-pristine-minlength-message="Sua mensagem deve ter no minimo 10 caracteres"
          data-pristine-required-message="Sua mensagem deve ter no minimo 10 caracteres"></textarea>
      </div>
      
      <!-- Botão de Envio -->
      <div class="form-actions">
          <button type="submit" class="btn btn-dark submit">Enviar</button>
      </div>
  </form>
  </div>
</section>

@endif
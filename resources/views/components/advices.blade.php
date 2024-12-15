<div class="alert alert-primary advice">
  Enviando sua mensagem! Aguarde...
  <button type="button" class="btn-close"></button>
</div>
<div class="alert alert-success advice">
  Mensagem enviada com sucesso!
  <button type="button" class="btn-close"></button>
</div>
<div class="alert alert-danger advice">
  Erro ao enviar a mensagem! Tente mais tarde.
  <button type="button" class="btn-close"></button>
</div>
@if($page->whatsapp)
  <a href="https://api.whatsapp.com/send?phone={{$page->whatsapp}}&text=Olá,%20gostaria%20de%20informações%20sobre%20a%20renascer" class="float-button" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
@endif
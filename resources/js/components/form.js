import axios from "axios";
import throttle from "../utils/throttle";
export default function sendForm(){
  
  const form = document.forms['submitForm']

  $(document).keyup(function(e) {
		if (e.key === "Escape") { 
      $('.alert-primary.advice').removeClass('show')
      $('.alert-success.advice').removeClass('show')
      $('.alert-danger.advice').removeClass('show')
	  }
  })

  if(form){
    let pristine = new Pristine(form);
    $('input#whatsapp').mask('(00)00000-0000');


    pristine.addValidator(form.name, function(value) {
      if (value.split(' ').length >= 2 && value.split(' ')[1]!='' && value.length >= 5){
          return true;
      }
      return false;
    }, "Digite seu nome seguido do sobrenome. Mínimo de 5 caracteres", 2, false);


    form.addEventListener('submit',(ev)=>{
      ev.preventDefault()
      let valid = pristine.validate();
    
      if(!valid){
        $('.btn.btn-primary.submit').removeClass('disabled');
        return false
      }
      
      $('.alert-primary.advice').addClass('show')
      $('.alert-success.advice').removeClass('show')
      $('.alert-danger.advice').removeClass('show')

      
    
      axios.post('/api/enviar-email', {
        nome: form.name.value,
        email: form.email.value,
        telefone: form.whatsapp.value,
        assunto: form.subject.value,
        mensagem: form.message.value
      }).then(response => {

          $('.alert-primary.advice').removeClass('show')
          $('.alert-success.advice').addClass('show')
          $('.alert-danger.advice').removeClass('show')

        
      }).catch(error => {

          $('.alert-primary.advice').removeClass('show')
          $('.alert-danger.advice').addClass('show')
          $('.alert-success.advice').removeClass('show')

          console.error(error.response.data);
      }).finally(final =>{
        $('.btn.btn-primary.submit').removeClass('disabled')
        form.name.value = ''
        form.email.value = ''
        form.whatsapp.value = ''
        form.subject.value = ''
        form.message.value = ''
      });
      
    })
  }
}
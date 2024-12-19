export default function cookiesAccepted(){
  window.addEventListener('load',()=>{
    // Verifica se o cookie de consentimento já existe
  if (!document.cookie.split('; ').find(row => row.startsWith('cookies_accepted='))) {
      // Exibe o aviso
      document.getElementById('cookie-consent').style.display = 'block';
  }

  // Aceitar cookies
  document.getElementById('accept-cookies').onclick = function() {
      document.cookie = "cookies_accepted=true; path=/; max-age=" + 60 * 60 * 24 * 365;
      document.getElementById('cookie-consent').style.display = 'none';
  };

  // Recusar cookies
  document.getElementById('decline-cookies').onclick = function() {
      document.cookie = "cookies_accepted=false; path=/; max-age=" + 60 * 60 * 24 * 365;
      document.getElementById('cookie-consent').style.display = 'none';
  };
  })
} 
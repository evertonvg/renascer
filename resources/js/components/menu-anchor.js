export default function menuAnchor(){
  $('.navmenu a').click(function(ev){
		ev.preventDefault()
		const el = document.querySelector($(this).attr('data-href'))
		window.scrollTo({
			top: el.offsetTop - 80,
			behavior: 'smooth',
		});
	})
}
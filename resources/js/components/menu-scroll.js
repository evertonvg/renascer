const toggleScrolled = ()=>{
  const selectBody = document.querySelector('body');
  const selectHeader = document.querySelector('#header');
  if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
}
export default function menuScroll(){
  
  
  	
	document.addEventListener('scroll', toggleScrolled);
	window.addEventListener('load', toggleScrolled);
}
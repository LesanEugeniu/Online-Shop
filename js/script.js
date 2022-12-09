const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav1 = document.querySelector('.ul');
	const navLinks = document.querySelectorAll('.linkuri-nav');
	burger.addEventListener('click', ()=>{
		nav1.classList.toggle('nav-active');

		navLinks.forEach((link, index)=>{
			if(link.style.animation){
				link.style.animation ='';
			}
			else{
			link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
			}
		});
		burger.classList.toggle('toggle');
	});
}
navSlide();
// if( document.querySelector('.burger').classList.contains('toggle')){
	const body = document.body;
	let lastScroll = 0;
window.addEventListener("scroll", () => {

	const currentScroll = window.pageYOffset;
	if (currentScroll <= 0) {
		body.classList.remove("scroll-up");
		return;
	}

	if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
		body.classList.remove("scroll-up");
		body.classList.add("scroll-down");
	} else if (
		currentScroll < lastScroll &&
		body.classList.contains("scroll-down")
	) {
		body.classList.remove("scroll-down");
		body.classList.add("scroll-up");
	}
		lastScroll = currentScroll;
	
	});
//}

//La inceput animatia
function toNonActive(){
    document.querySelector(".first").classList.add("nonactive");
}
window.addEventListener("DOMContentLoaded",function(){
      setTimeout(toNonActive,1800);
});

  function preventScroll(e){
    e.preventDefault();
    e.stopPropagation();

    return false;
}
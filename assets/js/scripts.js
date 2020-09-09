
/* Navbar Scripts */
	// JS to collapse the navbar on scroll
window.onscroll = function() {scrollFunction()};
    navbar = document.getElementById("navbar");
function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    navbar.classList.add('nav-collapse');
  } else {
    navbar.classList.remove('nav-collapse');
  }
}
/* end of Navbar */






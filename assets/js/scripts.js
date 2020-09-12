/* Navbar Scripts */
	// JS to collapse the navbar on scroll
navbar = document.getElementById("navbar");
function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    navbar.classList.add('nav-collapse');
  } else {
    navbar.classList.remove('nav-collapse');
  }
}
window.onscroll = function() {scrollFunction()};
/* end of Navbar */






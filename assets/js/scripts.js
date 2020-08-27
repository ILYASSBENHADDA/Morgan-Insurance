
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


/* Calculation Devis */
function myCalc() {
  var num_cv = document.getElementById('num_cv').value;
  var price_year = document.getElementById('price_year');
  var price_six_mounth = document.getElementById('price_six_mounth');

  /* Pour Essence */
      /* 1 ans */
      var E_CV_4_6    = 2284.66;
      var E_CV_7_8    = 2764.35;
      var E_CV_9_11   = 2994.55;

      /* 6 mois */
      var E_CV_4_6_x  = 1226.48;
      var E_CV_7_8_x  = 1477.29;
      var E_CV_9_11_x = 1597.65;

  /* Pour Diesel */
      /* 1 ans */
      var D_CV_4_6    = 2284.66;
      var D_CV_7_8    = 2994.55;
      var D_CV_9_11   = 4273.32;

      /* 6 mois */
      var D_CV_4_6_x  = 1226.48;
      var D_CV_7_8_x  = 1597.65;
      var D_CV_9_11_x = 2266.24;

  var selection = document.getElementById('list_carburant');
  var carburant = selection.options[selection.selectedIndex].text;

  var dangerAlert = document.getElementById('danger-notification');  

  
  
  // Essence Conditions
  if (carburant == "Essence" && num_cv >= 4 && num_cv <= 6) {
    price_year.innerHTML = E_CV_4_6 +" Dhs"
    price_six_mounth.innerHTML = E_CV_4_6_x +" Dhs"
  }
  else if (carburant == "Essence" && num_cv > 6 && num_cv <= 8) {
    price_year.innerHTML = E_CV_7_8 +" Dhs"
    price_six_mounth.innerHTML = E_CV_7_8_x +" Dhs"
  }

  else if (carburant == "Essence" && num_cv > 8 && num_cv <= 11) {
    price_year.innerHTML = E_CV_9_11 +" Dhs"
    price_six_mounth.innerHTML = E_CV_9_11_x +" Dhs"
  }

  // Diesel Conditions
  if (carburant == "Diesel" && num_cv >= 4 && num_cv <= 6) {
    price_year.innerHTML = D_CV_4_6 +" Dhs"
    price_six_mounth.innerHTML = D_CV_4_6_x +" Dhs"
  }

  else if (carburant == "Diesel" && num_cv > 6 && num_cv <= 8) {
    price_year.innerHTML = D_CV_7_8 +" Dhs"
    price_six_mounth.innerHTML = D_CV_7_8_x +" Dhs"
  }

  else if (carburant == "Diesel" && num_cv > 8 && num_cv <= 11) {
    price_year.innerHTML = D_CV_9_11 +" Dhs"
    price_six_mounth.innerHTML = D_CV_9_11_x +" Dhs"
  }

  // Validation
  if (carburant === "-- Type Carburant --") {
      dangerAlert.style.display = 'block';
      dangerAlert.innerHTML = "Choice Le Type Du Carburant!";
      return false;
  }
  
  if (num_cv == "") {
    dangerAlert.style.display = 'block';
    dangerAlert.innerHTML = "Le Champ est Vide, Veuillez Saisir Un Nombre";
    return false;
  }

  if (num_cv < 4 || num_cv > 11 ) {
      dangerAlert.style.display = 'block';
      dangerAlert.innerHTML = "Entrez Un Nombre Supérieur à 4 Ou égal";
      return false;
  }

  dangerAlert.style.display = 'none';
  dangerAlert.innerHTML = "";
  return true;

}



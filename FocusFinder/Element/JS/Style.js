let Taille_titre = (screen.height - (document.getElementById("Navbarre").offsetHeight));

var elementsTitre = document.querySelectorAll(".Titre");
for (let i = 0; i < elementsTitre.length; i++) {
  elementsTitre[i].style.height = Taille_titre + "px";
}

window.addEventListener('scroll', function () {
  const elements = document.querySelectorAll('.Contenue-Bloc');
  for (let i = 0; i < elements.length; i++) {
    if (isElementInViewport(elements[i])) {
      elements[i].classList.add('actif');
    }
  }
});

function isElementInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.bottom >= (window.innerHeight || document.documentElement.clientHeight)
  );
}



var bouton_navbarre_statut = false;
function bouton_navbarre() {
  if (bouton_navbarre_statut == false) {
    document.getElementById('Image-burger').style.rotate = "90deg"
    document.getElementById('Navbarre-burger').style.display = "flex";
    bouton_navbarre_statut = true;
  } else {
    document.getElementById('Image-burger').style.rotate = "0deg"
    document.getElementById('Navbarre-burger').style.display = "none";
    bouton_navbarre_statut = false;
  }
  
}



// window.addEventListener('scroll', function() {
//     var scrollPosition = Math.floor(document.documentElement.scrollTop || document.body.scrollTop);
//     document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).style.transform = "translateY(" + scrollPosition + "px)";

//     var TitrePosition = document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).parentNode.offsetHeight - document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).offsetHeight;
//     if (scrollPosition <= TitrePosition) {
//         document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).style.opacity = "1";
//         document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).style.transition = ".5s all";
//     } else {
//         document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).style.transition = ".0s all";
//         document.getElementById('Titre-' + new URLSearchParams(window.location.search).get('page')).style.opacity = "0";
//     }
// });
function contacter() {
    window.location.href = "mailto:Focus-FocusAnalyzer?subject=Accès à FocusAnalyzer pour les professionnels.&body=Bonjour,%0D%0AJe souhaiterais avoir accès à FocusFinder en tant que professionnel travaillant avec des patients atteints de TDAH.%0D%0A%0D%0ANom :%0D%0APrénom : %0D%0AE-mail : %0D%0ANuméro de téléphone : %0D%0AMétier : %0D%0A%0D%0A";
}

function FocusFinder_test() {
    if (connexion == true) {
        var data1 = valeur_compte[0];
        var data2 = valeur_compte[1];

        localStorage.setItem("data1", data1);
        localStorage.setItem("data2", data2);

        window.open("Test/Test.html", "_blank");
    } else {
        Erreur("Content", "Tu n'es pas encore connecté, vas-y tout de suite.<br><p onclick=\"Page('Inscription')\">Se connecter</p>");
    }
}

function Erreur(Image, Contenue) {
    let Image_type = ["Lunette", "Heureux", "Soupirant", "Choque", "Coeur"];
        
    document.getElementById("erreur-message").innerHTML = Contenue;
    if (Image_type.includes(Image)) {
        document.getElementById("erreur-image").src = "Element/Image/" + Image + ".svg"; 
    } else {
        document.getElementById("erreur-image").src = "Element/Image/Heureux.svg";
    }
    
    document.getElementById("erreur").style.transform = "translateX(0vw)";
    setTimeout(function () {
        document.getElementById("erreur").style.transform = "translateX(30vw)";
    }, 7500);
}
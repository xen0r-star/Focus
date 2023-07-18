const Page_tableau = {
    'TDAH' : {couleur : "#120E16", scroll : "scroll"},
    'FocusFinder' : {couleur : "#0F160E", scroll : "hidden"},
    'FocusAnalyzer' : {couleur : "#250F02", scroll : "hidden"},
    'Aide' : {couleur : "#0E0E16", scroll : "scroll"},
    'Inscription' : {couleur : "#1D0101", scroll : "hidden"},
}

var information_compte = [];


if (new URLSearchParams(window.location.search).get('page') != null) {
    if (new URLSearchParams(window.location.search).get('page') == "") {
        Changement_page("TDAH");
        window.history.pushState({path: window.location.href + "TDAH"}, '', window.location.href + "TDAH"); // Modifier l'URL
    } else {
        Changement_page(new URLSearchParams(window.location.search).get('page'));
    }
} else {
    Changement_page("TDAH");
    window.history.pushState({path: window.location.href + "?page=TDAH"}, '', window.location.href + "?page=TDAH"); // Modifier l'URL
}

function Page(Id_bloc) {
    window.scrollTo(0, 0);
    if (Id_bloc == "Inscription" || Id_bloc == "Profil") {
        Id_bloc = "Inscription";
    }
    Changement_page(Id_bloc);

    let newUrl = (window.location.href.indexOf("?") != -1) ? window.location.href.substring(0, window.location.href.indexOf("?") + 1) + "page=" + Id_bloc : window.location.href + "?page=" + Id_bloc;
    window.history.pushState({path: newUrl}, '', newUrl); // Modifier l'URL
}

function Changement_page(Id) {
    for (let i = 0; i < Object.keys(Page_tableau).length; i++) {
        document.getElementById("Bloc-" + Object.keys(Page_tableau)[i]).style.display = "none";   
    }

    if (Id == "Inscription") {
        if (connexion == true) {
            document.title = "Focus | Profil";
            document.getElementById("Partie-Inscription").style.display = "none";
            document.getElementById("Partie-Profil").style.display = "block";

            Profil_utilisateur(valeur_compte[0], valeur_compte[1], function(information_compte) {
                document.getElementById('Profil-nom').innerHTML = information_compte[6] + " " + information_compte[5];

                let classe1 = document.getElementsByClassName('Profil-Text2-reponse');
                for (let i = 0; i < classe1.length; i++) {
                    classe1[i].innerHTML = information_compte[i];
                }

                let classe2 = document.getElementsByClassName('Profil-Text3-reponse');
                classe2[0].innerHTML = information_compte[7];
                classe2[1].innerHTML = information_compte[8];
                
                let classe3 = document.getElementsByClassName('Profil-Text4-reponse');
                for (let i = 0; i < classe3.length; i++) {
                    classe3[i].innerHTML = information_compte[i + 9];
                }
            });
        } else {
            document.title = "Focus | Inscription";
            document.getElementById("Message-inscription").style.display = "none";
            document.getElementById("Formulaire-1").style.display = "flex";
            document.getElementById("Formulaire-0").style.display = "none";
            document.getElementById("Formulaire-2").style.display = "none";
            document.getElementById("Formulaire-3").style.display = "flnoneex";
            document.getElementById("Partie-Inscription").style.display = "block";
            document.getElementById("Partie-Profil").style.display = "none";
        }
    } else {
        document.title = "Focus | " + Id;
    }
    
    document.body.style.backgroundColor = Page_tableau[Id].couleur;
    document.body.style.overflowY = Page_tableau[Id].scroll;
    document.getElementById("Bloc-" + Id).style.display = "block";
}
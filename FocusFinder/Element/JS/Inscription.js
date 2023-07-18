var statut_element = 1;
var valeur_inscription = ['', '', '', '', '', '', ''];
var valeur_connexion = ['', ''];
var connexion = false;
var verif_email = false;
var valeur_compte = ['', ''];


document.getElementById('text-navbarre-5').innerHTML = (connexion == true) ? "Profil" : "Inscription";
document.getElementById('text-navbarre-burger-5').innerHTML = (connexion == true) ? "Profil" : "Inscription";
let var_time = (connexion == true) ? 'Inscription' : 'Profil';
document.getElementById('Partie-' + var_time).style.display = "none";

for (let i = 0; i <= 3; i++) {
    document.getElementById('Formulaire-' + i).style.display = "none";
}
document.getElementById('Formulaire-1').style.display = "flex";

function Element(Type_bouton) {
    if (Type_bouton === 2 || Type_bouton === 4 || Type_bouton === 6 || Type_bouton === 8) {
        switch (Type_bouton) {
            case 8:
                if (document.getElementById("Input-formulaire-9").value.indexOf("@") != -1 && document.getElementById("Input-formulaire-10").value != "") {
                    statut_element--;
                }
                break;
            case 2:
                if (document.getElementById("Input-formulaire-1").value != "" && document.getElementById("Input-formulaire-2").value != "" && document.getElementById("Input-formulaire-3").value.indexOf("@") != -1  && verif_email == true) {
                    statut_element++;
                }
                break;
            case 4:
                if (/^\d+$/.test(document.getElementById("Input-formulaire-4").value)) {
                    statut_element++;
                }
                break;
            case 6:
                if (document.getElementById("Input-formulaire-7").value != "" && document.getElementById("Input-formulaire-7").value === document.getElementById("Input-formulaire-8").value) {
                    statut_element++;
                }
                break;
            default:
                break;
        }   
    } else if (Type_bouton === 7) {
        statut_element++;
    } else {
        statut_element--;
    }
    
    for (let i = 0; i <= 3; i++) {
        document.getElementById('Formulaire-' + i).style.display = "none";
    }

    if (statut_element >= 0 && statut_element <= 3) {
        document.getElementById('Formulaire-' + statut_element).style.display = "flex";
    } else if (statut_element < 0) {
        document.getElementById('Formulaire-0').style.display = "flex";
        valeur_connexion[0] = document.getElementById("Input-formulaire-9").value // Stocké valeur connexion
        valeur_connexion[1] = document.getElementById("Input-formulaire-10").value

        for (let i = 0; i < 10; i++) { // vider le formulaire
            document.getElementById("Input-formulaire-" + (i + 1)).value = "";
        }

        Verifier_compte(valeur_connexion[0], valeur_connexion[1]);
    } else {
        document.getElementById('Formulaire-3').style.display = "flex";
        for (let i = 0; i < 7; i++) {
            valeur_inscription[i] = document.getElementById("Input-formulaire-" + (i + 1)).value // Stocké valeur inscription
        }

        for (let i = 0; i < 10; i++) { // vider le formulaire
            document.getElementById("Input-formulaire-" + (i + 1)).value = "";
        }

        Inscrire_compte(valeur_inscription[2], valeur_inscription[0], valeur_inscription[1], valeur_inscription[3], valeur_inscription[4], valeur_inscription[5], valeur_inscription[6]);
    }
}

function Test_imput(Formulaire) {
    let erreur_input = 0;

    switch (Formulaire) {
        case 0:
            if (document.getElementById("Input-formulaire-9").value.indexOf("@") === -1 || document.getElementById("Input-formulaire-10").value === "") {
                erreur_input++;
            }
            break;
        case 1:
            Verifier_email(document.getElementById("Input-formulaire-3").value, function(resulta) {
                if (resulta == false && document.getElementById("Input-formulaire-3").value != "" && document.getElementById("Input-formulaire-3").value.indexOf("@") != -1 ) {
                    document.getElementById('Input-formulaire-3-image').src = "Element/Image/V.svg";
                    verif_email = true;
                } else {
                    document.getElementById('Input-formulaire-3-image').src = "Element/Image/X.svg";
                    verif_email = false;
                }

                if (document.getElementById("Input-formulaire-1").value === "" || document.getElementById("Input-formulaire-2").value === "" || verif_email === false) {
                    erreur_input++;
                }

                if (erreur_input > 0) {
                    document.getElementById("Bouton-inscription-" + Formulaire).style.color = "#940b0b";
                } else {
                    document.getElementById("Bouton-inscription-" + Formulaire).style.color = "#0b9414";
                }
            });
            break;
        case 2:
            if (!(/^\d+$/.test(document.getElementById("Input-formulaire-4").value))) {
                erreur_input++
            }
            break;
        case 3:
            if (document.getElementById("Input-formulaire-7").value === "" || document.getElementById("Input-formulaire-7").value != document.getElementById("Input-formulaire-8").value) {
                erreur_input++
            }
            break;
        default:
            break;
    }

    if (erreur_input > 0) {
        document.getElementById("Bouton-inscription-" + Formulaire).style.color = "#940b0b";
    } else {
        document.getElementById("Bouton-inscription-" + Formulaire).style.color = "#0b9414";
    }
}

function Verifier_email(email, renvoye) {
    document.getElementById('Input-formulaire-3-image').src = "Element/Image/O.svg";
    var xhttp = new XMLHttpRequest(); // requete HTTP POST pour tester des information dans un script PHP
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if (response.email == false) {
                renvoye(response.email);
            } else {
                renvoye(response.email);
            }
        }
    };
    xhttp.open("GET", "Element/DB/Verifier_email.php?email=" + encodeURIComponent(email), true);
    xhttp.send();
}



function Affiche_MDP(id, event) {
    document.getElementById(id).type = (document.getElementById(id).type == "password") ? "text" : "password";
    event.target.src = (event.target.src.split('/').pop() == "oeil-2.svg") ? "Element/Image/oeil-1.svg" : "Element/Image/oeil-2.svg";
}

function MDP_long(id, MDP) {
    let force = 0;

    if (/[A-Z]/.test(MDP)) {
        force += 1;
    }
    if (/[a-z]/.test(MDP)) {
        force += 1;
    }
    if (/[0-9]/.test(MDP)) {
        force += 1;
    }
    if (/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(MDP)) {
        force += 1;
    }

    if (MDP.length >= 6 && MDP.length <= 10) {
        force += 2;
    } else if (MDP.length > 10) {
        force += 3;
    } else {
        force += 1;
    }

    
    force = (force / 7) * 100;

    if (force <= 35) {
        document.getElementById('MDP-ligne-inscription').style.backgroundColor = "#8f0000";
    } else if (force > 35 && force <= 65) {
        document.getElementById('MDP-ligne-inscription').style.backgroundColor = "#8f6500";
    } else {
        document.getElementById('MDP-ligne-inscription').style.backgroundColor = "#438f00";
    }

    document.getElementById(id).style.width = force + "%";
}

function Test_et_MDP(Formulaire, id, MDP) {
    Test_imput(Formulaire);
    MDP_long(id, MDP);
}



function Profil() {
    document.getElementById('text-navbarre-5').innerHTML = "Profil";
    document.getElementById('text-navbarre-burger-5').innerHTML = "Profil";
    Page("Inscription");
}

function Profil_utilisateur(email, motdepasse, renvoye) {
    var xhttp = new XMLHttpRequest(); // requete HTTP POST pour tester des information dans un script PHP
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if (response.success == true) {
                tableau = [];
                tableau.push(response.age);
                tableau.push(response.type);
                tableau.push(response.sexe);
                tableau.push(response.pronom);
                tableau.push(response.date);
                tableau.push(response.nom);
                tableau.push(response.prenom);
                tableau.push(response.email);
                tableau.push(response.mdp);
                tableau.push(response.nombre_test);
                tableau.push(response.score_moyen);
                tableau.push(response.TDAH);
                renvoye(tableau);
            } else if (response.success == false) {
                Erreur("Soupirant", "Une erreur s'est produite");
            } else {
                Erreur("Choque", "Une erreur s'est produite");
            }
        }
    };
    xhttp.open("GET", "Element/DB/Profil_utilisateur.php?email=" + encodeURIComponent(email) + "&mdp=" + encodeURIComponent(motdepasse), true);
    xhttp.send();
}


function Exit_profil() {
    valeur_compte = [];
    connexion = false;
    Test_imput(0);
    Test_imput(1);

    document.getElementById('text-navbarre-5').innerHTML = "Inscription";
    document.getElementById('text-navbarre-burger-5').innerHTML = "Inscription";
    Page("Inscription");
}

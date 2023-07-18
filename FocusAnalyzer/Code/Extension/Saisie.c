#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <windows.h>
#include <time.h>
#include <math.h>

#include "FileH\Autre.h"
#include "FileH\Externe.h"
#include "FileH\Affichage.h"

// Commande
char Command_principale[8][10] = { //ensemble des commande principale disponible
    "Help",
    "User",
    "Internet",
    "DB",
    "Exit",
    "Stat",
    "Contact",
    "Reload"
};

char Command_user[2][10] = { //ensemble des paramètre de la commande User
    "-set",
    "-view"
};

char Command_stat[2][10] = { //ensemble des paramètre de la commande Stat
    "-all",
    "-user"
};

char *Utilisateur = "";


char Saisie() { 
    // Saisie commande
    Color(15,0);
        Text(40, 9, "Terminal FocusAnalyzer");
        Text(40, 10, "> "); 
    char contenue[30];
    Color(14,0);
        scanf("%s", &contenue);
    Color(15,0);

    // vérification des commandes
    int commande_erreur = 0;
    for (int i = 0; i < sizeof(Command_principale) / sizeof(*Command_principale); i++) { // Boucle pour parcourir le tableau de commandes Command_principale | sizeof (taille total du tableau en octets) | sizeof (*taille un element du tableau en octets)
        if (strncmp(Command_principale[i], contenue, strlen(Command_principale[i])) == 0) { // Verifie si la commande Command_principale[i] correspond a la chaine de caractères contenue
            switch (i + 1) { // Debut du bloc switch pour effectuer differentes actions en fonction de la valeur de i+1
            case 1: // Commande Help
                Color(9, 0);  Text(40, 12, "Liste des commandes :");
                Color(6, 0);  Text(43, 13, "Contact");
                Color(15, 0); Text(50, 13, " : Nous contacter en cas de probleme");
                Color(6, 0);  Text(43, 14, "DB");
                Color(15, 0); Text(45, 14, " : Tester la connexion a la base de donnees");
                Color(6, 0);  Text(43, 15, "Exit");
                Color(15, 0); Text(47, 15, " : Quitter le programme");
                Color(6, 0);  Text(43, 16, "Help");
                Color(15, 0); Text(47, 16, " : Liste des commandes");
                Color(6, 0);  Text(43, 17, "Internet");
                Color(15, 0); Text(51, 17, " : Tester la connexion a internet");
                Color(6, 0);  Text(43, 18, "Reload");
                Color(15, 0); Text(49, 18, " : efface et reaffiche le contenu du terminal");
                Color(6, 0);  Text(43, 19, "Stat-all");
                Color(15, 0); Text(51, 19, " : Afficher les statistiques generales des utilisateurs");
                Color(6, 0);  Text(43, 20, "Stat-user");
                Color(15, 0); Text(52, 20, " : Afficher les statistiques d'un utilisateur");
                Color(6, 0);  Text(43, 21, "User-view");
                Color(15, 0); Text(52, 21, " : Voir le compte utilisateur en cours");
                Color(6, 0);  Text(43, 22, "User-set");
                Color(15, 0); Text(51, 22, " : Definir son compte utilisateur");
                break;

            case 2: // Commande User
                if (strncmp(Command_user[0], contenue + strlen(Command_principale[i]), strlen(Command_user[0])) == 0) { // Verifie le parametre -set
                    Color(14,0);
                    Text(43, 12, "Chargement...");
                    if (DB() == 1 && Connexion() == 1) { // Verification base de donne et internet
                        Color(10,0);
                            Text(7, 10, "Connecter  ");
                            Text(7, 13, "Connecter  ");
                        Color(9, 0); Text(43, 12, "Connexion a votre compte");
                        Color(15, 0); 
                            Text(45, 14, "E-mail :");
                            Text(45, 16, "Mot de passe :");

                        char Email[50];
                        char Motdepasse[50];

                        Color(14,0);
                        Text(54, 14, ""); 
                        scanf("%s", &Email);
                        Text(60, 16, ""); 
                        scanf("%s", &Motdepasse);

                        Color(14,0);
                        Text(45, 20, "Chargement...");

                        int Id_utilisateur = Verifier_utilisateur(Email, Motdepasse); // verifier utilisateur

                        if (Id_utilisateur != 0) {
                            Utilisateur = Nom_utilisateur(Id_utilisateur); // nom utilisateur
                            if (Utilisateur != "") { // Verification de l'utilisateur
                                Color(10,0); Text(45, 20, "Vous etes connecte");
                                Color(3,0);
                                    Text(7, 16, "                    ");
                                    Text(7, 16, Utilisateur);
                            } else {
                                Utilisateur = "";
                                Color(12,0); Text(45, 20, "Une erreur s'est produite! Veuillez recommencer");
                                Color(12,0); Text(7, 16, "Non connecter");
                            }
                        } else {
                            Utilisateur = "";
                            Color(12,0); Text(45, 20, "Une erreur s'est produite! Vous n'etes pas inscrits");
                            Color(12,0); Text(7, 16, "Non connecter");
                        }
                    } else {
                        Color(12,0);
                        if (DB() == 0) {
                            Text(7, 10, "Deconnecter");
                        }

                        if (Connexion() == 0) {
                            Text(7, 13, "Deconnecter");
                        }

                        Color(14,0);
                            Text(43, 12, "Impossible de se connecter a la base de donnees ou a Internet");
                            Text(43, 13, "Veuillez verifier votre connexion et reessayer avec les commandes");
                        Color(6, 0);  Text(45, 14, "DB");
                        Color(15, 0); Text(47, 14, " : Tester la connexion a la base de donnees");
                        Color(6, 0);  Text(45, 15, "Internet");
                        Color(15, 0); Text(53, 15, " : Tester la connexion a internet");
                    }
                } else if (strncmp(Command_user[1], contenue + strlen(Command_principale[i]), strlen(Command_user[1])) == 0) { // Verifie le parametre -view
                    if (Utilisateur != "") { // Verification de l'utilisateur
                        Color(9, 0); Text(43, 12, "Vous etes deja connecte en tant que");
                        Color(10, 0); 
                            Text(79, 12, Utilisateur);
                            Text(7, 16, "                    ");
                        Color(3,0); Text(7, 16, Utilisateur);
                    } else {
                        Color(12, 0); Text(43, 12, "Vous n'etes pas encore connecter");
                        Color(15, 0); Text(43, 13, "Connectez-vous en utilisant la commande");
                        Color(10, 0); Text(83, 13, "User-set");
                        Color(12,0); Text(7, 16, "Non connecter");
                    }
                } else {
                    Color(12, 0); Text(40, 11, "Parametre de la commande User introuvable !");
                    Color(9, 0);  Text(43, 13, "Parametre de la commande User : ");
                    Color(6, 0);  Text(45, 14, "-set");
                    Color(15, 0); Text(49, 14, " : Definir son compte utilisateur");
                    Color(6, 0);  Text(45, 15, "-view");
                    Color(15, 0); Text(50, 15, " : Voir le compte utilisateur en cours");
                }
                break;

            case 3: // Commande Internet
                if (Connexion() == 1) { // Teste connexion internet | connecter/deconnecter (envoyer un baquet a google)
                    Color(10, 0);
                        Text(7, 10, "Connecter  ");
                        Text(40, 11, "Vous etes connecte a internet");
                } else {
                    Color(12, 0);
                        Text(7, 10, "Deconnecter");
                        Text(40, 11, "Vous n'etes pas connecte a internet");
                }
                break;

            case 4: // Commande BD
                if (DB() == 1) { // Teste connexion a la base de donne | connecter/deconnecter
                    Color(10, 0);
                        Text(7, 13, "Connecter  ");
                        Text(40, 11, "Vous etes connecte a la base de donnee");
                } else {
                    Color(12, 0);
                        Text(7, 13, "Deconnecter");
                        Text(40, 11, "Vous n'etes pas connecte a la base de donnee");
                }
                break;

            case 5: // Commande Exit
                char *Phrase[15] = { // phrase au revoir
                    "Merci d'avoir passe un peu de temps avec moi :)",
                    "Adieu, j'espere que vous reviendrez bientot pour une autre dose de fun.",
                    "C'est l'heure de se dire au revoir :(",
                    "Au plaisir de vous revoir bientot, pour le moment, bonne continuation !",
                    "Il est temps de se dire adieu. Allez profiter du beau temps (ou pas)",
                    "Bonne journee a vous, et n'oubliez pas de garder le sourire.",
                    "Il est temps pour moi de prendre conge, a la prochaine fois",
                    "Que la force soit avec vous!",
                    "Il est temps de dire au revoir :(",
                    "Au revoir, amusez-vous et profitez de la vie !",
                    "Au revoir, et n'oubliez pas de garder un sourire sur votre visage.",
                    "C'etait sympa de passer un peu de temps avec vous. A bientot !",
                    "Bonne continuation. Revenez me voir quand vous voulez !",
                    "Il est temps de dire au revoir, mais n'oubliez pas que la vie est belle !",
                    "Disons-nous au revoir et allons conquerir le monde"};

                Color(6, 0);
                    srand(time(NULL)); // Initialisation de la donnée seed
                    Text(40, 12, Phrase[rand() % 15]); // Sélectionne une phrase aléatoire

                Text(105, 24, "Stop : ");
                char *decompte[10] = {"0", "1", "2", "3", "4", "5", "6", "7", "8", "9"};
                for (int i = 5; i > 0; i--) {
                    Text(110, 24, decompte[i]);
                    Sleep(1000);
                }

                free(Utilisateur);
                exit(1);
                break;

            case 6: // Commande Stat
                if (strncmp(Command_stat[0], contenue + strlen(Command_principale[i]), strlen(Command_stat[0])) == 0) { // Verifie le parametre -all
                    Color(14, 0); Text(43, 12, "Chargement ...");
                    
                    if (Utilisateur != "") { // Verification de l'utilisateur
                        if (DB() == 1 && Connexion() == 1) { // Verification base de donne et internet
                            Color(10,0);
                                Text(7, 10, "Connecter  ");
                                Text(7, 13, "Connecter  ");
                                
                            float Personne_total, Score_moyen, Nombre_TDAH, Nombre_NTDAH;
                            Stat_generale(&Personne_total, &Score_moyen, &Nombre_TDAH); // stat generale

                            Color(9, 0); Text(43, 12, "Statistique Generale");
                            Color(15, 0); 
                                Text(45, 14, "Nombre total de personnes :");
                                Text(45, 15, "Score moyen :");
                            Color(1, 0); Text(45, 21, "#");
                            Color(15, 0); Text(47, 21, "TDAH :    % |");
                            Color(4, 0); Text(61, 21, "#");
                            Color(15, 0); Text(63, 21, "Non-TDAH :    %");

                            Color(9,0);
                                char* Resulat_stat = FloatVersChar(floor(Personne_total)); // transforme float en char
                                Text(73, 14, Resulat_stat);

                                Resulat_stat = FloatVersChar(floor(Score_moyen)); // transforme float en char
                                Text(59, 15, Resulat_stat);

                                Nombre_TDAH = floor(((Nombre_TDAH / Personne_total) * 100));
                                Resulat_stat = FloatVersChar(Nombre_TDAH); // transforme float en char
                                Text(54, 21, Resulat_stat);

                                Nombre_NTDAH = floor(100 - Nombre_TDAH);
                                Resulat_stat = FloatVersChar(Nombre_NTDAH); // transforme float en char
                                Text(74, 21, Resulat_stat);

                            for (int i = 0; i < 50; i++) {
                                if ((Nombre_TDAH / 2) >= i)
                                    Color(1,0);
                                else
                                    Color(15,0);
                                
                                Text(45 + i, 18, "#");
                            }
                            
                            for (int i = 0; i < 50; i++) {
                                if ((Nombre_NTDAH / 2) >= i)
                                    Color(4,0);
                                else
                                    Color(15,0);
                                
                                Text(45 + i, 19, "#");
                            }
                        } else {
                            Color(12,0);
                            if (DB() == 0) {
                                Text(7, 10, "Deconnecter");
                            }

                            if (Connexion() == 0) {
                                Text(7, 13, "Deconnecter");
                            }

                            Color(14,0);
                                Text(43, 12, "Impossible de se connecter a la base de donnees ou a Internet");
                                Text(43, 13, "Veuillez verifier votre connexion et reessayer avec les commandes");
                            Color(6, 0);  Text(45, 14, "DB");
                            Color(15, 0); Text(47, 14, " : Tester la connexion a la base de donnees");
                            Color(6, 0);  Text(45, 15, "Internet");
                            Color(15, 0); Text(53, 15, " : Tester la connexion a internet");
                        }
                    } else {
                        Color(14,0);
                            Text(43, 12, "Vous n'etes pas connecte a un compte.");
                            Text(43, 13, "Veuillez-vous connecter avec la commande");
                        Color(6, 0);  Text(45, 15, "User-set");
                        Color(15, 0); Text(53, 15, " : Definir son compte utilisateur");
                    }
                } else if (strncmp(Command_stat[1], contenue + strlen(Command_principale[i]), strlen(Command_stat[1])) == 0) { // Verifie le parametre -user
                    Color(14, 0); Text(43, 12, "Chargement ...");
                    
                    if (Utilisateur != "") { // Verification de l'utilisateur
                        if (DB() == 1 && Connexion() == 1) { // Verification base de donne et internet
                            Color(10,0);
                                Text(7, 10, "Connecter  ");
                                Text(7, 13, "Connecter  ");

                            Color(15, 0); Text(43, 12, "Voulez-vous rechercher un utilisateur par son    ou par son        ?");
                            Color(9, 0);  Text(89, 12, "ID");
                            Color(12, 0); Text(103, 12, "E-mail");
                            Color(15,0);
                                Text(47, 14, "| ID");
                                Text(47, 15, "| E-mail");
                            
                            Color(9,0); Text(45, 14, "1");
                            Color(12,0); Text(45, 15, "2");
                            Color(15,0); Text(47, 17, "Veuillez entrer le chiffre 1 ou 2 selon votre choix");
                            char Choix[2] = " ";
                            while(strncmp(Choix, "1", 1) != 0 && strncmp(Choix, "2", 1) != 0) { // Boucle tant que valeur n'est pas 1 ou 2
                                Color(14,0); Text(47, 18, "Votre choix :                                                  "); // eface le contenue
                                Text(61, 18, ""); // reposition le curseur
                                Color(15,0);
                                scanf(" %c", &Choix); // espace avant %c pour ignorer espaces vides ou caracteres de nouvelle ligne
                                if(strncmp(Choix, "1", 1) != 0 && strncmp(Choix, "2", 1) != 0) {
                                    Color(12,0); Text(47, 20, "Veuillez entrer la valeur 1 ou 2");
                                }
                            }

                            for (int i = 11; i <= 24; i++) { // Effacer contenu
                                Text(40, i, "                                                                         ");
                            }

                            char Donnee_recherche[50];
                            int Id_Recherche_utilisateur;

                            if (strcmp(Choix, "1") == 0) {
                                Color(15,0); Text(43, 12, "Recherche de l'utilisateur par son");
                                Color(9,0);  Text(78, 12, "ID");
                                Color(15,0); Text(45, 14, "ID de l'utilisateur : ");
                                Color(14,0);
                                scanf("%s",&Donnee_recherche);

                                Text(45, 16, "Chargement ...");
                                Id_Recherche_utilisateur = Recherche_utilisateur(1, Donnee_recherche); // recherche utilisateur
                                if (Id_Recherche_utilisateur != 0) {
                                    Color(9,0); Text(45, 16, "Utilisateur trouve !");
                                    Color(14,0); Text(45, 17, "Chargement ...");
                                } else {
                                    Color(12,0); Text(45, 16, "Une erreur s'est produite! L'utilisateur n'a pas etais trouver");
                                }

                            } else {
                                Color(15,0); Text(43, 12, "Recherche de l'utilisateur par");
                                Color(12,0);  Text(74, 12, "E-mail");
                                Color(15,0); Text(45, 14, "E-mail de l'utilisateur : ");
                                Color(14,0);
                                scanf("%s",&Donnee_recherche);

                                Text(45, 16, "Chargement ...");
                                Id_Recherche_utilisateur = Recherche_utilisateur(2, Donnee_recherche);
                                if (Id_Recherche_utilisateur != 0) {
                                    Color(9,0); Text(45, 16, "Utilisateur trouve !");
                                    Color(14,0); Text(45, 17, "Chargement ...");
                                } else {
                                    Color(12,0); Text(45, 16, "Une erreur s'est produite! L'utilisateur n'a pas etais trouver");
                                }
                            }

                            if (Id_Recherche_utilisateur != 0) {
                                for (int i = 11; i <= 24; i++) { // Effacer contenu
                                    Text(40, i, "                                                                         ");
                                }

                                Color(14,0); Text(43, 12, "Chargement ...");

                                char Information_Utilisateur[6][30]; // 0 => Nom | 1 => Prenom | 2 => Age | 3 => Sexe | 4 => Email | 5 => TDAH
                                Information_utilisateur(Id_Recherche_utilisateur, &Information_Utilisateur); // information utilisateur

                                int Score_moyen_Utilisateur, Nombre_donnee;
                                char Professionnel_nom[5][32];
                                int Score_Utilisateur[5];
                                char Date_test[5][20];
                                Nombre_donnee = Stat_utilisateur(Id_Recherche_utilisateur, &Score_moyen_Utilisateur, &Professionnel_nom, &Score_Utilisateur, &Date_test); // stat utilisateur
                                
                                // information utilisateur
                                Color(15,0);  Text(43, 12, "Statistique de");
                                char Resulta_information[65] = "";
                                strcat(Resulta_information, Information_Utilisateur[0]); // Conctaner Nom
                                strcat(Resulta_information, " "); // Conctaner Nom + " "
                                strcat(Resulta_information, Information_Utilisateur[1]); // Conctaner Nom + " " + Prenom
                                Color(9,0); Text(58, 12, Resulta_information);

                                Color(15,0); 
                                    Text(45, 14, "Nom :");
                                    Text(45, 15, "Prenom :");
                                    Text(45, 16, "Age :");
                                    Text(65, 14, "Sexe :");
                                    Text(65, 15, "TDAH :");
                                    Text(65, 16, "E-mail :");
                                    Text(87, 14, "Score moyen :");
                                Color(14,0); 
                                    Text(51, 14, Information_Utilisateur[0]);
                                    Text(54, 15, Information_Utilisateur[1]);
                                    Text(51, 16, Information_Utilisateur[2]);
                                    Text(72, 14, Information_Utilisateur[3]);
                                    if (strncmp(Information_Utilisateur[5], "Non", 3) == 0)
                                        Color(12,0);
                                    else if (strncmp(Information_Utilisateur[5], "Oui", 3) == 0)
                                        Color(10,0);
                                    else
                                        Color(14,0);
                                    Text(72, 15, Information_Utilisateur[5]);
                                Color(14,0); Text(74, 16, Information_Utilisateur[4]);
                                
                                // Stat utilisateur
                                if (Score_moyen_Utilisateur <= 25)
                                    Color(12,0);
                                else
                                    Color(10,0);
                                char *Resulta_StatU = IntVersChar(Score_moyen_Utilisateur); // transforme int en char
                                Text(101, 14, Resulta_StatU);
                                
                                for (int i = 0; i < Nombre_donnee; i++) {
                                    Color(15,0); Text(45, 18 + i, "Test   :");
                                    char *Compter[5] = {"1", "2", "3", "4", "5"};
                                    Color(9,0); Text(50, 18 + i, Compter[i]);

                                    if (Score_Utilisateur[i] > 25)
                                        Color(10,0);
                                    else
                                        Color(12,0);
                                    Resulta_StatU = IntVersChar(Score_Utilisateur[i]); // transforme int en char
                                    Text(55, 18 + i, Resulta_StatU);
                                    Color(15,0); Text(57, 18 + i, "/50");

                                    Color(15,0); Text(68, 18 + i, Professionnel_nom[i]);
                                    Color(14,0); Text(90, 18 + i, Date_test[i]);
                                }
                            }
                        } else {
                            Color(12,0);
                            if (DB() == 0) {
                                Text(7, 10, "Deconnecter");
                            }

                            if (Connexion() == 0) {
                                Text(7, 13, "Deconnecter");
                            }

                            Color(14,0);
                                Text(43, 12, "Impossible de se connecter a la base de donnees ou a Internet");
                                Text(43, 13, "Veuillez verifier votre connexion et reessayer avec les commandes");
                            Color(6, 0);  Text(45, 14, "DB");
                            Color(15, 0); Text(47, 14, " : Tester la connexion a la base de donnees");
                            Color(6, 0);  Text(45, 15, "Internet");
                            Color(15, 0); Text(53, 15, " : Tester la connexion a internet");
                        }
                    } else {
                        Color(14,0);
                            Text(43, 12, "Vous n'etes pas connecte a un compte.");
                            Text(43, 13, "Veuillez-vous connecter avec la commande");
                        Color(6, 0);  Text(45, 15, "User-set");
                        Color(15, 0); Text(53, 15, " : Definir son compte utilisateur");
                    }
                } else {
                    Color(12, 0); Text(40, 11, "Parametre de la commande Stat introuvable !");
                    Color(9, 0);  Text(43, 13, "Parametre de la commande Stat : ");
                    Color(6, 0);  Text(45, 14, "-all");
                    Color(15, 0); Text(49, 14, " : Afficher les statistiques generales des utilisateurs");
                    Color(6, 0);  Text(45, 15, "-user");
                    Color(15, 0); Text(50, 15, " : Afficher les statistiques d'un utilisateur");
                }
                break;

            case 7: // Commande Contact
                Color(9, 0);  Text(40, 12, "Besoin d'aide ? Notre service client est la !");
                Color(6, 0);  Text(43, 13, "Numero de telephone");
                Color(15, 0); Text(62, 13, " : 4848 25 25 25 (10\044/min)");
                Color(6, 0);  Text(43, 14, "E-mail");
                Color(15, 0); Text(49, 14, " : Focus-FocusAnalyzer\100gmail.com (1-5 jours)");
                system("start \"\" \"mailto:Focus-FocusAnalyzer@gmail.com?subject=Besoin d'aide&body=J'ai besoin de d'aide pour FocusAnalyzer,%0D%0A%0D%0ANom : %0D%0APr\351nom : %0D%0AE-mail : %0D%0ANum\351sro de t\351l\351phone : %0D%0ASujet de la demande d'aide : %0D%0A%0D%0A \"");
                break;
                
            case 8: // Commande Reload
                system("cls");
                Affichage(); // Afficher le contenue externe

                if (Utilisateur != "") { // Verification de l'utilisateur
                    Color(3,0); Text(7, 16, Utilisateur);
                } else {
                    Color(12,0); Text(7, 16, "Non connecter");
                }

                Color(9,0);
                Text(40, 9, "Terminal Reload !"); // Sélectionne une phrase aléatoire
                break;

            default:
                Color(12, 0); Text(40, 11, "Commande introuvable !");
                break;
            }
        } else {
            commande_erreur++;
        }
    }

    if (commande_erreur >= sizeof(Command_principale)/sizeof(*Command_principale)) {
        Color(12, 0); Text(40, 11, "Commande introuvable !");
    }

    Color(3,0); Text(40, 24, "[Appuyer sur la touche enter...]");
    Color(15,0);

    getchar(); // attendre que l'utilisateur appuie sur une touche
    getchar();

    for (int i = 9; i <= 24; i++) {
        Text(40, i, "                                                                         ");
    }
}

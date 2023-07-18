#include <stdio.h>
#include <stdlib.h>

#include "FileH\Autre.h"
#include "FileH\Externe.h"

int couleur_titre = 4;
int couleur_soustitre = 13;

int Affichage() { // Fonction pour affichais de contenue externe 
    Color(couleur_titre,0);
        Text(21, 0, " _____                            _                   _");
        Text(21, 1, "|  ___|___    ___  _   _  ___    / \\    _ __    __ _ | | _   _  ____ ___  _ __");
        Text(21, 2, "| |_  / _ \\  / __|| | | |/ __|  / _ \\  | '_ \\  / _` || || | | ||_  // _ \\| '__|");
        Text(21, 3, "|  _|| (_) || (__ | |_| |\\__ \\ / ___ \\ | | | || (_| || || |_| | / /|  __/| |");
        Text(21, 4, "|_|   \\___/  \\___| \\__,_||___//_/   \\_\\|_| |_| \\__,_||_| \\__, |/___|\\___||_|");
        Text(15, 5, "                                                               |___/");

    Color(15,0);
        Text(1, 2, "\311");
        Text(118, 2, "\273");
        Text(118, 28, "\274");
        Text(1, 28, "\310");
        for (int i = 2; i <= 19; i++) {
            Text(i, 2, "\315");
        }
        for (int i = 101; i <= 117; i++) {
            Text(i, 2, "\315");
        }
        for (int i = 2; i <= 117; i++) {
            Text(i, 28, "\315");
        }
        for (int i = 3; i <= 27; i++) {
            Text(1, i, "\272");
            Text(118, i, "\272");
        }


        Text(5, 7, "\311");
        Text(32, 7, "\273");
        Text(32,18, "\274");
        Text(5,18, "\310");
        for (int i = 6; i <= 31; i++) {
            Text(i, 7, "\315");
            Text(i, 18, "\315");
        }
        for (int i = 8; i <= 17; i++) {
            Text(5, i, "\272");
            Text(32, i, "\272");
        }
    Color(couleur_soustitre,0); Text(7, 7, " STATUE ");

    Color(15,0);
        Text(5, 20, "\311");
        Text(32, 20, "\273");
        Text(32, 26, "\274");
        Text(5, 26, "\310");
        for (int i = 6; i <= 31; i++) {
            Text(i, 20, "\315");
            Text(i, 26, "\315");
        }
        for (int i = 21; i <= 25; i++) {
            Text(5, i, "\272");
            Text(32, i, "\272");
        }
    Color(couleur_soustitre,0); Text(7, 20, " AIDE ");

    Color(15,0);
        Text(37, 7, "\311");
        Text(114, 7, "\273");
        Text(114, 26, "\274");
        Text(37, 26, "\310");
        for (int i = 38; i <= 113; i++) {
            Text(i, 7, "\315");
            Text(i, 26, "\315");
        }
        for (int i = 8; i <= 25; i++) {
            Text(37, i, "\272");
            Text(114, i, "\272");
        }
    Color(couleur_soustitre,0); Text(39, 7, " TERMINAL ");

    Color(15,0);
        Text(7, 9, "Connexion internet : ");
        Text(7, 12, "Base de donnees : ");
        Text(7, 15, "Utilisateurs : ");
        Text(7, 22, "Commande : ");
        Text(7, 24, "Utilisateurs : ");
    
    Color(3,0);
        Text(18, 22, "Help");
        Text(22, 24, "User-set");

    Color(6,0);
        Text(7, 10, "...");
        Text(7, 13, "...");
        Text(7, 16, "...");

    if (Connexion() == 1) { // Connexion internet connecter/deconnecter (envoyer un baquet a google)
        Color(10,0);
        Text(7, 10, "Connecter");
        Color(15,0);
    } else {
        Color(12,0);
        Text(7, 10, "Deconnecter");
        Color(15,0);
    }

    if (DB() == 1) { // Teste connexion a la base de donne | connecter/deconnecter
        Color(10,0);
        Text(7, 13, "Connecter");
        Color(15,0);
    } else {
        Color(12,0);
        Text(7, 13, "Deconnecter");
        Color(15,0);
    }
}
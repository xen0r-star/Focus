#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <windows.h>

void Color(int Couleur_texte,int Couleur_fond) { // fonction d'affichage de couleurs
        HANDLE H=GetStdHandle(STD_OUTPUT_HANDLE);
        SetConsoleTextAttribute(H,Couleur_fond*16+Couleur_texte);

        /* _______ COULEUR _______
            0 : Noir
            1 : Bleu foncé
            2 : Vert foncé
            3 : Turquoise
            4 : Rouge foncé
            5 : Violet
            6 : Vert caca d'oie
            7 : Gris clair
            8 : Gris foncé
            9 : Bleu fluo
            10 : Vert fluo
            11 : Turquoise
            12 : Rouge fluo
            13 : Violet 2
            14 : Jaune
            15 : Blanc
        */
}

void Text(int Colonne, int Ligne, char *Contenue) { // fonction pour afficher le contenue a un endroit specifique
    int Nombre_caractere = strlen(Contenue);
    HANDLE hConsole = GetStdHandle(STD_OUTPUT_HANDLE);
    COORD pos = { Colonne, Ligne };
    SetConsoleCursorPosition(hConsole, pos);
    WriteConsole(hConsole, Contenue, Nombre_caractere, NULL, NULL);

    /* _______ Symbole _______
        "═" decimal : 205 | octal : 315
        "║" decimal : 186 | octal : 272
        "╗" decimal : 187 | octal : 273
        "╔" decimal : 201 | octal : 311
        "╝" decimal : 188 | octal : 274
        "╚" decimal : 200 | octal : 310
    */
}

char* FloatVersChar(float nombre) {
    int entier = (int)nombre; // Retirer decimale
    
    int length = snprintf(NULL, 0, "%d", entier); // Calculer longueur minimale de la chaine
    char* str = malloc((length + 1) * sizeof(char)); // Allouer memoire pour la chaine
    snprintf(str, length + 1, "%d", entier); // Convertir nombre flottant en chaine de caracteres
    
    return str;
}

char* IntVersChar(int nombre) {
    int length = snprintf(NULL, 0, "%d", nombre); // Calculer longueur minimale de la chaine
    char* str = malloc((length + 1) * sizeof(char)); // Allouer memoire pour la chaine
    snprintf(str, length + 1, "%d", nombre); // Convertir nombre entier en chaine de caracteres

    return str;
}

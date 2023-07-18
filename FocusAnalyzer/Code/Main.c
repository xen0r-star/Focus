#include <stdio.h>
#include <stdlib.h>
#include <windows.h>

#include "Extension\FileH\Affichage.h"
#include "Extension\FileH\Saisie.h"
#include "Extension\FileH\Autre.h"


int main() {
    SetConsoleTitle("FocusAnalyzer"); // Titre du terminal

    Affichage(); // Afficher le contenue externe

    Color(12,0); Text(7, 16, "Non connecter");

    //Boucle de commande
    int Boucle_statue = 1;
    while (Boucle_statue == 1) {
        Saisie();
    }

    return 0;
}
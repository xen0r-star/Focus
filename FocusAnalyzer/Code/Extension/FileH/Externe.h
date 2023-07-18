#pragma once

int Connexion();

int DB();

int Verifier_utilisateur(const char* email, const char* mdp);

char *Nom_utilisateur(const int id);

void Stat_generale(float* Personne_total, float* Score_moyen, float* Nombre_TDAH);

int Recherche_utilisateur(const int Type, const char* Valeur);

void Information_utilisateur(const int Id, char (*Information)[6][30]);

int Stat_utilisateur(const int Id, int *Score_moyen, char (*professionnel)[5][32], int (*score)[5], char (*date)[5][20]);
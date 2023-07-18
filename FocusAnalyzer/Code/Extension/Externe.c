#include <stdio.h>
#include <stdlib.h>
#include <./mysql.h>

int Connexion() {
    if (system("ping -n 1 www.google.com > NUL") == 0) // Connexion internet connecter/deconnecter (envoyer un paquets a google)
        return 1;
    else
        return 0;
}


MYSQL *conn;
MYSQL_RES *res;
MYSQL_ROW row;

// Donne de connextion a la base de donnee
const char *server = "mysql-focus.alwaysdata.net";
const char *database = "focus_bdd";
const char *user = "focus";
const char *password = "lokijuhy655385hytr627t2htr";


int DB() {

    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de données
        mysql_close(conn); // Fermer la connexion
        return 0;
    }
    
    mysql_close(conn); // Fermer la connexion

    return 1;
}


int Verifier_utilisateur(const char* email, const char* mdp) {

    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de données
        mysql_close(conn); // Fermer la connexion
        return 0;
    }

    char SQL[150];
    snprintf(SQL, sizeof(SQL), "SELECT id FROM Utilisateur WHERE email='%s' AND mdp='%s'", email, mdp); // requete SQL
    
    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
        return 0;
    }
    
    res = mysql_use_result(conn); // Resultat requete
    
    int id = 0;
    if ((row = mysql_fetch_row(res)) != NULL) {
        id = atoi(row[0]); // Valeur id
    }
    
    mysql_free_result(res); // Liberer memoire
    mysql_close(conn); // Fermer connexion
    
    return id;
}


char *Nom_utilisateur(const int id) {

    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de données
        mysql_close(conn); // Fermer la connexion
        return "";
    }

    char SQL[100];
    snprintf(SQL, sizeof(SQL), "SELECT CONCAT(SUBSTRING(prenom, 1, 1), '.', nom) FROM Utilisateur WHERE id=%d", id); // Requete SQL
    
    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
        return "";
    }
    
    res = mysql_use_result(conn); // Resultat requete
    char *Resulta = malloc(24 * sizeof(char)); // taille 24 * taille d'un char

    if ((row = mysql_fetch_row(res)) != NULL) {
        strcpy(Resulta, row[0]); // Prenom.nom
    }
    
    mysql_free_result(res); // Liberer memoire
    mysql_close(conn); // Fermer connexion
    
    return Resulta;
}


void Stat_generale(float* Personne_total, float* Score_moyen, float* Nombre_TDAH) {
    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de données
        mysql_close(conn); // Fermer la connexion
    }

    char SQL[100];
    snprintf(SQL, sizeof(SQL), "SELECT COUNT(id), ROUND(AVG(Score), 0), COUNT(CASE WHEN Score <= 25 THEN 1 END) FROM Client"); // Requete SQL
    
    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
    }
    
    res = mysql_use_result(conn); // Resultat requete

    if ((row = mysql_fetch_row(res)) != NULL) {
        *Personne_total = atof(row[0]); // Personne total
        *Score_moyen = atof(row[1]); // score moyen des client
        *Nombre_TDAH = atof(row[2]); // nombre de personne qui on un score qui montre de la TDAH <= 25
    }
    
    mysql_free_result(res); // Liberer memoire
    mysql_close(conn); // Fermer connexion
}


int Recherche_utilisateur(const int Type, const char* Valeur) { // Type => 1 = ID | 2 = E-mail
    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de données
        mysql_close(conn); // Fermer la connexion
        return 0;
    }

    char SQL[150];
    if(Type == 1) {
        snprintf(SQL, sizeof(SQL), "SELECT id FROM Utilisateur WHERE id = '%s'", Valeur); // Requete SQL
    } else {
        snprintf(SQL, sizeof(SQL), "SELECT id FROM Utilisateur WHERE email = '%s'", Valeur); // Requete SQL
    }

    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
        return 0;
    }
    
    res = mysql_use_result(conn); // Resultat requete

    int id = 0;
    if ((row = mysql_fetch_row(res)) != NULL) {
        id = atoi(row[0]); // Valeur id
    }
    
    mysql_free_result(res); // Liberer memoire
    mysql_close(conn); // Fermer connexion
    
    return id;
}


void Information_utilisateur(const int Id, char (*Information)[6][30]) {
    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de donnees
        mysql_close(conn); // Fermer la connexion
    }

    char SQL[100];
    snprintf(SQL, sizeof(SQL), "SELECT nom, prenom, age, sexe, email, TDAH FROM Utilisateur WHERE id = %d", Id); // Requete SQL

    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
    }
    
    res = mysql_use_result(conn); // Resultat requete

    if ((row = mysql_fetch_row(res)) != NULL) {
        strcpy((*Information)[0], row[0]); // nom
        strcpy((*Information)[1], row[1]); // prenom
        strcpy((*Information)[2], row[2]); // age
        strcpy((*Information)[3], row[3]); // sexe
        strcpy((*Information)[4], row[4]); // email
        strcpy((*Information)[5], row[5]); // TDAH
    }
    
    mysql_free_result(res); // Liberer memoire
    mysql_close(conn); // Fermer connexion
}



int Stat_utilisateur(const int Id, int *Score_moyen, char (*professionnel)[5][32], int (*score)[5], char (*date)[5][20]) {
    conn = mysql_init(NULL);

    if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) { // Connexion à la base de données
        mysql_close(conn); // Fermer la connexion
    }

    char SQL[350];
    snprintf(SQL, sizeof(SQL), "SELECT CONCAT(CASE WHEN u.sexe = 'Homme' THEN 'Mr.' WHEN u.sexe = 'Femme' THEN 'Mme.' WHEN u.sexe = 'Non-binaire' THEN 'Nb.' ELSE '' END, u.nom), c.Score, c.Date FROM Client c JOIN Professionnel p ON c.id_professionnel = p.id JOIN Utilisateur u ON p.id_utilisateur = u.id WHERE c.id_utilisateur = %d ORDER BY c.Date LIMIT 5", Id);

    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
    }
    
    res = mysql_use_result(conn); // Resultat requete

    int i = 0;
    while ((row = mysql_fetch_row(res)) != NULL) {
        strcpy((*professionnel)[i], row[0]); // Nom professionnel
        (*score)[i] = atoi(row[1]); // Score
        strcpy((*date)[i], row[2]); // Date
        i++;
    }

    snprintf(SQL, sizeof(SQL), "SELECT ROUND(AVG(Score), 0) FROM Client WHERE id_utilisateur = %d", Id); // Requete SQL
    
    if (mysql_query(conn, SQL)) { // Execute requete SQL
        mysql_close(conn); // Fermeture de la connexion
    }
    
    res = mysql_use_result(conn); // Resultat requete

    if ((row = mysql_fetch_row(res)) != NULL) {
        *Score_moyen = atoi(row[0]); // score moyen
    }

    mysql_free_result(res); // Liberer memoire
    mysql_close(conn); // Fermer connexion

    return i;
}

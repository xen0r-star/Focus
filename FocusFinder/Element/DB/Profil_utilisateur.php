<?php
    require 'config.php';

    if(isset($_GET['email']) && isset($_GET['mdp'])) {
        $email = $_GET['email'];
        $mdp = $_GET['mdp'];

        $db = Database::connect();

        // Requête pour récupérer les données de l'utilisateur
        $queryUtilisateur = $db->prepare("SELECT id, email, type, nom, prenom, TDAH, age, sexe, pronom, mdp, date FROM Utilisateur WHERE email = ?");
        $queryUtilisateur->execute([$email]);
        $utilisateur = $queryUtilisateur->fetch();

        // Requête pour récupérer les données du client
        $queryClient = $db->prepare("SELECT COUNT(id) AS nombre_test, IFNULL(ROUND(AVG(Score), 0), 'Inconnu') AS score_moyen FROM Client WHERE id_utilisateur = ?");
        $queryClient->execute([$utilisateur['id']]); // Utilisez la clé appropriée pour la jointure
        $client = $queryClient->fetch();

        if($utilisateur && $mdp == $utilisateur['mdp']) { // Vérification du mot de passe
            $response = array( // renvoye valeur en json si vrai
                'success' => true,
                'type' => $utilisateur['type'],
                'email' => $utilisateur['email'],
                'mdp' => $utilisateur['mdp'],
                'nom' => $utilisateur['nom'],
                'prenom' => $utilisateur['prenom'],
                'age' => $utilisateur['age'],
                'sexe' => $utilisateur['sexe'],
                'pronom' => $utilisateur['pronom'],
                'date' => $utilisateur['date'],
                'TDAH' => $utilisateur['TDAH'],
                'nombre_test' => $client['nombre_test'],
                'score_moyen' => $client['score_moyen']
            );
        } else {
            $response = array( // renvoye erreur en json si faux
                'success' => false
            );
        }

        header('Content-Type: application/json'); // specifie l'en-tête JSON
        echo json_encode($response); // envoie reponse JSON
    }
?>

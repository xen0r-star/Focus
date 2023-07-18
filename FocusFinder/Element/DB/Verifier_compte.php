<?php
    require 'config.php';

    if(isset($_GET['email']) && isset($_GET['mdp'])) {
        $email = $_GET['email'];
        $mdp = $_GET['mdp'];

        $db = Database::connect(); // verif valeur dans base de donnee 
        $query = $db->prepare("SELECT * FROM Utilisateur WHERE email = ?");
        $query->execute([$email]);
        $utilisateur = $query->fetch();

        if($utilisateur && $mdp == $utilisateur['mdp']) { // Vérification du mot de passe
            $response = array( // renvoye valeur en json si vrai
                'success' => true,
                'nom' => $utilisateur['nom'],
                'prenom' => $utilisateur['prenom']
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

<?php
    require 'config.php';

    if(isset($_GET['email'])) {
        $email = $_GET['email'];

        $db = Database::connect(); // Vérification de la valeur dans la base de données
        $query = $db->prepare("SELECT id FROM Utilisateur WHERE email = ?");
        $query->execute([$email]);
        $utilisateur = $query->fetch();

        $emailExists = ($utilisateur !== false); // Vérifie si l'utilisateur existe en fonction du résultat de la requête

        $response = array(
            'email' => $emailExists
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>

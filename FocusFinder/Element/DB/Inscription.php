<?php
    require 'config.php';

    $response = array('inscription' => false);

    if(isset($_GET['email'], $_GET['nom'], $_GET['prenom'], $_GET['age'], $_GET['sexe'], $_GET['pronom'], $_GET['mdp'])) {
        $email = $_GET['email'];
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $age = $_GET['age'];
        $sexe = $_GET['sexe'];
        $pronom = $_GET['pronom'];
        $mdp = $_GET['mdp'];
        

        $db = Database::connect();
        $query = $db->prepare("INSERT INTO `Utilisateur`(`email`, `type`, `nom`, `prenom`, `TDAH`, `age`, `sexe`, `pronom`, `mdp`) VALUES (?, 'Utilisateur', ?, ?, 'Inconnu', ?, ?, ?, ?)");
        if($query->execute(array($email, $nom, $prenom, $age, $sexe, $pronom, $mdp))) {
            $response['inscription'] = true;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>


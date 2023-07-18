<?php
    require 'config.php';

    if(isset($_GET['email'], $_GET['mdp'], $_GET['score'])) {
        $email = $_GET['email'];
        $mdp = $_GET['mdp'];
        $score = $_GET['score'];
        
        $db = Database::connect();
        $query = $db->prepare("INSERT INTO `Client` (`id_utilisateur`, `id_professionnel`, `Score`) SELECT u.id, '32', '" . $score . "' FROM `Utilisateur` AS u WHERE u.email = '" . $email . "' AND u.mdp = '" . $mdp . "';");
        $query->execute();
    }
?>

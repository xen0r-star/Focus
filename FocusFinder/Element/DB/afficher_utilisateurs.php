<?php
    require 'config.php';
    $db = Database::connect();

    if (isset($_GET["filtre"])) {
        $filtre = $_GET["filtre"];

        if ($filtre == "Tout") {
            $query = $db->query('SELECT Professionnel.metier, Professionnel.telephone_entreprise AS telephone, Professionnel.email_entreprise AS email, Professionnel.adresse_entreprise adresse, Utilisateur.nom
                                 FROM Professionnel 
                                 JOIN Utilisateur ON Professionnel.id_utilisateur = Utilisateur.id
                                 ORDER BY Professionnel.metier ASC, Utilisateur.nom ASC');
        } else {
            $query = $db->query('SELECT Professionnel.metier, Professionnel.telephone_entreprise AS telephone, Professionnel.email_entreprise AS email, Professionnel.adresse_entreprise adresse, Utilisateur.nom
                                 FROM Professionnel 
                                 JOIN Utilisateur ON Professionnel.id_utilisateur = Utilisateur.id
                                 WHERE Professionnel.metier = "' . $filtre . '"
                                 ORDER BY Professionnel.metier ASC, Utilisateur.nom ASC');
        }
    } else {
        $query = $db->query('SELECT Professionnel.metier, Professionnel.telephone_entreprise AS telephone, Professionnel.email_entreprise AS email, Professionnel.adresse_entreprise adresse, Utilisateur.nom
                             FROM Professionnel 
                             JOIN Utilisateur ON Professionnel.id_utilisateur = Utilisateur.id 
                             ORDER BY Professionnel.metier ASC, Utilisateur.nom ASC');
    }
      
    while ($utilisateur = $query->fetch()) {
        echo '<div class="Liste-rectangle">
                <div>
                    <img src="Element/Image/pp.svg" alt="Image">
                </div>
                <div class="Liste-text">
                    <div>
                        <h1>' . $utilisateur['nom'] . '</h1>
                        <h2>' . $utilisateur['metier'] . '</h2>
                    </div>
                    <div>
                        <p>' . $utilisateur['telephone'] . '</p>
                        <p>' . $utilisateur['email'] . '</p>
                        <p>' . $utilisateur['adresse'] . '</p>
                    </div>
                </div>
              </div>';
    }

    Database::disconnect();
?>
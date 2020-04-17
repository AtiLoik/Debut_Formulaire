<?php

// Connexion à la base avec PDO
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=InscriptionEtudiant', 'root', '');
}
catch (Exception $e)
{
    echo 'Erreur lors de la connexion a la base de données';
}
    $mail = $_POST['mail'];

    $stmt = $bdd->prepare( "DELETE FROM Etudiant WHERE mail = :mail ");
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();

    echo "Success";

?>

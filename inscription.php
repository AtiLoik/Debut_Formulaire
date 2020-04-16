<?php

// Connexion à la base avec PDO
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=InscriptionEtudiant', 'root', 'root');
}
catch (Exception $e)
{

}
    // Mise à jour de la base de données
    // 1. On initialise la requête préparée
    $req = $bdd->prepare('SELECT mail FROM Etudiant WHERE mail = ?');
    $req->execute(array($_POST['mail']));

    if($donnees = $req->fetch()){
        echo "Failed";
    }
    else{
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $genre = $_POST['genre'];

        $stmt = $bdd->prepare("INSERT INTO Etudiant (nom, prenom ,mail,genre) 
                                VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $mail);
        $stmt->bindParam(4, $genre);

        
        $stmt->execute();

        echo "Success";
    }

?>

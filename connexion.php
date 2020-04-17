<?php

// Connexion à la base avec PDO
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=InscriptionEtudiant', 'root', '');
}
catch (Exception $e)
{

}
   
        $login = $_POST['login'];
        $password = $_POST['password'];
     

        $stmt = $bdd->prepare("SELECT * from  `Admin` e where e.login = ? and e.password = ? ");
        $stmt->bindParam(1, $login);
        $stmt->bindParam(2, $password);
        

        
        $stmt->execute();

        echo "Connecté";
      
    

?>

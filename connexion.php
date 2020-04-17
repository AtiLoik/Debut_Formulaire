<?php

// Connexion à la base avec PDO
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=inscriptionetudiant', 'root', '');
}
catch (Exception $e)
{

}
   
        $login = $_POST['login'];
        $password = $_POST['password'];
     

        $stmt = $bdd->prepare("SELECT * from  `Admin` a where a.MAIL = ? and a.PASSWORD = ? ");
        $stmt->bindParam(1, $login);
        $stmt->bindParam(2, $password);
        

        
        $stmt->execute();

        echo "Connecté";
      
    

?>

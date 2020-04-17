<?php 
var_dump($_POST);
$mail = $_POST['mail_a_modifier'];
if (isset($_POST['envoyer']))
{

$prenom = $_POST['prenom']; 
$nom = $_POST['nom']; 
$email = $_POST['mail2'];   
$genre = $_POST['genre'];  
try{
                
             $sql = "UPDATE Etudiant SET prenom='$prenom',nom='$nom',genre='$genre',mail='$email' WHERE mail='$mail'";
                
                $conn->exec($sql);
                echo 'Entrée Modifiée dans la table';
                header("location: index.php");
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
    




}
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form method="post">
            <div>
        
             <div>
                <label for="name">Nom :</label>
	           </br>
                <input type="text" id="name" name="nom" placeholder="Entrez votre nouveau nom">
            </div>
    
	       <div>
                <label for="prenom">Prenom :</label>
	               </br>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez nouveau votre prenom">
            </div>
            <div>
                <label for="mail">Mail :</label>
	               </br>
                <input type="text" id="mail" name="mail2" placeholder="Entrez votre nouveau mail">
            </div>
            <div>
                <label for="mail">Genre :</label>
	               </br>
                <input type="text" id="genre" name="genre" placeholder="Entrez votre nouveau genre">
            </div>
            <div class="button">
                <button type="submit" name="envoyer">Validez</button>
            </div>
        </form>
    </body>

</html>

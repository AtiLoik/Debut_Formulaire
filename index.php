
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Liste des etudiants</title>
</head>
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=InscriptionEtudiant', 'root', ''); // Penser a modifier pour que ca marche
}
catch (Exception $e)
{
      echo 'Erreur lors de la connexion a la Base de données';
}

if (isset($_POST["supprimer"]))
{
      $mail = $_POST["mail_a_supprimer"];

      $statement = $bdd->prepare('DELETE FROM etudiant WHERE mail=:mail');
      $statement->bindParam(':mail', $mail);
      $statement->execute();
}

if (isset($_POST["update"]))
{      $mail = $_POST["mail_a_modifier"]; 
      header('Location: update.php?mail='.$mail);
  exit();
}
    
    
$NbrLigne = $bdd->query('SELECT count(nom) FROM Etudiant')->fetchColumn();
$req = $bdd->prepare('SELECT prenom, nom, mail, genre FROM Etudiant');
$req->execute();
?>
      
<body>
    <nav class="navbar navbar-default">
        <div class="container fluid">
            <ul class="nav navbar-nav">
                <li>
                    <a href="./index.php">Liste des eleves</a>
                </li>
                 <li>
                    <a href="./debut.php">Inscription</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="">
        <div class="col-sm-8 col-sm-offset-2">
            <h2>Liste des eleves</h2>
            <table id="liste" class="table_etudiants">
                  <thead>
                        <tr>
                              <th>Prénom</th>
                              <th>Nom</th>
                              <th>Email</th>
                              <th>Genre</th>
                              <th>Actions</th>
                        </tr>
                  </thead>
                  <tbody>
<?php
                  for ($i = 1; $i <= $NbrLigne; $i++)
                  {
                        $donnees = $req->fetch();
                        echo '<tr>';
                        for ($j = 0; $j <= 3; $j++)
                        {
                              echo '<td>';
                              // ------------------------------------------
                              // AFFICHAGE ligne $i, colonne $j
                              echo $donnees[$j];
                              // ------------------------------------------
                              echo '</td>';
                        }
                      
                      
                      
                    
                      
                        echo '      <td>';
                        echo '            <form method="post" onsubmit="return confirm(\'Êtes-vous sûr de vouloir supprimer cette personne ?\');">';
                        echo '                  <input type="hidden" name="mail_a_supprimer" value="'.$donnees[2].'">';
                        echo '                  <button type="submit" name="supprimer" class="button-delete">';
                        echo '                        Supprimer';
                        echo '                  </button>';
                        echo '            </form>';
                      
                        echo '      </td>';
                      
                      
                      echo '      <td>';
                        echo '            <form method="post" onsubmit="return confirm(\'Êtes-vous sûr de vouloir modifier cette personne ?\');">';
                        echo '                  <input type="hidden" name="mail_a_modifier" value="'.$donnees[2].'">';
                        echo '                  <button type="submit" name="update" class="button-update">';
                        echo '                        Modifier';
                        echo '                  </button>';
                        echo '            </form>';
                        echo '</tr>';
                        $j=1;

                  }
?>
                  </tbody>
                  <tfoot>
                        <tr>
                              <th>Prénom</th>
                              <th>Nom</th>
                              <th>Email</th>
                              <th>Genre</th>
                              <th>Actions</th>
                        </tr>
                  </tfoot>
            </table>
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
      $(document).ready(function() {
            $('#liste').DataTable( {
                  "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                  }
            } );
      } );
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</body>
</html>

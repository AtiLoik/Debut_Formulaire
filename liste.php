
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link href="bootstrap.min.css" rel="stylesheet"> -->

      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
      <title>Liste des etudiants</title>
</head>
<?php
            try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=table', 'root', '');
            }
            catch (Exception $e)
            {
                  echo 'Erreur lors de la connexion a la Base de données';
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
                    <a href="#">Liste des eleves</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="">
        <div class="col-sm-8 col-sm-offset-2">
            <h2>Liste des eleves</h2>
            <table id="liste" class="table table-striped table-bordered" style="width:100%">
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
                                for ($j=0; $j<=3; $j++) {
                                    echo '<td>';
                                    // ------------------------------------------
                                    // AFFICHAGE ligne $i, colonne $j
                                    echo $donnees[$j];
                                    // ------------------------------------------
                                    echo '</td>';
                                }
                                echo '</tr>';
                                $j=1;
                        }
                    ?>
                  </tbody>
                  <tfoot>
                        <tr>
                            <th>Prenom</th>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
</body>
</html>

      <?php
              try{
                $bdd = new PDO('mysql:host=localhost;dbname=InscriptionEtudiant', 'root', 'root');
              }
              catch (Exception $e)
                {
                    echo 'Erreur lors de la connexion a la Base de données';
                }
              $NbrLigne = $bdd->query('SELECT count(nom) FROM Etudiant')->fetchColumn();
              $req = $bdd->prepare('SELECT prenom, nom, mail, genre
                                          FROM Etudiant');
              $req->execute();
            echo '<table>';
            echo '<tr class="table-header" >
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Mail</th>
            <th scope="col">Genre</th>
                  </tr>';
            for ($i=1; $i<=$NbrLigne; $i++) {
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
            echo '</table>';
      ?>

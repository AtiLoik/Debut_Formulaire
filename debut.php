<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="inscription.php" method="post">
            <div>
                <label for="name">Nom :</label>
	           </br>
                <input type="text" id="name" name="nom" placeholder="Entrez votre nom">
            </div>
	       <div>
                <label for="prenom">Prenom :</label>
	               </br>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom">
            </div>
            <div>
                <label for="mail">Mail :</label>
	               </br>
                <input type="text" id="mail" name="mail" placeholder="Entrez votre mail">
            </div>
            <div>
                <label for="mail">Genre :</label>
	               </br>
                <input type="text" id="genre" name="genre" placeholder="Entrez votre genre">
            </div>
            <div class="button">
                <button type="submit">Validez</button>
            </div>
        </form>
    </body>

</html>

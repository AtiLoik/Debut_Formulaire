<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="fin.php" method="post">
            <div>
                <label for="name">Nom :</label>
	           </br>
                <input type="text" id="name" name="user_name" placeholder="Entrez votre nom">
            </div>
	       <div>
                <label for="prenom">Prenom :</label>
	               </br>
                <input type="text" id="prenom" name="user_prenom" placeholder="Entrez votre prenom">
            </div>
            <div>
                <label for="mail">Mail :</label>
	               </br>
                <input type="text" id="mail" name="user_mail" placeholder="Entrez votre mail">
            </div>
            <div class="button">
                <button type="submit">Validez</button>
            </div>
        </form>
    </body>

</html>

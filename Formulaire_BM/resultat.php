<?php include("connexion.php"); ?>

<?php 
$prenom = $_POST['prenom']; 
$nom = $_POST['name']; 
$email = $_POST['email'];  
$genre = $_POST['genre'];  

  try{
                
                $sql = "INSERT INTO Etudiant(prenom,nom,mail,genre)
                        VALUES('$prenom','$nom ','$email','$genre')";
                
                $conn->exec($sql);
                echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
?>



<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<form method="post" action="resultat.php"> 
     <nav aria-label="navigation">
  <ul class="pager">
    <li class="previous"><a href="http://localhost:8888/ContactFrom_v4/inscription.php" title="Précédent">Précédent</a></li>
   
  </ul>
    <ul class="pager">
   
    <li class="home"><a href="http://localhost:8888/ContactFrom_v4/Home.php" title="Home">Home</a></li>  
  </ul>     
</nav>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Brahamax 
				</span>

	
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="name" placeholder="<?php echo $nom ?>" disabled>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Prenom</span>
					<input class="input100" type="text" name="prenom" placeholder="<?php echo $prenom ?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="<?php echo $email ?>">
					<span class="focus-input100"></span>
				</div>
                
                    <div class="wrap-input100 validate-input" >
					<span class="label-input100">Prenom</span>
					<input class="input100" type="text" name="prenom" placeholder="<?php echo $genre ?>">
					<span class="focus-input100"></span>
				</div>
				
			</form>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</form>
</body>
</html>

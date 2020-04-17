<!DOCTYPE html>
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

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Home Etudiant 
				</span>
                
              
               <div class="wrap-input100 validate-input" d style="border-radius: 10px;">
					<span class="label-input100"></span>
                   <div class="p-3 mb-2 bg-secondary text-white">
                   <input class="input100" type="button" value="Inscription" onclick="document.location='http://localhost:8888/ContactFrom_v4/inscription.php';">
					<span class="focus-input100"></span>
                       </div>
				</div>

 <div class="wrap-input100 validate-input" d style="border-radius: 10px;">
					<span class="label-input100"></span>
                   <div class="p-3 mb-2 bg-secondary text-white">
                   <input class="input100" type="button" value="Delete" onclick="document.location='http://localhost:8888/ContactFrom_v4/delete.php';">
					<span class="focus-input100"></span>
                       </div>
				</div>
   <div class="wrap-input100 validate-input" d style="border-radius: 10px;">
					<span class="label-input100"></span>
                   <div class="p-3 mb-2 bg-secondary text-white">
                   <input class="input100" type="button" value="Update" onclick="document.location='http://localhost:8888/ContactFrom_v4/modifier.php';">
					<span class="focus-input100"></span>
                       </div>
				</div>
   
                <div class="wrap-input100 validate-input" d style="border-radius: 10px;">
					<span class="label-input100"></span>
                   <div class="p-3 mb-2 bg-secondary text-white">
                   <input class="input100" type="button" value="Afficher" onclick="document.location='http://localhost:8888/ContactFrom_v4/afficher.php';">
					<span class="focus-input100"></span>
                       </div>
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

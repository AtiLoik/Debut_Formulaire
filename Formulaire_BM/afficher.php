<?php include("connexion.php"); ?>


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
<form method="post" > 
    <nav aria-label="navigation">
  <ul class="pager">
    <li class="previous"><a href="http://localhost:8888/ContactFrom_v4/Home.php" title="Précédent">Précédent</a></li>
  </ul>
</nav>
	<div class="container-contact100">

<?php 
 
try{
    $liste='';
    $count=0;   
    $sql = 'Select * from Etudiant';
                
                  
    foreach  ($conn->query($sql) as $row) {
    $nom='';
    $liste='';    
    $nom= $nom .$row['prenom'] . "\t";
    $nom= $nom .$row['nom'] . "\t";
    $liste= $liste .$row['mail'] . "\n";    
    $liste= $liste .$row['genre'] . "\n";
    $count=$count+1;   
   ?>     
     <div class="wrap-contact100" style="margin:10px;width:400px;height:200px">
			<form class="contact100-form validate-form">
				
                
                <span class="contact100-form-title" style="font-size:14px">
					<?php echo $nom ?>
				</span>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					
					<textarea class="input100" type="text" name="name" style="font-size:10px;"><?php echo $liste ?>
                    </textarea>
					<span class="focus-input100"></span>
				</div>

                
			</form>
		</div>
      
	   
        
    <?php     
        
        
        
    }
                
            }
            
            catch(PDOException $e){
            
            }




?>

        
        
        
        
        
    
    
    
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
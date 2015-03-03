<?php  
if(isset($_POST["valorar"])) {


	$notas=$_POST["notas"];

		if($notas >=0 && $notas<=2){ 
			$resultado = "Muy deficiente";
		}


		elseif($notas==3){ 
			$resultado = "Deficiente";
		}

		elseif($notas==4){ 
			$resultado = "Insuficiente";
		}

		elseif($notas==5){ 
			$resultado = "Suficiente";
		}

		elseif($notas==6){ 
			$resultado = "Bien";
		}

		elseif($notas>=7 && $notas<=8){ 
			$resultado = "Notable";
		}

		elseif($notas>=9 && $notas<=10){ 
			$resultado = "Sobresaliente";
		}

		

	}

 ?>

<?php include "_header.php" ?>


	<div class="well">Notas</div>

		<form action="notas.php" method="post">

				notas <input type="number" name="notas" /> 

				<input type="submit" name="valorar" value="valorar" class="btn btn-danger"/>
			
		</form>

		<h4><?php echo $resultado; ?></h4>



<?php include "_footer.php" ?>	
<?php  
if(isset($_POST["pagar"])) {


	$edad=$_POST[""];

		if($edad <=12){ 
			$resultado = "Tarifa Gratuita";
		}


		elseif($edad >=13 && $edad<=16){ 
			$resultado = "Tarifa 4 euros";
		}

		elseif($edad >=17 && $edad<=65){ 
			$resultado = "Tarifa 8 euros";
		}


		elseif{
			$resultado = "Tarifa adulto 4 euros";
		}

	}

 ?>

<?php include "_header.php" ?>


	<div class="well">Tarifal</div>

		<form action="tarifa_cine.php" method="post">

				Edad <input type="number" name="edad" /> 

				<input type="submit" name="pagar" value="pagar" class="btn btn-danger"/>
			
		</form>

		<h4><?php echo $resultado; ?></h4>



<?php include "_footer.php" ?>	
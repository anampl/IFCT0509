<?php include '_funciones.php' ?>

<?php include "_header.php" ?>


	<div class="well">hola</div>
	<?php  
		echo multiplicax2(45)."<br>";
		echo multiplica(12, 32)."<br>";
		echo nombrecompleto("Ana", " Ponce")."<br>";


		for ($numero=0; $numero <=100; $numero++) { 
			echo " " .$numero. "x 2 = " . multiplicax2($numero)."<br>";
		}

		for ($numero=0; $numero <=100; $numero++) { 
			echo $numero."la raiz cuadrada es=". raiz($numero)."<br>";
		}
	




		
	$numero=azar();

	if($numero<=100) {

				echo $numero ."es menor que 100";
			}	

	else {
				echo $numero ."es mayor que 100";
	}			

	 ?>

   






<?php include "_footer.php" ?>	


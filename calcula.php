<?php include "_header.php" ?>


	<div class="well">Calcula</div>

<?php 
		$a = $_POST["numero_1"];
		$b= $_POST["numero_2"];

		if ($_POST ["suma"]){echo $a . " + " . $b . " = " . ($a + $b); } 
		if ($_POST ["resta"]){echo $a . " - " . $b . " = " . ($a - $b); }
		if ($_POST ["multiplica"]){echo $a . " * " . $b . " = " . ($a * $b); }
		if ($_POST ["divide"]){echo $a . " / " . $b . " = " . ($a / $b); }




	 ?>
	 <!-- PHP DENTRO DE HTML -->
	<!--  <p>La suma de los dos numeros es = <?php echo $a + $b; ?> </p>
	 <p>La resta de los dos numeros es = <?php echo $a - $b; ?> </p>
	 <p>La multiplicacion de los dos numeros es = <?php echo $a * $b; ?> </p>
	 <p>La division de los dos numeros es = <?php echo $a / $b; ?> </p> -->




<?php include "_footer.php" ?>	

   
<?php 
		$a = $_POST["a"];
		$b = $_POST["b"];

if(isset($_POST["Suma"])) {

		
		$resultado = "La suma es: " . ($a + $b);
}

if(isset($_POST["Borrar"])) {

		$a = "";
		$b = "";
}

if(isset($_POST["Coseno"])) {

		
		$resultado = "La coseno es: " . cos($a);
}

?>

 <?php include "_header.php" ?>


	<div class="well">Calculadora</div>





		<form action="calculator.php" method="post">	



				<input type="number" name="a" value="<?php echo $a; ?>" />
				<input type="number" name="b" value="<?php echo $b; ?>" />


				<input type="submit" name="Suma" value="Suma" class="btn btn-primary" />
				<input type="submit" name="Borrar" value="Borrar" class="btn btn-danger"/>
				<input type="submit" name="Coseno" value="Coseno" class="btn btn-white"/>


				






		</form>	


		<h4><?php echo $resultado ?>  </h4>
		



<?php include "_footer.php" ?>	


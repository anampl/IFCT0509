<?php include "_header.php" ?>

		<?php  


				$asunto= $_POST["asunto"];
				$mensaje=$_POST["mensaje"];
				$mail=$_POST["mail"];
				$multiples=$_POST["multiples"];



		if(isset($_POST["Enviar"])) {

				
				$resultado=$asunto.$mensaje.$mail.$multiples;








}

?>
	<div class="well">
		<form action="correo.php" method="post"><br>	


				
					<div class="row">	
						<div class="col-xs-5 col-xs-offset-1 columna">

								<div class="well">	
									Asunto: <input type="text" name="asunto" value="" /><br>
									<br>
									Mensaje:<br> 
									<br>
									<textarea name="mensaje" id=" " value="mensaje" cols="32" rows="15" ></textarea>
										<br>
									@ e-mail:<br> 
									<input type="text" name="mail" value="" />
											<br>
											<br>
									<input type="Checkbox" value="multiples" /> múltiples  &nbsp &nbsp &nbsp &nbsp<input type="submit" name="Enviar" value="enviar"/>


								</div>
						</div>

						<div class="col-xs-5 col-xs-offset-0 columna">
								<div class="well">	
								E-mails @ <br>
								<br>
								<textarea name="coment" id=" " cols="32" rows="22" ></textarea>

								</div>			

						</div>

					</div>

					
</form>


		</div>

	

<?php echo $resultado; ?>




<?php include "_footer.php" ?>	


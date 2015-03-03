


<?php include "_header.php" ?>


	<div class="well">Saca_la_tabla</div>

			<form action="saca_la_tabla.php" method="post">

			<tr>
                   	<td>El numero es:</td>
                   	<td><input type="number" name="numero"></td>
            </tr>


			<input type="submit" name="go" value="GO">		







			</form>


			<?php 
 				if(isset($_POST["go"])) {


 				$tabla=$_POST["numero"];

 					for($i=1; $i<=10; $i=$i+1){

					echo " " .$i. "x $tabla = " . ($i*$tabla) ." <br>" ;
					}		



}
 ?>




<?php include "_footer.php" ?>	


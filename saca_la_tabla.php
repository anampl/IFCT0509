


<?php include "_header.php" ?>


	<div class="well">Saca_la_tabla</div>



			<?php 
 				if(isset($_POST["go"])) {


 				$tabla=$_POST["numero"];

 					for($i=1; $i<=10; $i=$i+1){

					echo " " .$i. "x $tabla = " . ($i*$tabla) ." <br>" ;
					}		



				}
 			?>




<?php include "_footer.php" ?>	


<?php include "_header.php" ?>


	<div class="well">Calculadora</div>

	<form action="calcula.php" method="post">

		A &nbsp <input type="number" name="numero_1" placeholder="tu numero aqui"/><br />
		<br>
		B &nbsp <input type="number" name="numero_2" placeholder="otro numero"/><br />

		 <br>         	
           + &nbsp <input type="Checkbox" name="suma" value="suma" />
           - &nbsp <input type="Checkbox" name="resta"value="resta"  /> 
           * &nbsp <input type="Checkbox" name="multiplica"value="multiplica"  /> 
           / &nbsp <input type="Checkbox" name="divide"value="divide" /> 
       

        <br>          
        <br>
		<input type="submit"  class="btn btn-danger" name="submit" value="calcula" /><br />

	</form>



<?php include "_footer.php" ?>	



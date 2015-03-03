<?php include "_header.php" ?>

    <div class="well">procesa</div>

    <pre>	
    			<?php 
    				print_r($_POST);
    				$usuario = $_POST["usuario"];
    				$password= $_POST["password"];
    				$nombre= $_POST["Nombre_de_Cliente"];
    				$Fecha_de_Nacimiento= $_POST["Fecha_de_Nacimiento"];
                    $nuevo= $_POST["Nuevo Usuario"];

                    
    				echo $usuario . " " . $password . "<br>";
    				echo date("d-m-Y H:i:s");
    				
    		 	?>


    		 Hoy es <?php  echo date("d-m-Y H:i:s"); ?><br>
    		 Tu nombre tiene <?php echo strlen ($nombre); ?> caracteres<br>
    		 Te llamas <?php echo strtoupper ($nombre); ?><br>

    		 



    </pre>
   




<?php include "_footer.php" ?>




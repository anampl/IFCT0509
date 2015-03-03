<?php include "_header.php" ?>
<<?php $texto = "La rápida liebre marrón se llama Silvia" ?>
    <div class="well">Cadenas de texto</div>
    <div class="row">
    	<div class="col-xs-12">
    			<strong>minusculas: </strong> <?php echo strtolower($texto) ?><br>
    			<strong>mayusculas: </strong> <?php echo strtoupper($texto) ?><br>
    			<strong>1ªminusculas: </strong> <?php echo ucfirst($texto) ?><br>
    			<strong>1ªmayusculas: </strong> <?php echo ucwords($texto) ?><br>
    			<strong>Longitud: </strong> <?php echo strlen($texto) ?><br>
    			<strong>reemplazar: </strong> <?php echo str_replace("Silvia", "Maria", $texto) ?><br>
    			<strong>Espacios: </strong> <?php echo trim($texto) ?><br>
    			<strong>Buscar: </strong> <?php echo strstr($texto, "liebre") ?><br>
    			
    	</div>
    </div>

    <div class="well">Números</div>
    <div class="row">
    	<div class="col-xs-12">
    		<?php 
    			$var1 = 3;
    			$var2 = 4;
    		 ?>

    		 	Matemáticas Básicas <?php echo ((1 + 2 + $var) *$var2) / 2 -5; ?><br>
    		 <br>
    		 Potencia:					<?php echo pow(2,8); ?><br>
    		 Raiz Cuadrada:				<?php echo sqrt(100); ?><br>
    		 Nº al azar:				<?php echo rand(); ?><br>
    		 Nº al azar (1-10):			<?php echo rand(1,10); ?><br>
    		 Valor absoluto:			<?php echo abs(1 - 300); ?><br>


    	</div>
    </div>

<?php include "_footer.php" ?>
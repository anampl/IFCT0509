<?php
	
	$cartas1=["As", "2","3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
	$palos1=["Picas", "Treboles", "Diamantes", "Corazones"];

	$cartas2=["As", "2","3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
	$palos2=["Picas", "Treboles", "Diamantes", "Corazones"];

	$carta1= "carta_dorso.png";
	$carta2= "carta_dorso.png";



if(isset($_POST["go"])) {

	$c1=rand(1,13);
	$p1=rand(1,4);

	$c2=rand(1,13);
	$p2=rand(1,4);




	// $cartas2as1=[$c1-1];
	// $palos1=[$p1-1];

	// $cartas2=[$c2-1];
	// $palos2=[$p2-1];


	$carta1="carta_".$c1."_".$p1.".png";
	$carta2="carta_".$c2."_".$p2.".png";


		while ($c1==$c2) {

			$c1=rand(1,13);
			$p1=rand(1,4);

			$c2=rand(1,13);
			$p2=rand(1,4);

	// $cartas1=[$c1-1];
	// $palos1=[$p1-1];

	// $cartas2=[$c2-1];
	// $palos2=[$p2-1];


			$carta1="carta_".$c1."_".$p1.".png";
			$carta2="carta_".$c2."_".$p2.".png";

			}
}			

if (isset($_POST["go"])){

	($c1==$c2) 

  $parejas= " Pareja de " .$cartas1 [$c1-1]." "; 
}



?>

<?php include "_header.php" ?>


	<div class="well">Poker</div>


	<form action="juego_cartas.php" method="post">

		<div class="row">
				<div class="col-xs-4">		

						<div class="well"><h2><?php echo $cartas1 [$c1-1]." "; echo $palos1 [$p1-1]; ?></h2>

							<img src="img/<?php echo $carta1 ?>" class="img-responsive" >
									

						</div>

				
				</div>

				<div class="col-xs-4">		

						<div class="well"><h2><?php echo $cartas2 [$c2-1]." "; echo $palos2 [$p2-1]; ?></h2>
							
							<img src="img/<?php echo $carta2 ?>" class="img-responsive" >
 
							

						</div>

				
				</div>

				
		</div>	

					<input type="submit" name="go" value="GO" class="btn btn-danger" style="width:70px; height:50px" />

					<div class="alert alert-success"><h2><?php echo $parejas ?></h2></div>	

				

					
		</form>

				


<?php include "_footer.php" ?>	
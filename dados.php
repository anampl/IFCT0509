
<?php
		
		$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0051.gif">';
if(isset($_POST["play"])) {

	$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0051.gif">';
	$titleimage_1 = '';
	$titleimage_2 = '';
	$titleimage_3 = '';
	$titleimage_4 = '';
}

	$dado1 = (rand(1,6)
	$dado2 = (rand(1,6)
	$dado3= (rand(1,6)
	$dado4 = (rand(1,6)


 if(isset($_POST["stop"])) {
 		$dados = "";
		

switch ($dado1) {
    case 1: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-e16a9570-8383-494c-913e-2c416f4b612c.png">'; 
        break; 
    case 2: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-dabbad2d-9b90-4d50-b0ad-0efd8ec64193.png">'; 
        break;  
    case 3: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-24ad5b63-fc8b-405a-a55f-f2dfebd0f8f1.png">';
        break; 
    case 4: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-ca9d2b94-1f23-4f2f-92b7-2dee42bd6a4c.png">';
        break;    
    case 5: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-e02e59e9-42fe-4e55-9ffd-4cdabaf141be.png">';
        break;  
    case 6: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-61e19f67-a36f-4363-83c5-48d5c2a7a836.png">';
        break;  

		}       


switch ($dado2) {
    case 1: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-e16a9570-8383-494c-913e-2c416f4b612c.png">'; 
        break; 
    case 2: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-dabbad2d-9b90-4d50-b0ad-0efd8ec64193.png">';
        break; 
    case 3: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-24ad5b63-fc8b-405a-a55f-f2dfebd0f8f1.png">';
        break; 
    case 4: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-ca9d2b94-1f23-4f2f-92b7-2dee42bd6a4c.png">'; 
        break;    
    case 5: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-e02e59e9-42fe-4e55-9ffd-4cdabaf141be.png">';
        break;          
    case 6: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-61e19f67-a36f-4363-83c5-48d5c2a7a836.png">';
        break;  

		}        



switch ($dado3) {
    case 1: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-e16a9570-8383-494c-913e-2c416f4b612c.png">'; 
        break; 
    case 2: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-dabbad2d-9b90-4d50-b0ad-0efd8ec64193.png">';
        break; 
    case 3: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-24ad5b63-fc8b-405a-a55f-f2dfebd0f8f1.png">';
        break; 
    case 4: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-ca9d2b94-1f23-4f2f-92b7-2dee42bd6a4c.png">'; 
        break;    
    case 5: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-e02e59e9-42fe-4e55-9ffd-4cdabaf141be.png">';
        break;          
    case 6: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-61e19f67-a36f-4363-83c5-48d5c2a7a836.png">';
        break;  
       
		}        

switch ($dado4) {
    case 1: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-e16a9570-8383-494c-913e-2c416f4b612c.png">'; 
        break; 
    case 2: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-dabbad2d-9b90-4d50-b0ad-0efd8ec64193.png">';
        break; 
    case 3: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-24ad5b63-fc8b-405a-a55f-f2dfebd0f8f1.png">';
        break; 
    case 4: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-ca9d2b94-1f23-4f2f-92b7-2dee42bd6a4c.png">'; 
        break;    
    case 5: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-e02e59e9-42fe-4e55-9ffd-4cdabaf141be.png">';
        break;          
    case 6: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-61e19f67-a36f-4363-83c5-48d5c2a7a836.png">';
        break;  

          
 		}
  }
?>



  
<?php include "_header.php" ?>


	<div class="well">Dados</div>

	<form action="dados.php" method="post">

		<div class="row">
				<div class="col-xs-6">		

					<div class="well"><h1>ORDENADOR</h1>
						<?php echo $dados; ?>
						<?php echo $titleimage_1; ?>
						<?php echo $titleimage_2; ?>

					</div>

					

					<input type="submit" name="play" value="PLAY" class="btn btn-danger" style="width:70px; height:50px" />
					
				</div>
		


				<div class="col-xs-6">	
					<div class="well"><h1>YO</h1>
						<?php echo $dados; ?>
						<?php echo $titleimage_3; ?>
						<?php echo $titleimage_4; ?>
					</div>

						
					<input type="submit" name="stop" value="STOP" class="btn btn-primary" style="width:70px; height:50px" />
				</div>	

		</div>
    
		
	
		</form>

			
			
		








<?php include "_footer.php" ?>	


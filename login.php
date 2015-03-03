<?php include "_header.php" ?>
    <div class="well">login</div>

    <form action="procesa_datos.php" method="post">

     <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            	<div class="well">
            	<h4>Bienvenid@.</h4>
            	 	usuario: 	<input type="text" name="usuario" value="" />
            		<br />
            		password: 	<input type="password" name="password" value=""/>
            		<br />
            		<br />
            		<br />
    

            		<button type="submit" class="btn btn-primary">
 						 <i class="icon-user icon-white"></i> Enviar</button>
 					

            	</div>


           </div>
        
        </div>
    	
       	<form action="procesa_datos.php" method="post">
      		<div class="row">
		
      
        			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          				<div class="panel panel-info">
            					<div class="panel-heading">
              						<h3 class="panel-title">Usuario</h3>
            					</div>

            			<div class="panel-body">
              	<div class="row">
                		<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre de Cliente:</td>
                        <td><input type="text" name="Nombre_de_Cliente" value="" /></td>
                      </tr>

                      <tr>
                      	<td>Fecha de nacimiento:</td>
                      	<td><input type="date" name="Fecha_de_Nacimiento"></td>
                      </tr>



                      <tr>
                        <td>D.N.I:</td>
                        <td><input type="text" name="D.N.I" value="" /></td>
                      </tr>

                      <tr>
                        <td>Dirección</td>
                        <td><input type="text" name="Dirección" value="" /></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Población</td>
                        <td><input type="text" name="Población" value="" /></td>
                      </tr>
                        <tr>
                        <td>Provincia</td>
                        <td><input type="text" name="Provicia" value="" /></td>
                      </tr>
                      <tr>
                      <td>Teléfono</td>
                        <td><input type="text" name="Teléfono" value="" /> (Fijo)<br><br><input type="text" name="usuario" value="" /> (Movil)
                        </td>
                        
                      </tr>
                      <td>Email</td>
                        <td><input type="text" name="Email" value="" /></td>

                        </tr>
                      <td>Contraseña</td>
                        <td><input type="text" name="Contraseña" value="" /></td>
       
                           
                      </tr>

                      <tr>
                      	
                      	<td><input type="Checkbox" &nbsp <td> Aceptar condiciones:</td>
                      </tr>

                      <tr>
                        
                        <td><input type="Checkbox1" &nbsp <td> Nuevo Usuario:</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-danger">Nuevo Usuario</a>
                  <button type="submit" class="btn btn-primary">
 						 <i class="icon-user icon-white"></i> Guardar Usuario</button>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>

    </div>
    	 
    	
    </form>




<?php include "_footer.php" ?>

<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
  <style>
       	.fondo{
       		background-color: blue;
       	}
       	.borde{
       		border:1px #000 solid; text-align: center; height: 50px;
			
       	}
       	.color1{background: #eeeeee}
       	.color2{background: green}
       	.color3{background: red}
       	.color4{background: #295ba7}
        .color5{background: #295ba7; height: 500px}
        .cosita{align-items: center;}


       </style>

<div class="content-wrapper">
  <div class="container-fluid">

     <div class="container-wrapper"> <!--primercontainer fluid -->
        <div class="container-fluid">
<br>
         <div  align="center"><!-- inicio align center-->
         	<div class="row"><!-- inicio fila-->
          <div class="col-md-12">
            <div class="panel-default">
              <div class="panel">
                 <font face="Arial Narrow" size="6" color="#001f4d">Administración de Usuarios</font>
              </div>
              
            </div>
            
          </div>
           </div><!-- fin fila-->
         </div> <!-- fin align center-->
          
        </div>
        
      </div>  <!-- fin primercontainer fluid -->


       <div class="row"> <!-- sinicio segunda fila -->
         <div class="col-md-12 pt-5"><!-- segunda columna -->
            <div class="panel panel-default">
              
                  <div class="form-group"> 



<div class="container">
	<div>
		<font face="Arial Narrow" size="4" color="#001f4d">Cantidad de docentes activos:  2</font>
		<br> 
		<font face="Arial Narrow" size="4" color="#001f4d">Docentes que han sido desabilitados:  1</font>
	</div>
	
	<div class="row ">
		<div class=" color1 col-xs-2 col-sm-2 col-md-2 hidden-sm-down"> <font face="Arial Narrow" size="5" color="#001f4d">Usuario</font> </div>
		<div class=" color1 col-xs-5 col-sm-5 col-md-5"><font face="Arial Narrow" size="5" color="#001f4d">Nombres y Apellidos</font> </div>
		<div class=" color1 col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="5" color="#001f4d">Rol</font></div>
		<div class=" color1 col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="5" color="#001f4d">Estado</font></div>
		<div class=" color1 col-xs-1 col-sm-1 col-md-1"><font face="Arial Narrow" size="5" color="#001f4d">Editar</font></div>
	</div>

	<div class="row ">
		<div class=" col-xs-2 col-sm-2 col-md-2 hidden-sm-down"><font face="Arial Narrow" size="4" color="#001f4d">1234567</font> </div>
		<div class="  col-xs-5 col--sm-5 col-md-5"><font face="Arial Narrow" size="4" color="#001f4d">Francisco Corbera Pocasangre</font></div>
		<div class="  col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="4" color="#001f4d">Docente</font></div>
		<div class=" col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="4" color="green">Activo</font></div>
		<div class="  col-xs-1 col-sm-1 col-md-1"> <!--inicio align -->
			<div align="center">
				<div class="row"><!-- inicio fila -->
					<div class="col-md-12">
						<div class="panel-default">
							<div class="panel">
								<!-- boton-->
								<img type=""  name="edit" data-toggle="modal" data-target="#modalEditar" data-html="true" title="Editar datos de docente"  src="imagenes/Pencil.ico">

								<div class="modal modal-info fade in" id="modalEditar">  <!-- ini modal-->
									<div class="modal-dialog">
										<div class="modal-content">  <!--ini mpdal content -->
											<div class="modal-header " align="center">
												<h4>Modificar datos de docente</h4>
											</div>

											<div class="modal-body"> <!-- inicio panel body -->
												<div class="box-body">
													<div class="box box-info"> <!--ini box-info -->
														<form class="form-horizontal"> <!--INICIO FORMULARIO -->
															<div class="box-body">
															<div class="row">
																
											<div class="col-md-12">
		Nombre &nbsp &nbsp&nbsp <input type="text" class="form-group" id="n" placeholder="Francisco Corbera Pocasangre " size="35" name="n">
         <br>
         <label class="checkbox-inline" data-toggle="modal" data-target="#modal-default" data-placement="left" data-html="true" title="Seleccione para hacer los cambios">
					<input type="checkbox" id="inlineCheckBox1" value="oprion1">&nbsp &nbsp&nbspDesea modifcar la contraseña de seguridad
				</label><br><br>
      Contraseña &nbsp &nbsp&nbsp<input type="password" class="form-group" id="n" placeholder="**********" name="usuario" size="33"> <br>
      Confirmar contraseña &nbsp &nbsp<input type="password" class="form-group" id="n" placeholder="**********" name="kontraseña" size="25"><br>
       <font face="Arial Narrow"  color="#001f4d">Rol&nbsp &nbsp
               <select name="docente">
                <option value="len">Seleccionar</option>
                <option value="len">Docente</option>                              
            </select>
               </font><br><br>

                <font face="Arial Narrow" color="#001f4d" class="m-5">Estado del miembro&nbsp &nbsp
              <select name="estado">
                <option value="len">Seleccionar</option> 
                <option value="len">Activar</option>
                <option value="len">Desabilitar</option>                              
            </select>
               </font> 
		</div>
											

															</div><!-- fin fila -->
															</div>
															
														</form> <!--FIN FORMULARIO -->
														<div align="center">
                      <button type="button" class="btn btn-info btn-lg mt-5" data-dismiss="modal">Guardar</button>
                       <button type="button" class="btn btn-danger mt-5 btn-lg"  data-dismiss="modal" id="archivo">Cancelar</button>                    
  
                 </div>
													</div>  <!--fin box-info -->
													
												</div>
												
											</div>  <!-- fin panel body -->
											
										</div> <!--fin mpdal content -->
										
									</div>
								</div>  <!-- fin modal -->
								
							</div>
						</div>
					</div>
				</div><!-- fin fila-->
			</div>
		</div>



	</div>

	<div class="row ">
		<div class=" col-xs-2 col-sm-2 col-md-2 hidden-sm-down"><font face="Arial Narrow" size="4" color="#001f4d">7654321</font> </div>
		<div class=" col-xs-5 col-sm-5 col-md-5"><font face="Arial Narrow" size="4" color="#001f4d">Josefina Perez Garay</font></div>
		<div class="col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="4" color="#001f4d">Docente</font></div>
		<div class=" col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="4" color="green">Activo</font></div>
		<div class="  col-xs-1 col-sm-1 col-md-1">
				<div align="center">
				<div class="row"><!-- inicio fila -->
					<div class="col-md-12">
						<div class="panel-default">
							<div class="panel">
								<!-- boton-->
								<img type=""  name="edit" data-toggle="modal" data-target="#modalEdita" data-html="true" title="Editar datos de docente"  src="imagenes/Pencil.ico">

								<div class="modal modal-info fade in" id="modalEdita">  <!-- ini modal-->
									<div class="modal-dialog">
										<div class="modal-content">  <!--ini mpdal content -->
											<div class="modal-header " align="center">
												<h4>Modificar datos de docente</h4>
											</div>

											<div class="modal-body"> <!-- inicio panel body -->
												<div class="box-body">
													<div class="box box-info"> <!--ini box-info -->
														<form class="form-horizontal"> <!--INICIO FORMULARIO -->
															<div class="box-body">
															<div class="row">
																
											<div class="col-md-12">
		Nombre &nbsp &nbsp&nbsp <input type="text" class="form-group" id="n" placeholder="Josefina Perez Garay " size="35" name="n">
         <br>
         <label class="checkbox-inline" data-toggle="modal" data-target="#modal-default" data-placement="left" data-html="true" title="Seleccione para hacer los cambios">
					<input type="checkbox" id="inlineCheckBox1" value="oprion1">&nbsp &nbsp&nbspDesea modifcar la contraseña de seguridad
				</label><br><br>
      Contraseña &nbsp &nbsp&nbsp<input type="password" class="form-group" id="n" placeholder="**********" name="usuario" size="33"> <br>
      Confirmar contraseña &nbsp &nbsp<input type="password" class="form-group" id="n" placeholder="**********" name="kontraseña" size="25"><br>
       <font face="Arial Narrow"  color="#001f4d">Rol&nbsp &nbsp
               <select name="docente">
                <option value="len">Seleccionar</option>
                <option value="len">Docente</option>                              
            </select>
               </font><br><br>

                <font face="Arial Narrow" color="#001f4d" class="m-5">Estado del miembro&nbsp &nbsp
              <select name="estado">
                <option value="len">Seleccionar</option> 
                <option value="len">Activar</option>
                <option value="len">Desabilitar</option>                              
            </select>
               </font> 
		</div>
											

															</div><!-- fin fila -->
															</div>
															
														</form> <!--FIN FORMULARIO -->
														<div align="center">
                      <button type="button" class="btn btn-info btn-lg mt-5" data-dismiss="modal">Guardar</button>
                       <button type="button" class="btn btn-danger mt-5 btn-lg"  data-dismiss="modal" id="archivo">Cancelar</button>                    
  
                 </div>
													</div>  <!--fin box-info -->
													
												</div>
												
											</div>  <!-- fin panel body -->
											
										</div> <!--fin mpdal content -->
										
									</div>
								</div>  <!-- fin modal -->
								
							</div>
						</div>
					</div>
				</div><!-- fin fila-->
			</div>
			
		</div>
	</div>

	<div class="row ">
		<div class=" col-xs-2 col-sm-2 col-md-2 hidden-sm-down"><font face="Arial Narrow" size="4" color="#001f4d">6847693</font> </div>
		<div class=" col-xs-5 col-sm-5 col-md-5"><font face="Arial Narrow" size="4" color="#001f4d">Lucrecia fabian carmela</font></div>
		<div class="  col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="4" color="#001f4d">Docente</font></div>
		<div class=" col-xs-2 col-sm-2 col-md-2"><font face="Arial Narrow" size="4" color="red">Desabilitado</font></div>
		<div class="  col-xs-1 col-sm-1 col-md-1">
			 	<div align="center">
				<div class="row"><!-- inicio fila -->
					<div class="col-md-12">
						<div class="panel-default">
							<div class="panel">
								<!-- boton-->
								<img type=""  name="edit" data-toggle="modal" data-target="#modalEdito" data-html="true" title="Editar datos de docente"  src="imagenes/Pencil.ico">

								<div class="modal modal-info fade in" id="modalEdito">  <!-- ini modal-->
									<div class="modal-dialog">
										<div class="modal-content">  <!--ini mpdal content -->
											<div class="modal-header " align="center">
												<h4>Habilitar docente</h4>
											</div>

											<div class="modal-body"> <!-- inicio panel body -->
												<div class="box-body">
													<div class="box box-info"> <!--ini box-info -->
														<form class="form-horizontal"> <!--INICIO FORMULARIO -->
															<div class="box-body">
															<div class="row">
																
											<div class="col-md-12">
		Nombre &nbsp &nbsp&nbsp <input type="text" class="form-group" id="n" placeholder="Lucrecia fabian carmela" size="35" name="n" disabled="">
         <br>
                                    
            </select>
               </font><br><br>

                <font face="Arial Narrow" color="#001f4d" class="m-5">Estado del miembro&nbsp &nbsp
              <select name="estado">
                 
                <option value="len">Desabilitado</option>
                <option value="len">Habilitar</option>                              
            </select>
               </font> 
		</div>
											

															</div><!-- fin fila -->
															</div>
															
														</form> <!--FIN FORMULARIO -->
														<div align="center">
                      <button type="button" class="btn btn-info btn-lg mt-5" data-dismiss="modal">Guardar</button>
                       <button type="button" class="btn btn-danger mt-5 btn-lg"  data-dismiss="modal" id="archivo">Cancelar</button>                    
  
                 </div>
													</div>  <!--fin box-info -->
													
												</div>
												
											</div>  <!-- fin panel body -->
											
										</div> <!--fin mpdal content -->
										
									</div>
								</div>  <!-- fin modal -->
								
							</div>
						</div>
					</div>
				</div><!-- fin fila-->
			</div>
		</div>
	</div>
	
</div><!-- FIN CONTAINER -->


                          
          </div><br>              
           
          </div>
     </div> <!-- fin segunda columna -->

          

  </div><!-- fin de la segubda fila-->


 <div align="center"> <!--ini align -->
        <div class="row mt-5">
          <div class="col-md-8">
            <div class="panel-default">
              <div class="panel">
                  <a class="btn btn-info "  type="submit" name="agregar" data-toggle="tooltip" data-placement="left" data-html="true" title="Registrar nuevo docente" href="registrarUsuario.php">Agregar
                     </a>
              </div>
              
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="panel-default">
              <div class="panel">
                     <button type="submit" class="btn btn-info" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Abortar la acccion" >Cancelar</button>      
                </div>
              
            </div>
            
          </div>
        </div>
 </div> <!--fin align -->

</div>

</div>

<?php
include_once './molde/fin.php';
?>
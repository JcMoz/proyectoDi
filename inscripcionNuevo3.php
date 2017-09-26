<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
    <!-- /.content-wrapper -->
   <div class="content-wrapper">
     <div class="container-fluid">
     <font face="Arial Narrow" size="5" color="#001f4d">Ficha de resgistro de estudiantes.
     </font>
       
       <div class="row">
         
   
   
          <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading" align="center">Estudios Realizados</div>
              <div class="panel-body"><!--panel estudios realizados-->
              <br>
                   &nbsp &nbsp&nbsp<INPUT class="form-group" type="text"  name="Ugrado" placeholder=" Ultimo Grado que curso ">
                     &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<INPUT class="form-group" type="text"  name="añoC" placeholder="Año que lo Curso">  &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                       <input class="form-control" type="text"  placeholder=" Nombre del centro educativo  " name="inCurso"> 
                       <br>
                       <div align="center">
                         <input class="form-group" type="text" placeholder="       Código" name="cod">
                       </div>
                      

       </div>
            <br> <br>
            <div class="panel-heading" align="center">Datos de matricula</div>
              <div class="panel-body">
              <br>
              &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Turno : </font>
              <input type="radio" name="turnoMa">Mañana
              <input type="radio" name="turnoTa">Tarde &nbsp &nbsp &nbsp &nbsp &nbsp
              <font face="Arial Narrow" size="4" color="#001f4d"> Nivel : </font>
              <input type="radio" name="nivel1">Primer &nbsp &nbsp
              <input type="radio" name="nivel2">Segundo &nbsp &nbsp
              <input type="radio" name="nivel3">Tercer Ciclo

                    <div align="center">
                    <br>
                      <font face="Arial Narrow" size="4" color="#001f4d">Grado a matricular : </font>
                      
                     <select name="Grado">
    <option value="pri">Primero</option>
    <option value="se">Segundo</option>
    <option value="ter">Tercero</option>
     <option value="cuar">Cuarto</option>
      <option value="quin">Quinto</option>
       <option value="sex">Sexto</option>
        <option value="sep">Séptimo</option>
         <option value="oct">Octavo</option>
          <option value="nov">Noveno</option>
</select>
  &nbsp &nbsp &nbsp <font face="Arial Narrow" size="4" color="#001f4d">Secciones: </font>
   <select name="Secciones">
    <option value=seA>A</option>
    <option value="seB">B</option>
    <option value="secC">C</option>
    </select>
                        
                      </div>
                     
                      
                       
                       <br><div align="center">
                         <input class="form-control" type="text" placeholder=" Documentos que presento para la Matricula " align="center" name="nie">
                       </div>
                       <br>

            </div><!--cierre de panel body-->
            <br>
            
         
        </div>
     </div>
      <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                  <!--imagen   -->
                  <div align="center">
                  <img src="imagenes/inscripcion3.png" class="img-responsive">
                  </div>
              
                </div>
                <br> <br> <br>
                <div align="center">
              <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-info" onclick="location='/proyectoDi/inscripcionNuevo1.php'">
              <input type="submit" value="Cancelar" name="cancel" class="btn-secondary">
            </div>    
        </div>
     </div>
     </div>

     </div>
     </div>
        <!--Cierre Mi codigo -->

<?php
include_once './molde/fin.php';
?>
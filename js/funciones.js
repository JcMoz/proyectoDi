/* 
funcion para modificar el docente
comienza
 */
function agregaRegistro(){
	var url = '../docente/agregaDocente.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}
function editarProducto(id){
	$('#formulario')[0].reset();
	var url = '../docente/edita_docente.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#pro').val('Edicion');
				$('#id-prod').val(id);
				$('#nombreDo').val(datos[0]);
				$('#apellidosDo').val(datos[1]);
				$('#direccionDo').val(datos[2]);
				$('#coDo').val(datos[3]);
                               $('#nip').val(datos[4]);
                               $('#nit').val(datos[5]);
                               $('#dui').val(datos[6]);
                                $('#esp').val(datos[7]);
				$('#modi-do').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}
/* 
funcion para modificar el docente
fin
 */



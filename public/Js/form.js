jQuery(document).ready(function($) {


var tabla_inscritos = $('#tabla-actuales2').dataTable({pageLength: 50});


$('#fecha_nacimiento').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});

 $('#tipo').val("");
	$('select[data-readonly]').on('change', function(e){

		var select = $(this).data('readonly');
        var readonly_value = $(this).data('readonly-value');

		if(readonly_value != $(this).val())
		{
			$('select[name="'+select+'"]').attr('disabled', 'disabled');
		} else {

			$('select[name="'+select+'"]').removeAttr('disabled');	

		}

	});



$('#torneo').val("");

 	$('#torneo').change(function() {
    $.ajax({url:'traer_eventos',type:  'post',data:{id:$('#torneo').val()},success:  function (response) {$('#evento').html(response); }});
});

 		$('#evento').change(function() {
    $.ajax({url:'traer_niveles',type:  'post',data:{id:$('#evento').val()},success:  function (response) {$('#nivel').html(response); }});
});

 		$('#nivel').change(function() {
    $.ajax({url:'traer_categorias',type:  'post',data:{id_nivel:$('#nivel').val()},success:  function (response) {$('#categoria').html(response); }});
});


 		$('#categoria').change(function() {
    $.ajax({url:'traer_modalidades',type:  'post',data:{id_categoria:$('#categoria').val()},success:  function (response) {$('#modalidad').html(response); }});
});


 		$('#modalidad').change(function() {
    $.ajax({url:'traer_edades',type:  'post',data:{id_modalidad:$('#modalidad').val()},success:  function (response) {$('#edad').html(response); }});
});
 		
/* $.ajax({url:'traer_localidades',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});
 	

   $.ajax({url:'listar_ciudad',type:  'post',success:  function (response) {$('#id_ciudad').html(response); }});
    $.ajax({url:'listar_localidad',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});
    $.ajax({url:'listar_departamento',type:  'post',success:  function (response) {$('#id_departamento').html(response); }});
*/
	

});
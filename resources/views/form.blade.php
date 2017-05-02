@extends('master')                              
@section('script')
@parent
   <script src="{{ asset('public/Js/ingresar_participantes.js') }}"></script>
@stop


@section('content') 



    <link rel="stylesheet" type="text/css" href="public/Css/form.css">
	@if($estado!='')
		<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Informacion!</strong> {{$estado}}
		</div>
	@endif
    

	<form method="POST" action="insertar_persona" id="form_participante" enctype="multipart/form-data">


   
    <section id="page1">

    	<div class="panel panel-default">

  	<div class="panel-heading">
          <h4>Registrar Integrantes al Equipo  o Institución <span style="color:red"> {{$equipo->nombre_institucion}}</span> </h4> 
          <h4>Rango de edad de integrantes en esta categoría: <span style="color:red" id="rango">{{ $equipo->rangoEdad['edad'] }}</span></h4>
 	</div>

  	<div class="panel-body">
  	<div class="row">
  	<br>

	<input type="hidden" class="form-control" id="id" name="id" value="{{$equipo->id}}" >


  	<div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de Documento <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label></div>
       <div class="col-md-6">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de identidad <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label></div>
       

          <div class="col-md-6"><select name="tipo_documento" id="tipo_documento" class="form-control" >
				<option value="1">Cédula de Ciudadanía</option>
                      <option value="2">Tarjeta de Identidad</option>
                      <option value="3">Registro Civil</option>
                      <option value="4">Cédula de Extranjería</option>
                      <option value="5">Documento Nacional de Identidad</option>
                      <option value="6">Pasaporte</option>
			</select></div>

       <div class="col-md-6"><input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula" ><br></div>
       

<div class="col-md-6">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Fecha de Nacimiento <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label>
       </div>
       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad </label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label></div>


       <div class="col-md-6"><input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"></div>
       <div class="col-md-6"><input type="text" class="form-control" id="TX_Ed" name="TX_Ed"  onclick="javascript:calcularEdad();"><br></div>




       <div class="col-md-6">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nombres<span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label>
       </div>
       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos </label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label></div>


       <div class="col-md-6"><input required type="text" class="form-control" id="primer_nombre" name="primer_nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" ></div>
       <div class="col-md-6"><input required type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"  onkeyup="javascript:this.value=this.value.toUpperCase();"></div>


       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

			Teléfono <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span>

			</label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Seleccione su teléfono

			</label></div>
       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

			Eps <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span>

			</label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Seleccione de acuerdo a la fecha de su nacimiento

			</label>
</div>
       <div class="col-md-6"><input required type="text" class="form-control" id="telefono" name="telefono"></div>
       <div class="col-md-6"><input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br></div>     
   </div>

		</fieldset>

<div class="form-group">
<button type="submit" id="inscribir persona"  class="btn btn-info">Registrar participante en el grupo</button>
</div>
</form>

	<script type="text/javascript" src="public/Js/form.js" ></script>
	<div class="row" >
		<div class="col-md-12">
			<table id="tabla-actuales">
			<thead>
				<th>Cedula</td>
				<th>Fecha nacimiento</td>
				<th>Nombre</td>
				<th>Apellido</th>
				<th>Eliminar</td>
			</thead>
			<tbody>
		 	@foreach($inscritos as $inscrito)
			 <tr>
				 <td>
					 <p>{{$inscrito->cedula}}</p>
				 </td>
				  <td>
					 <p>{{$inscrito->fecha_nacimiento}}</p>
				 </td>
				  <td>
					 <p>{{$inscrito->primer_nombre}}</p>
				 </td>
				 <td>
					 <p>{{$inscrito->segundo_nombre}}</p>
				 </td>
				 <td><form action="eliminar_participante" method="post" ><input type="hidden" name="cedula" value="{{$inscrito->cedula}}"><input type="hidden" name="equipo" value="{{$equipo->id}}"> <input type="submit" id="eliminar"  value="eliminar"></form></td>
			 </tr>
			@endforeach
			</tbody>
			</table>
		</div>
	</div>
@stop




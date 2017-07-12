@extends('master')                              

@section('content')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<div id="myGroup">
		<button class="btn dropdown uno" ><i class="icon-chevron-right"></i> Reporte equipo  <span class="badge badge-info pull-right">X</span></button>
		<button class="btn dropdown dos" ><i class="icon-chevron-right"></i> Reporte inscritos  <span class="badge badge-info pull-right">X</span></button>



		<div class="accordion-group">
			<div class="collapse indent" id="keys">
				<div class="col-md-12" id="div-tabla" >




				</div>
			</div>

			<div class="collapse indent" id="attrs">
				<div class="col-md-12" id="div-tabla-participantes" >




				</div>
			</div>


		</div>
	</div>




<script type="text/javascript" src="public/Js/admin.js?n=84" ></script>
  
<link rel="stylesheet" href="{{ asset('public/Css/admin.css?v=12') }}" media="screen">

       
@stop

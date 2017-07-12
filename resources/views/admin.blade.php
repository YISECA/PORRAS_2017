@extends('master')                              

@section('content') 
        

<button data-toggle="collapse" data-target="#demo">Reporte equipos</button>

<div id="demo" class="collapse">
	<div class="col-md-12" id="div-tabla" >




	</div>
</div>

<button data-toggle="collapse" data-target="#demo1">Reporte participantes</button>

<div id="demo1" class="collapse">
	<div class="col-md-12" id="div-tabla-participantes" >




	</div>
</div>


<script type="text/javascript" src="public/Js/admin.js?n=30" ></script>   
  
<link rel="stylesheet" href="{{ asset('public/Css/admin.css') }}" media="screen"> 

       
@stop

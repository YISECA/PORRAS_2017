@extends('master')

@section('content')
    <link rel="stylesheet" type="text/css" href="public/Css/form.css">
    <section id="page2">
        <div class="panel panel-default">
            <div class="panel-heading">Información personal</div>
            <div class="panel-body">

                <form action="insertar_participante" method="POST">



                    <fieldset class="form-group">
                        <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">codigo:</label>
                        <textarea title="Se nesesita el codigo" required class="form-control" id="equipo" name="equipo" ></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <input type="submit" class="btn btn-success" value="Ir a mi equipo">
                    </fieldset>

    </section>


@stop

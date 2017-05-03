<?php
	session_start();
    
Route::any('/','MainController@index');

Route::post('traer_eventos','MainController@traer_eventos');

Route::post('traer_niveles','MainController@traer_niveles');

Route::post('traer_categorias','MainController@traer_categorias');

Route::post('traer_modalidades','MainController@traer_modalidades');

Route::post('traer_edades','MainController@traer_edades');

Route::post('finalizar','FormController@finalizar');





Route::get('registro', function () {                
    $data = ['estado' => ''];
    return view('form',$data);

});



Route::get('descarga', function () {                

    return view('descarga');

});



Route::get('carnet_prueba', function () {                

    return view('carnet');

});



Route::get('login', function () {                

    return view('login');

});



Route::get('cerrar', function () {      



	session_destroy();

    return redirect('/');

});





Route::any('logear','FormController@logear');

Route::any('ultimo_codigo','FormController@last_codigo');

Route::any('carnet','PdfController@carnet');

Route::post('insertar', 'FormController@insertar');

Route::any('insertar_participante', 'FormController@insertar_participante');

Route::any('insertar_persona', 'FormController@insertar_persona');

Route::any('listar_pais', 'FormController@listar_pais');

Route::any('listar_ciudad', 'FormController@listar_ciudad');

Route::any('listar_localidad', 'FormController@listar_localidad');

Route::any('listar_departamento', 'FormController@listar_departamento');

Route::any('listar_datos', 'FormController@listar_datos');

Route::get('/personas/service/ciudad/{id_pais}', '\Idrd\Usuarios\Controllers\LocalizacionController@buscarCiudades');

Route::post('/personas/service/procesar/', '\Idrd\Usuarios\Controllers\PersonaController@procesar');

Route::any('eliminar_participante', 'FormController@eliminar_participante');

Route::group(['middleware' => ['web']], function () {

    //

});


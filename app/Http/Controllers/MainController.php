<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use App\Torneos;
use App\Eventos;
use App\Nivel;
use App\Categoria;
use App\Modalidad;
use App\Edad;
use App\Localidad;

class MainController extends Controller {

	protected $Usuario;
	protected $repositorio_personas;

	public function __construct(PersonaInterface $repositorio_personas)
	{
		if (isset($_SESSION['Usuario']))
			$this->Usuario = $_SESSION['Usuario'];

		$this->repositorio_personas = $repositorio_personas;
	}

//torneos
	public function index()
  	{

  		
		$data = ['torneos' => Torneos::get(),'localidades' => Localidad::get()];
		return view('welcome', $data);
	}

//eventos
	public function traer_eventos(Request $request)
  	{
		$eventos = Eventos::where('id_torneo',$request->id)->get();
		$lista='<option value="" selected="selected" >Seleccione</option>';
	    foreach ($eventos as $evento) {
	    $lista .= '<option value="'.$evento['id'].'">'.$evento['evento'].'</option>';
	    }
	    echo $lista;

	}
//nivel
	public function traer_niveles(Request $request)
	//Eventos es el nombre del class model
  	{
  		$evento = Eventos::with('niveles')->find($request->input('id'));
		$niveles = $evento->niveles;
		$lista='<option value="" selected="selected" >Seleccione</option>';
	    foreach ($niveles as $nivel) {
	    $lista .= '<option value="'.$nivel['id_nivel'].'">'.$nivel['nivel'].'</option>';
	    }
	    echo $lista;

	}

//categoria
	public function traer_categorias(Request $request)
	//Eventos es el nombre del class model
  	{
  		$categoria = Nivel::with('categorias')->find($request->input('id_nivel'));
		$categorias = $categoria->categorias;
		$lista='<option value="" selected="selected" >Seleccione</option>';
	    foreach ($categorias as $categoria) {
	    $lista .= '<option value="'.$categoria['id_categoria'].'">'.$categoria['categoria'].'</option>';
	    }
	    echo $lista;

	}

	//modalidad
	public function traer_modalidades(Request $request)
	//Eventos es el nombre del class model
  	{
  		$modalidad = Categoria::with('modalidades')->find($request->input('id_categoria'));
		$modalidades = $modalidad->modalidades;
		$lista='<option value="" selected="selected" >Seleccione</option>';
	    foreach ($modalidades as $modalidad) {
	    $lista .= '<option value="'.$modalidad['id_modalidad'].'">'.$modalidad['modalidad'].'</option>';
	    }
	    echo $lista;

	}

	//edad
	public function traer_edades(Request $request)
	//Eventos es el nombre del class model
  	{
  		$edad = Modalidad::with('edades')->find($request->input('id_modalidad'));
		$edades = $edad->edades;
		$lista='<option value="" selected="selected" >Seleccione</option>';
	    foreach ($edades as $edad) {
	    $lista .= '<option value="'.$edad['id_edad'].'">'.$edad['edad'].'</option>';
	    }
	    echo $lista;

	}



	public function logout()
	{
		$_SESSION['Usuario'] = '';
		session('Usuario', '');

		return redirect()->to('../');
	}
}

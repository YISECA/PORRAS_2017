<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Departamento;
use Idrd\Usuarios\Repo\Pais;
use Idrd\Usuarios\Repo\Ciudad;
use Idrd\Usuarios\Repo\Localidad;
use Idrd\Usuarios\Repo\Acceso;
use Mail;
class FormController extends BaseController

{

   var $url;

   private function cifrar($M)
    {   

      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

   private function decifrar($C)
    {   
      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }

    public function listar_datos(){

    $acceso = Form::whereYear('created_at', '=', date('Y'))->get(); 

    $tabla='<table id="lista">

        <thead>

           <tr>

             <th style="text-transform: capitalize;">id</th>

             <th style="text-transform: capitalize;">cedula</th>

             <th style="text-transform: capitalize;">tipo_documento</th>

             <th style="text-transform: capitalize;">primer_nombre</th>

             <th style="text-transform: capitalize;">segundo_nombre</th>

             <th style="text-transform: capitalize;">primer_apellido</th>

             <th style="text-transform: capitalize;">segundo_apellido</th>

             <th style="text-transform: capitalize;">genero</th>

             <th style="text-transform: capitalize;">fecha_nacimiento</th>

             <th style="text-transform: capitalize;">mail</th>

             <th style="text-transform: capitalize;">celular</th>

             <th style="text-transform: capitalize;">eps</th>          

            </tr>

        </thead>

        <tbody id="tabla">';

      foreach ($acceso as $key => $value) 
      {

     
       $tabla.='<tr><td>'.$value->id.'</td>';

       $tabla.='<td>'.$value->cedula.'</td>';

       $tabla.='<td>'.$value->tipo_documento.'</td>';

       $tabla.='<td>'.$value->primer_nombre.'</td>';

       $tabla.='<td>'.$value->segundo_nombre.'</td>';

       $tabla.='<td>'.$value->primer_apellido.'</td>';

       $tabla.='<td>'.$value->segundo_apellido.'</td>';

       $tabla.='<td>'.$value->genero.'</td>';

       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';

       $tabla.='<td>'.$value->mail.'</td>';

       $tabla.='<td>'.$value->celular.'</td>';

       $tabla.='<td>'.$value->eps.'</td></tr>';

      }

      $tabla.='</tbody></table>';
      echo $tabla;
    }

  
public function logear(Request $request){



      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();
      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }    
      session_start() ;

      $_SESSION['id_usuario'] = json_encode($acceso);
      return view('admin'); exit();       

    }


    private function obtener_edad($date) {

     list($Y,$m,$d) = explode("-",$date);
     return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }


//insertar

public function insertar_participante(Request $request){
    $id_equipo = $request->equipo;
    $form = Form::with('rangoEdad')->find($id_equipo);
    $data = [
      'equipo' => $form,
    ];

    return view('form', $data);
}

public function insertar(Request $request){

      $post = $request->input();
     $usuario = Form::where('nombre_institucion', $request->input('nombre_institucion'))->first(); 
      if (!empty($usuario)) { return view('error',['error' => 'Esta Institución o equipo ya fue registrado!'] ); exit(); }
      $formulario = new Form([]);

        //envio de correo

      if($this->inscritos()<=50){

        if(empty($request->tipo_colegio)){
           $request->request->add(['tipo_colegio' => 0]);
        }

      $this->store($formulario, $request->input());

      $id = $formulario->id;
      Mail::send('email', ['id' => $id], function ($m) use ($request) {
      $m->from('no-reply@idrd.gov.co', 'Registro Exitoso a este evento');
      $m->to($request->input('mail'), $request->input('nombre_institucion'))->subject('Registro Exitoso Torneo!');

        });

      }else{
      return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado!']);

      }
        //envio de correo
        return view('error', ['error' => 'Registro insertado, por favor revise su correo para agregar los integrantes del equipo!']);
    }



    //fin insertar
   
// conteo de la tabla

    private function inscritos(){

      $cant = Form::count('id');

      return $cant+1;

    }

    private function store($formulario, $input)

    {


        $formulario['torneo'] = $input['torneo'];

        $formulario['evento'] = $input['evento'];

        $formulario['nivel'] = $input['nivel'];

        $formulario['categoria'] = $input['categoria'];

        $formulario['modalidad'] = $input['modalidad'];

        $formulario['edad'] = $input['edad'];

        $formulario['tipo'] = $input['tipo'];

        $formulario['nombre_institucion'] = $input['nombre_institucion'];

        $formulario['tipo_colegio'] = $input['tipo_colegio'];

        $formulario['ciudad'] = $input['ciudad'];

        $formulario['id_localidad'] = $input['localidad'];

        $formulario['direccion'] = $input['direccion'];

        $formulario['telefono'] = $input['telefono'];

        $formulario['mail'] = $input['mail'];

        $formulario['representante'] = $input['representante'];

        $formulario['cedula_representante'] = $input['cedula_representante'];

        $formulario['entrenador'] = $input['entrenador'];

        $formulario['cedula_entrenador'] = $input['cedula_entrenador'];

        $formulario['mail_entrenador'] = $input['mail_entrenador'];

        $formulario['telefono_entrenador'] = $input['telefono_entrenador'];

        $formulario->save();



        return $formulario;

        

    }

}


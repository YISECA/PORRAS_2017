<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use session;
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
    $i=1;
    $acceso = DB::table('V_reporte')->get();
    $tabla='<table id="lista">

        <thead>
           <tr>
               <th style="text-transform: capitalize;"> # </th>
               <th style="text-transform: capitalize;"> torneo </th>
               <th style="text-transform: capitalize;"> evento </th>
               <th style="text-transform: capitalize;"> nivel </th>
               <th style="text-transform: capitalize;"> categoria </th>
               <th style="text-transform: capitalize;"> modalidad </th>
               <th style="text-transform: capitalize;"> edad </th>
               <th style="text-transform: capitalize;"> nombre_institucion </th>
               <th style="text-transform: capitalize;"> Estado </th>
               <th style="text-transform: capitalize;"> Ver ficha </th>
                <th style="text-transform: capitalize;"> Elimnar </th>
            </tr>

        </thead>

        <tbody id="tabla">';

      foreach ($acceso as $key => $value)
      {
        
                $tabla.='<tr><td>'. $i.'</td>';
                $tabla.='<td>'.$value->torneo.'</td>';
                $tabla.='<td>'.$value->evento.'</td>';
                $tabla.='<td>'.$value->nivel.'</td>';
                $tabla.='<td>'.$value->categoria.'</td>';
                $tabla.='<td>'.$value->modalidad.'</td>';
                $tabla.='<td>'.$value->edad.'</td>';
                $tabla.='<td>'.$value->nombre_institucion.'</td>';
                $tabla.='<td>'.(($value->estado ==1 )?'completo':'incompleto').'</td>';
                $tabla.='<td><a target="_blank" href="ficha?equipo='.$value->id.'">ver ficha</a></td>';
                $tabla.='<td><form  action="eliminar_equipo" id="form_eliminar"><input type="hidden" value="'.$value->id.'" name="id_equipo"><input type="submit" value="Eliminar" ></form></td></tr>';
                $i++;
      }

      $tabla.='</tbody></table>';
      echo $tabla;
      exit();
    }
    public function eliminar_equipo(Request $request){



        $id_equipo = $request->input('id_equipo');

        Form::where(['id'=>$id_equipo])->delete();

        echo 1;

        exit();

    }

public function logear(Request $request){



      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();
      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }

      $_SESSION['id_usuario'] = json_encode($acceso);
      return view('admin'); exit();

    }


    private function obtener_edad($date) {

     list($Y,$m,$d) = explode("-",$date);
     return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }

    public function ficha(Request $request){

        if(!empty($request->input('equipo')) ){
            $id_equipo = $request->input('equipo');
            $equipo =  DB::table('V_reporte')->where('id',$id_equipo)->get();
            if(empty($equipo[0]->participantes)){echo '<h4>el mínimo son 12 participantes para que pueda generar la ficha!</h4>';exit();}
            $inscritos = json_decode($equipo[0]->participantes);
            $datos = ['equipo'=>$equipo[0], 'inscritos'=>$inscritos];
            return view('ficha',$datos);
            exit();
        }

    }



public function validar_existe($cedula){
/*
  $equipos = Form::get();
  foreach ($equipos as $equipo){

       $inscritos = json_decode($equipo->participantes,true);
       $collection = collect($inscritos);
       if ($collection->has($cedula))
        return $collection->has($cedula);


  }*/
  return false;

}

public function validar_edades($edad_tipo,$edad){
switch($edad_tipo){
    case 1:
    if($edad>8)
    {
    return false;
    //1	8 años y menores
    }
    break;
    case 2:
    if($edad>18)
    {
    return false;
    //2	18 años y menores
    }
    break;

    case 3:
    if($edad>11)
    {
    return false;
    //3	11 años y menores
    }
    break;

    case 4:
    if($edad>11)
    {
    return false;
    //4	11 años y menores
    }
    break;
    case 5:
    if($edad>14)
    {
    return false;
    //5	14 años y menores
    }
    break;
    case 6:
    if($edad>14)
    {
    return false;
    //6	14 años y menores
    }
    break;
    case 7:
    if($edad>18 || $edad<10)
    {
    return false;
    //7	10 a 18 años
    }
    break;
    case 8:
    if($edad>18 || $edad<10)
    {
    return false;
    //8	10 a 18 años
    }
    break;
    case 9:
    if($edad>18 || $edad<10)
    {
    return false;
    //9	10 a 18 años
    }
    break;
    case 10:
    if($edad>18 || $edad<10)
    {
    return false;
    //10	10 a 18 años
    }
    break;
    case 11:
    if($edad<15)
    {
    return false;
    //11	15 años en adelante
    }
    break;
    case 12:
    if($edad>8)
    {
    return false;
    //12	8 años y menores
    }
    break;
    case 13:
    if($edad>11)
    {
    return false;
    //13	11 años y menores
    }
    break;
    case 14:
    if($edad>11)
    {
    return false;
    //14	11 años y menores
    }
    break;
    case 15:
    if($edad>14)
    {
    return false;
    //15	14 años y menores
    }
    break;
    case 16:
    if($edad>14)
    {
    return false;
    //16	14 años y menores
    }
    break;
    case 17:
    if($edad>18 || $edad<10)
    {
    return false;
    //17	10 a 18 años
    }
    break;
    case 18:
    if($edad>18 || $edad<10)
    {
    return false;
    //18	10 a 18 años
    }
    break;
    case 19:
    if($edad>18 || $edad<10)
    {
    return false;
    //19	10 a 18 años
    }
    break;
    case 20:
    if($edad>18 || $edad<10)
    {
    return false;
    //20	10 a 18 años
    }
    break;
    case 21:
    if($edad<13)
    {
    return false;
    //21	13 años en adelante
    }
    break;
    case 22:
    if($edad<13)
    {
    return false;
    //22	13 años en adelante
    }
    break;
    case 23:
    if($edad<13)
    {
    return false;
    //23	13 años en adelante
    }
    break;
    case 24:
    if($edad<13)
    {
    return false;
    //24	13 años en adelante
    }
    break;
    case 25:
    if($edad<14)
    {
    return false;
    //25	14 años en adelante
    }
    break;
    case 26:
    if($edad<14)
    {
    return false;
    //26	14 años en adelante
    }
    break;
    case 27:
    if($edad<15)
    {
    return false;
    //27	15 años en adelante
    }
    break;
    case 28:
    if($edad<15)
    {
    return false;
    //28	15 años en adelante
    }
    break;
    case 29:
    if($edad<13)
    {
    return false;
    //29	13 años en adelante
    }
    break;

    case 30:
    if($edad<13)
    {
    return false ;
    //31	13 años en adelante
    }
    break;
    case 31:
    if($edad<14)
    {
    return false ;
    //33	14 años en adelante
    }
    break;
    case 32:
    if($edad<14)
    {
    return false;
    //34	14 años en adelante
    }
    break;
    case 33:
    if($edad<15)
    {
    return false;
    //35	15 años en adelante
    }
    break;
    case 34:
    if($edad<13)
    {
    return false;
    //30	13 años en adelante
    }
    break;
    case 35:
    if($edad<13)
    {
    return false;
    //32	13 años en adelante
    }
    break;
    }
return true;
}

public function finalizar(Request $request){

    $form = Form::find($request->id_equipo);
    $inscritos = json_decode($form->participantes,true);
    $collection = collect($inscritos);
    $actuales = $collection->count();
    if($actuales<12){
         $_SESSION['estado'] = 'el mínimo son 12 participantes';  return redirect('insertar_participante');
         $form->estado = 0;
         $form->save();
    }
    $form->estado = 1;
    $form->save();
    return view('error',['error' => 'Equipo inscirto satisfactoriamente !'] ); exit();

}

public function  insertar_persona(Request $request){

    $form = Form::find($request->id);
    $inscritos = json_decode($form->participantes,true);
    $collection = collect($inscritos);
    $actuales = $collection->count();
    if($actuales>=36){
         $_SESSION['estado'] = 'ya se cumplio el limite de participantes';  return redirect('insertar_participante');
    }
    $edad = $request->TX_Ed;

    if(!$this->validar_edades($form->edad,$edad)){
       $_SESSION['estado'] = 'La edad del participante no cumple con esta categoria';  return redirect('insertar_participante');
    }

    if(!$this->validar_existe($request->cedula)){
        (empty($form->participantes))? $actuales=array():$actuales=json_decode($form->participantes, true);
        $actuales[$request->cedula] = [
          'tipo_documento' => $request->tipo_documento ,
          'cedula' => $request->cedula ,
          'fecha_nacimiento' => $request->fecha_nacimiento ,
          'TX_Ed' => $request->TX_Ed ,
          'primer_nombre' => $request->primer_nombre ,
          'segundo_nombre' => $request->segundo_nombre ,
          'telefono' => $request->telefono ,
          'eps' => $request->eps
        ];

        $form->participantes = json_encode($actuales);
        $form->save();
        $_SESSION['equipo'] = $request->id;
        $_SESSION['estado'] = null;
        return redirect('insertar_participante');
    }else{
        $_SESSION['estado'] = 'Ya fue registrado este participante en este u otro equipo.';  return redirect('insertar_participante');
    }


}

public function eliminar_participante (Request $request){
    $_SESSION['equipo'] =$request->equipo;
    $cedula=$request->cedula;
    $id_equipo=$request->equipo;
    $form = Form::with('rangoEdad')->find($id_equipo);
    $inscritos = json_decode($form->participantes,true);
    $collection = collect($inscritos);
    $collection->forget($cedula);
    $form->participantes= json_encode($collection->toArray());
    $form->save();
    return redirect('insertar_participante');

}

public function insertar_participante(Request $request){

    $id_equipo = (empty($request->equipo))?$_SESSION['equipo']:$request->equipo;
    if(empty($_SESSION['equipo'])){
    $_SESSION['equipo']=$request->equipo;
    }
    $form = Form::with('rangoEdad')->find($id_equipo);
    $inscritos = (empty($form->participantes)) ? null : json_decode($form->participantes);
    $data = [
      'equipo' => $form,
      'inscritos' =>$inscritos,
      'estado' =>  (empty($_SESSION['estado']))?null:$_SESSION['estado']
    ];
    return view('form', $data);

}

public function insertar(Request $request){

      $post = $request->input();
      $contador = Form::where('nombre_institucion', $request->input('nombre_institucion'))->count();
      if ($contador>0) { return view('error',['error' => 'Esta Institución o equipo ya fue registrado!'] ); exit(); }
      $formulario = new Form([]);

        //envio de correo

      if($this->inscritos()<=110){

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

        $formulario['telefono_entrenador'] = $input['telefono_entrenador'];

        $formulario['participantes'] = '{}';

        $formulario->save();



        return $formulario;



    }

}
